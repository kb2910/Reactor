<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-plus"></i><?= lang('import_products_by_csv'); ?></h2>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12">


                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#rulesTabs"><i class="fa fa-list-ol" aria-hidden="true"></i> Normas</a></li>
                        <li><a data-toggle="tab" href="#excelTabs"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel</a></li>
                        <li><a data-toggle="tab" href="#csvTabs"><i class="fa fa-file" aria-hidden="true"></i> Csv</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="rulesTabs" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Para la carga de documento Excel (.xls)</div>
                                        <div class="panel-body">
                                            <ol>
                                                <li> Solo deben utilizar cargar la plantilla para carga de datos.</li>
                                                <li> No se pueden cambiar el formato del documento descargado.</li>
                                                <li> La primera fila o header de la tabla de la hoja de excel no se debe cambiar.</li>
                                                <li> Si el producto no tiene valor en la celda se coloca "0".</li>
                                                <li> Tanto la categor&iacute;a como el impuesto debe ser igual al cargado en la app, sino ocurr&iacute;a un error y no podra ser guardado el registro, el proceso no se detiene continua con los que esten bien, luego enviara un mensaje con los c&oacute;digos registros que no fueron creados.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Para la carga de documento Csv (.csv)</div>
                                        <div class="panel-body">
                                            <ol>
                                                <li> Solo deben utilizar cargar la plantilla para carga de datos.</li>
                                                <li> No se pueden cambiar el formato del documento descargado.</li>
                                                <li> Los valores deben ser separados por una coma y en cada fila cada registro.</li>
                                                <li> La primera fila o header de la tabla de la hoja de excel no se debe cambiar.</li>
                                                <li> Tanto la categor&iacute;a como el impuesto debe ser igual al cargado en la app, sino ocurria un error y no podra ser guardado el registro y se detendrá el proceso.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="excelTabs" class="tab-pane fade">
                            <?php
                            $attrib = array('class' => 'form-horizontal', 'data-toggle' => 'validator', 'role' => 'form');
                            echo form_open_multipart("products/import_excel", $attrib)
                            ?>
                            <div class="well well-small">
                            <a href="generar_excel_template/" class="btn btn-primary pull-right"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <?= lang("download_sample_file") ?></a>
                                <span class="text-warning"><?= lang("xls1"); ?></span><br/><?= lang("xls2"); ?> <span
                                class="text-info">(<?= lang("product_code") . ', ' . lang("product_name") . ', ' . lang("category_code") . ', ' . lang("product_unit") . ', ' . lang("product_cost") . ', ' . lang("product_price") . ', ' . lang("alert_quantity") . ', ' . lang("product_tax") . ', ' . lang("tax_method") . ', ' . lang("subcategory_code") . ', ' . lang("product_variants_sep_by"); ?>
                                    )</span> <?= lang("xls3"); ?>

                            </div>
                            <div>
                                <label for="xls_file"><?= lang("upload_file"); ?></label>
                                <input type="file" name="userfile" class="form-control file" data-show-upload="false"
                                       data-show-preview="false" id="xls_file" required="required"/>
                            </div>
                            <br/>
                            <div >
                                <?php echo form_submit('import', $this->lang->line("import"), 'class="btn btn-primary"'); ?>
                            </div>
                            <?= form_close(); ?>
                        </div>
                        <div id="csvTabs" class="tab-pane fade">
                            <?php
                            $attrib = array('class' => 'form-horizontal', 'data-toggle' => 'validator', 'role' => 'form');
                            echo form_open_multipart("products/import_csv", $attrib)
                            ?>
                            <div class="well well-small">
                                <a href="<?php echo base_url(); ?>assets/csv/sample_products.csv"
                                class="btn btn-primary pull-right"><i
                                        class="fa fa-download"></i> <?= lang("download_sample_file") ?></a>
                                <span class="text-warning"><?= lang("csv1"); ?></span><br/><?= lang("csv2"); ?> <span
                                    class="text-info">(<?= lang("product_code") . ', ' . lang("product_name") . ', ' . lang("category_code") . ', ' . lang("product_unit") . ', ' . lang("product_cost") . ', ' . lang("product_price") . ', ' . lang("alert_quantity") . ', ' . lang("product_tax") . ', ' . lang("tax_method") . ', ' . lang("subcategory_code") . ', ' . lang("product_variants_sep_by"); ?>
                                    )</span> <?= lang("csv3"); ?>

                            </div>
                            <div>
                                <label for="csv_file"><?= lang("upload_file"); ?></label>
                                <input type="file" name="userfile" class="form-control file" data-show-upload="false"
                                       data-show-preview="false" id="csv_file" required="required"/>
                            </div>
                            <br/>
                            <div>
                                <?php echo form_submit('import', $this->lang->line("import"), 'class="btn btn-primary"'); ?>
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