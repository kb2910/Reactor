<script type="text/javascript" src="<?= $assets ?>js/html2canvas.min.js"></script>
<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-cogs"></i><?= lang('settings_products'); ?></h2>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                <?= lang("massive_cost_products")?></a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                            <?php $attrib = array('data-toggle' => 'validator', 'role' => 'form');
                            echo form_open("products/assign_cost_products", $attrib); ?>
                                <div>
                                    <div class="form-group all">
                                        <i class="fa fa-list" aria-hidden="true"></i>  <?= lang("inputPerc") ?>  
                                        <select name="qtyPer" class="form-control select" placeholder="'.<?= lang("select_percentaje_to_load")?>." id="qtyPer">
                                        <option value=""><?= lang("select_percentaje_to_load")?></option>
                                            <option value="10">10%</option>
                                            <option value="20">20%</option>
                                            <option value="30">30%</option>
                                            <option value="40">40%</option>
                                            <option value="50">50%</option>
                                            <option value="60">60%</option>
                                            <option value="70">70%</option>
                                            <option value="80">80%</option>
                                            <option value="90">90%</option>
                                            <option value="100">100%</option>
                                            </select>
                                    </div>
                                    <?= lang("for_category") ?><br/>
                                    <div class="form-group all">
                                        <?php
                                        $cat[''] = "";
                                        foreach ($categories as $category) {
                                            $cat[$category->id] = $category->name;
                                        }
                                        echo form_dropdown('category', $cat, (isset($_POST['category']) ? $_POST['category'] : ''), 'class="form-control select" id="category" placeholder="----- Todas -----" required="required" style="width:100%"')
                                        ?>
                                    </div>
                                </div>
                                <div style="margin-top: 15px">
                                    <?php echo form_submit('update', $this->lang->line("update"), 'class="btn btn-primary"'); ?>
                                </div>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>