<script type="text/javascript">
    $(document).ready(function () {
        $('#category').val('<?=$category_id?>');
        $('#category').change(function () {
            window.location.replace("<?php echo site_url('products/print_labels'); ?>/" + $(this).val());
            return false;
        });
        
       
        $("#code").blur(function(){ 
            window.location.replace("<?php echo site_url('products/print_labelsCode'); ?>/"+ $('#code').val());
            return false;
        });
       
         $('#stock').val('<?=$stock?>');
        $('#stock').change(function () { 
            window.location.replace("<?php echo site_url('products/print_labelsStock'); ?>/"+ $('#stock').val())
            return false;
        });



        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr td").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            });

    });




    function getItemsByIdAdd(obj) {
        $('#'+obj+'-A').css('display', 'none'); 
        $('#'+obj+'-B').css('display', 'block'); 

        var items = $('#itemsforCheck').val();
        if(items == ""){
            $('#itemsforCheck').val(obj);
        } else {
            $('#itemsforCheck').val(items+','+obj);
        }

        
        $('#printer1').css('display', 'block');
        $('#printer0').css('display', 'block');
        $('#printer2').css('display', 'block');
        $('#printer2').css('margin-left', '10px');
        $('#printer1').css('margin-left', '10px');
        
        var items = $('#itemsforCheck').val();
        let arr = items.split(',');
        $('#spanPrinte1').html(arr.length);
        $('#spanPrinte2').html(arr.length);
    }
    
    function getItemsByIdRemove(obj) {
        $('#'+obj+'-B').css('display', 'none'); 
        $('#'+obj+'-A').css('display', 'block'); 
        var text = "";
        var items = $('#itemsforCheck').val();
        let arr = items.split(',');
        const index = arr.indexOf(obj);
            console.log(arr.length);
            if(arr.length == 1){
                arr = 0;
            } else {
                arr = arr.splice(index, 1);
            }
            $('#itemsforCheck').val(arr == 0 ? "" :arr.toString());
            $('#spanPrinte1').html(arr == 0 ? 0 :arr.length);
            $('#spanPrinte2').html(arr == 0 ? 0 :arr.length);

            if(arr == 0){
                
                $('#printer1').css('display', 'none');
                $('#printer2').css('display', 'none');
                $('#printer0').css('display', 'none');
            }

        
    }

    function somefunction(type){

        if(type == 1){
            window.open('<?= site_url() ?>products/print_labelsCodeImageById/'+''+$('#itemsforCheck').val()+'/', 'sma_popup', 'width=900,height=600,scrollbars=yes,menubar=yes,status=no,resizable=yes,screenx=0,screeny=0'); 
        }else {
            window.open('<?= site_url() ?>products/print_labelsImage2/'+''+$('#itemsforCheck').val()+'/', 'sma_popup', 'width=900,height=600,scrollbars=yes,menubar=yes,status=no,resizable=yes,screenx=0,screeny=0'); 
        }       
    }

    function desCheck(){
        $('.typeB').css('display', 'none'); 
        $('.typeA').css('display', 'block'); 
        $('#printer1').css('display', 'none');
        $('#printer2').css('display', 'none');
        $('#printer0').css('display', 'none');
        $('#itemsforCheck').val("");
        $('#spanPrinte1').html(0);
        $('#spanPrinte2').html(0);

    }
</script>
<style>
    .inputCheck{
            width: 21px;
            border: 0px solid;
            background: #f0ffff03;
            border-radius: 4px;
    }
</style>

<div class="box">
    <div class="box-header no-print">
        <h2 class="blue"><i class="fa-fw fa fa-plus"></i><?= lang('print_labels'); ?></h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <?php if(isset($print_link1)) { ?><li class="dropdown" style="margin-right:10px;"><?= $print_link1; ?></li><?php } ?>
                <?php if(isset($print_link2)) { ?><li class="dropdown" style="margin-right:10px;"><?= $print_link2; ?></li><?php } ?>
               
                </ul>
        </div>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">
                <p class="introtext"><?php echo lang('print_barcode_heading'); ?></p>

                <div class="well well-sm no-print">

                   <input type="hidden" id="itemsforCheck">
                   <div class="form-group">
                        <div class="controls" style="display:flex">
                        <input type="text" id="code" class="form-control"  style="width: 90%;" placeholder="Busqueda por código o descripción del nombre del producto" value="<?= $code?>" aria-describedby="basic-addon1"> 
                        <button type="button" class="btn btn-primary" style="width: 10%;"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>

                    <?php
                    $cat[''] = $this->lang->line("select") . " " . $this->lang->line("category");
                    foreach ($categories as $category) {
                        $cat[$category->id] = $category->name;
                    }
                    echo form_dropdown('category', $cat, $category, 'class="tip form-control" id="category" placeholder="' . $this->lang->line("select") . " " . $this->lang->line("category") . '" required="required"');
                    ?>

                    <!--<span style="margin-top:15px; display: block;"><div class="btn-group">
                            <a class="btn btn-success" href="<?= site_url() ?>"><i class="fa fa-home"></i> <?= lang('home') ?></a>
                            <a class="btn btn-info" onclick="window.history.back()"><i class="fa fa-arrow-circle-left"></i> <?= lang('go_back'); ?></a>
                            <a class="btn btn-primary" href="#" onclick="window.print(); return false;"><i class="fa fa-print"></i> <?php echo $this->lang->line('print'); ?></a>
                    </div></span>-->
                    <br/>
                    <br/>
                    <select id="stock" name="stock" class="tip form-control" placeholder="Seleccione un stock">
                            <option value="0"><?= lang('select')?> Stock</option>
                            <option value="1">Distinto de cero</option>
                            <option value="2">Igual de 0</option>
                            <option value="3">Menores a 50</option>
                            <option value="4">Mayores a 50</option>
                            <option value="5">Menores a 100</option>
                            <option value="6">Mayores a 100</option>
                    </select>


                    <div class="clearfix"></div>


                </div>

                <div style="display: flex;justify-content: end;"> 
                <button type="button" id="printer0" style="display:none"
                onclick="desCheck();return false;" class="btn btn-secondary">
                <i class="fa fa-square-o" aria-hidden="true"></i> Desmarcar Todas 
                </button>

                <button type="button" id="printer1" style="display:none"
                onclick="somefunction(1);return false;" class="btn btn-primary">
                <i class="icon fa fa-print"> </i> Imprimir Etiquetas <span id="spanPrinte1" class="badge badge-light">4</span>
                </button>

                
                <button type="button" id="printer2" style="display:none"
                onclick="somefunction(2);return false;" class="btn btn-primary">
                <i class="icon fa fa-print"> </i> Imprimir Código y Imagen <span id="spanPrinte2" class="badge badge-light">4</span>
                </button>
                </div>

                
                <?php if ($r != 0) { ?>
                    
                    <?php if (!empty($links)) {
                        echo '<div class="text-center">' . $links . '</div>';
                        echo '
                        <input id="myInput" type="text" class="form-control"  style="width: 100%;"  placeholder="Busqueda">';
                    } ?>
                    
                    <?php echo $html; ?>
                    <?php if (!empty($links)) {
                        echo '<div class="text-center">' . $links . '</div>';
                    } ?>
                <?php
                } else {
                    echo '<h3>' . $this->lang->line('no_product_found') . '</h3>';
                }
                ?>

                </div>
        </div>
    </div>
</div>


<?php if(isset($inputs)) { ?>
<div id="formData" style="display: none;">
<?= form_open('products/print_labelsCode', 'id="PrintLabels"'); ?>
<?= $inputs; ?>
<?= form_hidden('print_selected', 1); ?>
<?= form_close(); ?>
<div id="formData1" style="display: none;">
<?= form_open('products/print_labelsCodeImage', 'id="PrintLabels1"'); ?>
<?= $inputs; ?>
<?= form_hidden('print_selected', 1); ?>
<?= form_close(); ?>

</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#labelPrinter').click(function(e) {
            e.preventDefault();
            //$('#PrintLabels').submit();
            var fdata = $('#formData').html();
            Popup(fdata);
        });
        $('#labelPrinter').click(function(e) {
            e.preventDefault();
            //$('#PrintLabels').submit();
            var fdata = $('#formData').html();
            Popup(fdata);
        });


    });
    function Popup(data) {
        var mywindow = window.open('', 'sma_popup', 'height=600,width=900');
        mywindow.document.write('<!DOCTYPE html><html><head><title>Print</title>');
        mywindow.document.write('<link rel="stylesheet" href="<?=$assets;?>bootstrap/css/bootstrap.min.css" type="text/css" />');
        mywindow.document.write('<style>body {  background:white; text-align:center; } a {color: #333;} #totaltbl td, #totaltbl th { vertical-align: middle; }</style>');
        mywindow.document.write('</head><body>');
        mywindow.document.write(data);
        mywindow.document.write('<script type="text/javascript" src="<?= $assets ?>js/jquery-2.0.3.min.js"><\/script>');
        mywindow.document.write('<script>setInterval(function(){$(\'#PrintLabels\').submit();}, 10);<\/script>');
        mywindow.document.write('</body></html>');
    }

</script>
<?php } ?>

