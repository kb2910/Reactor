<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-2x">&times;</i>
            </button>
            <h4 class="modal-title" id="myModalLabel">Responder Pregunta:</h4>
        </div>
        <div class="modal-body">
        <p>Pregunta: Que color tienes?</p>
        <div class="form-group">
            <?php 
               $text1= $headerReponse[0] == false ?'':$headerReponse[0]->text;
               $text2= $footerReponse[0] == false ?'':$footerReponse[0]->text;
               $template = $text1 . " <br/> <br/> <br/> ". $text2;
            ?>
            <label for="exampleFormControlTextarea1">Respuesta:</label>
            <?php
            $attrib = array('class' => 'form-horizontal', 'data-toggle' => 'validator', 'role' => 'form');
            echo form_open_multipart("system_settings/add_template_header", $attrib)
            ?>
            <?= form_textarea('text',$template, 'class="form-control" id="respuesta"'); ?><br/>  
        </div>
        </div>
        <div class="modal-footer">
            <?php echo form_submit('modalQuestion', $this->lang->line("send"), 'class="btn btn-primary"'); ?>
            <?= form_close(); ?>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
</div>
<script type="text/javascript" src="<?= $assets ?>js/custom.js"></script>
<?= $modal_js ?>