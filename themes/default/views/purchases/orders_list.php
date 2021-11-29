<script>
    $(document).ready(function () {
        var oTable = $('#POData').dataTable({
            "aaSorting": [[1, "desc"]],
            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "<?= lang('all') ?>"]],
            "iDisplayLength": <?= $Settings->rows_per_page ?>,
            'bProcessing': true, 'bServerSide': true,
            'sAjaxSource': '<?= site_url('purchases/getOrderList') ?>',
            'fnServerData': function (sSource, aoData, fnCallback) {
                aoData.push({
                    "name": "<?= $this->security->get_csrf_token_name() ?>",
                    "value": "<?= $this->security->get_csrf_hash() ?>"
                });
                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
            },
            "aoColumns": [{
                "bSortable": false,
                "mRender": checkbox
            }, {"mRender": fld}, null, null, {"mRender": row_status}, {"mRender": currencyFormat}, {"bSortable": false}],
            'fnRowCallback': function (nRow, aData, iDisplayIndex) {
                var oSettings = oTable.fnSettings();
                nRow.id = aData[0];
                nRow.className = "order_link";
                return nRow;
            },
            "fnFooterCallback": function (nRow, aaData, iStart, iEnd, aiDisplay) {
                var total = 0, paid = 0, balance = 0;
                for (var i = 0; i < aaData.length; i++) {
                    total += parseFloat(aaData[aiDisplay[i]][5]);
                }
                var nCells = nRow.getElementsByTagName('th');
                nCells[5].innerHTML = currencyFormat(total);
            }
        }).fnSetFilteringDelay().dtFilter([
            {column_number: 1, filter_default_label: "[<?=lang('date');?> (yyyy-mm-dd)]", filter_type: "text", data: []},
            {column_number: 2, filter_default_label: "[<?=lang('ref_no');?>]", filter_type: "text", data: []},
            {column_number: 3, filter_default_label: "[<?=lang('supplier');?>]", filter_type: "text", data: []},
            {column_number: 4, filter_default_label: "[<?=lang('status');?>]", filter_type: "text", data: []},
        ], "footer");



        $('#statusTable').dataTable({
            "aaSorting": [[1, "asc"]],
            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "<?= lang('all') ?>"]],
            "iDisplayLength": <?= $Settings->rows_per_page ?>,
            'bProcessing': true, 'bServerSide': true,
            'sAjaxSource': '<?= site_url('purchases/getStatus') ?>',
            'fnServerData': function (sSource, aoData, fnCallback) {
                aoData.push({
                    "name": "<?= $this->security->get_csrf_token_name() ?>",
                    "value": "<?= $this->security->get_csrf_hash() ?>"
                });
                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
            },
            "aoColumns": [{"bSortable": false, "mRender": checkbox}, null, {"bSortable": false}]
        });
    


        <?php if($this->session->userdata('remove_pols')) { ?>
        if (localStorage.getItem('poitems')) {
            localStorage.removeItem('poitems');
        }
        if (localStorage.getItem('podiscount')) {
            localStorage.removeItem('podiscount');
        }
        if (localStorage.getItem('potax2')) {
            localStorage.removeItem('potax2');
        }
        if (localStorage.getItem('poshipping')) {
            localStorage.removeItem('poshipping');
        }
        if (localStorage.getItem('poref')) {
            localStorage.removeItem('poref');
        }
        if (localStorage.getItem('powarehouse')) {
            localStorage.removeItem('powarehouse');
        }
        if (localStorage.getItem('ponote')) {
            localStorage.removeItem('ponote');
        }
        if (localStorage.getItem('posupplier')) {
            localStorage.removeItem('posupplier');
        }
        if (localStorage.getItem('pocurrency')) {
            localStorage.removeItem('pocurrency');
        }
        if (localStorage.getItem('poextras')) {
            localStorage.removeItem('poextras');
        }
        if (localStorage.getItem('podate')) {
            localStorage.removeItem('podate');
        }
        if (localStorage.getItem('postatus')) {
            localStorage.removeItem('postatus');
        }
        <?php $this->sma->unset_data('remove_pols'); } ?>
    });

</script>

<?php if ($Owner) {
    echo form_open('purchases/orders_actions', 'id="action-form"');
} ?>
<div class="box">
    <div class="box-header">
        <h2 class="blue"><i
                class="fa-fw fa fa fa-list-alt"></i><?= lang('orders'); ?>
        </h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon fa fa-tasks tip" data-placement="left" title="<?= lang("actions") ?>"></i></a>
                    <ul class="dropdown-menu pull-right" class="tasks-menus" role="menu" aria-labelledby="dLabel">
                        <li><a href="<?= site_url('purchases/addOrder') ?>"><i class="fa fa-plus-circle"></i> <?= lang('new_ordes') ?></a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="bpo" title="<b><?= $this->lang->line("delete_orders") ?></b>" data-content="<p><?= lang('r_u_sure') ?></p><button type='button' class='btn btn-danger' id='delete' data-action='delete'><?= lang('i_m_sure') ?></a> <button class='btn bpo-close'><?= lang('no') ?></button>" data-html="true" data-placement="left"><i class="fa fa-trash-o"></i> <?= lang('delete_orders') ?></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#list"><i class="fa fa-list-ol" aria-hidden="true"></i> <?= lang("list_orders");?></a></li>
                        <li><a data-toggle="tab" href="#addStatus"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <?= lang("status"); ?>  <?= lang("orders"); ?></a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="list" class="tab-pane fade in active">
                            
                        <div class="well well-small"><?= lang('list_results'); ?></div>

                            <div class="table-responsive">
                                <table id="POData" cellpadding="0" cellspacing="0" border="0"
                                    class="table table-bordered table-hover table-striped">
                                    <thead>
                                    <tr class="active">
                                        <th style="min-width:1px !important; width: 1px; text-align: center;">
                                            <input class="checkbox checkft" type="checkbox" name="check"/>
                                        </th>
                                        <th><?php echo $this->lang->line("date"); ?></th>
                                        <th><?php echo $this->lang->line("ref_no"); ?></th>
                                        <th><?php echo $this->lang->line("supplier"); ?></th>
                                        <th><?php echo $this->lang->line("status"); ?></th>
                                        <th><?php echo $this->lang->line("total"); ?></th>
                                        <th style="width:100px;"><?php echo $this->lang->line("actions"); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="10" class="dataTables_empty"><?= lang('loading_data_from_server'); ?></td>
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
                                        <th><?php echo $this->lang->line("total"); ?></th>
                                        <th style="width:100px; text-align: center;"><?php echo $this->lang->line("actions"); ?></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div id="addStatus" class="tab-pane fade">
                                <div class="box">
                                    <div class="box-header">
                                        <h2 class="blue"><i class="fa-fw fa fa-folder-open"></i><?= lang('Status'); ?></h2>

                                        <div class="box-icon">
                                            <ul class="btn-tasks">
                                                <li class="dropdown">
                                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon fa fa-tasks tip"
                                                                                                                data-placement="left"
                                                                                                                title="<?= lang("actions") ?>"></i></a>
                                                    <ul class="dropdown-menu pull-right" class="tasks-menus" role="menu" aria-labelledby="dLabel">
                                                        <li><a href="<?php echo site_url('purchases/add_status'); ?>" data-toggle="modal"
                                                            data-target="#myModal"><i class="fa fa-plus"></i> <?= lang('add') ?></a></li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                    <div class="table-responsive">
                                                <table id="statusTable" class="table table-bordered table-hover table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th style="min-width:1px !important; width: 1px; text-align: center;">
                                                            <input class="checkbox checkth" type="checkbox" name="check"/>
                                                        </th>
                                                        <th><?= $this->lang->line("name"); ?></th>
                                                        <th style="width:20px !important; text-align: center !important;"><?= $this->lang->line("actions"); ?></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td colspan="5" class="dataTables_empty"><?= lang('loading_data_from_server') ?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>
                        </div>
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