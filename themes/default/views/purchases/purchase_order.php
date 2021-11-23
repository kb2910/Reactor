<script>
    $(document).ready(function () {
        var url = "<?= site_url('purchases/getProducts'); ?>";
        table(url);

        function attachment(x) {
            if (x != null) {
                return '<a href="' + site.base_url + 'assets/uploads/' + x + '" target="_blank"><i class="fa fa-chain"></i></a>';
            }
            return x;
        }


        $('#stock').val('0');
        $('#stock').change(function () { 
            var url = "<?= site_url('purchases/getProductsWhereStock'); ?>/"+$('#stock').val();
            table(url);
        });


    });


    function table(url){

        var oTable = $('#EXPData').dataTable({
            "bDestroy": true,
            "aaSorting": [[6, "asc"]],
            "aLengthMenu": [[-1,10, 25, 50, 100], ["<?= lang('all') ?>",10, 25, 50, 100]],
            "iDisplayLength": <?= $Settings->rows_per_page ?>,
            'bProcessing': true, 'bServerSide': true,
            'sAjaxSource': url,
            'fnServerData': function (sSource, aoData, fnCallback) {
                aoData.push({
                    "name": "<?= $this->security->get_csrf_token_name() ?>",
                    "value": "<?= $this->security->get_csrf_hash() ?>"
                });
                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
            },
            "aoColumns": [
                {"bSortable": false, "mRender": checkbox}, {
                    "bSortable": false,
                    "mRender": img_hl
                }, null, null, null, 
                <?php if($Owner || $Admin) {
                     echo '{"mRender": currencyFormat}, {"mRender": currencyFormat},'; 
                     } else { if($this->session->userdata('show_cost')) { echo '{"mRender": currencyFormat},';  } } ?>
                 
            ]
        }).fnSetFilteringDelay().dtFilter([
            {column_number: 2, filter_default_label: "[<?=lang('product_code');?>]", filter_type: "text", data: []},
            {column_number: 3, filter_default_label: "[<?=lang('product_name');?>]", filter_type: "text", data: []},
            {column_number: 4, filter_default_label: "[<?=lang('category');?>]", filter_type: "text", data: []},
            <?php 
            if($Owner || $Admin) {
                echo '{column_number : 5, filter_default_label: "['.lang('product_cost').']", filter_type: "text", data: [] },';
            } else {
                if($this->session->userdata('show_cost')) { $col++; echo '{column_number : 5, filter_default_label: "['.lang('product_cost').']", filter_type: "text", data: [] },'; }
            }
            ?>
            {column_number: 6, filter_default_label: "[Stock]", filter_type: "text", data: []},
        ], "footer");
    }

</script>

<?php if ($Owner) {
    echo form_open('purchases/purcharse_actions', 'id="action-form"');
} ?>
<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-dollar"></i><?= lang('products'); ?></h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon fa fa-tasks tip"
                                                                                  data-placement="left"
                                                                                  title="<?= lang("actions") ?>"></i></a>
                    <ul class="dropdown-menu pull-right" class="tasks-menus" role="menu" aria-labelledby="dLabel">
                        <li><a href="#" id="excel" data-action="export_excel"><i
                                    class="fa fa-file-excel-o"></i> <?= lang('export_to_excel') ?></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">
                <p class="introtext"><?= lang('list_results'); ?></p>

                <div class="table-responsive">
                <select id="stock" name="stock" class="tip form-control" placeholder="Seleccione un stock">
                            <option value="0"><?= lang('select')?> Stock</option>
                            <option value="1">Distinto de cero</option>
                            <option value="2">Igual de 0</option>
                            <option value="3">Menores a 50</option>
                            <option value="4">Mayores o igual a 50</option>
                            <option value="5">Menores a 100</option>
                            <option value="6">Mayores o igual a 100</option>
                    </select>

                    <table id="EXPData" cellpadding="0" cellspacing="0" border="0"
                           class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr class="active">
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkft" type="checkbox" name="check"/>
                            </th>
                            <th class="col-xs-1"><?php echo $this->lang->line("image"); ?></th>
                            <th class="col-xs-2"><?php echo $this->lang->line("code"); ?></th>
                            <th class="col-xs-4"><?php echo $this->lang->line("name"); ?></th>
                            <th class="col-xs-2"><?php echo $this->lang->line("category"); ?></th>
                            <th class="col-xs-2"><?php echo $this->lang->line("cost"); ?></th>
                            <th class="col-xs-2">Stock</i>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="8" class="dataTables_empty"><?= lang('loading_data_from_server'); ?></td>
                        </tr>
                        </tbody>
                        <tfoot class="dtFilter">
                        <tr class="active">
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkft" type="checkbox" name="check"/>
                            </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ($Owner) { ?>
    <div style="display: none;">
        <input type="hidden" name="form_action" value="" id="form_action"/>
        <?= form_submit('performAction', 'performAction', 'id="action-form-submit"') ?>
    </div>
    <?= form_close() ?>
<?php } ?>