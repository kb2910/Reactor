<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-plus"></i><?= lang('settings_ML'); ?></h2>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12">

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#listTabs"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Consultar Preguntas</a></li>
                        <li><a data-toggle="tab" href="#addTabs"><i class="fa fa-user-plus" aria-hidden="true"></i> Agregar cuentas</a></li>
                        <li><a data-toggle="tab" href="#addTemplates"><i class="fa fa-envelope-square" aria-hidden="true"></i> Plantilla para respuesta</a></li>
                    </ul>

                    <div class="tab-content">              
                          <div id="listTabs" class="tab-pane fade in active">


                                <div class="form-group all">
                                        <?php
                                        $dataAccounts="";
                                        foreach ($accountsML as $category) {
                                            $dataAccounts= $dataAccounts . "<option value=".$category->token_access."> ".$category->name ."   (".$category->email.") "."</option>";
                                        }
                                        ?>
                                    </div>
                                <select class="form-control select" required="required" style="width:100%"  id="inputGroupSelect01">
                                    <option selected>Seleccione</option>
                                    <?= $dataAccounts ?>
                                </select> <br/><br/>
                                <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th scope="col"  width="15px">#</th>
                                    <th scope="col"  width="350px">Usuario</th>
                                    <th scope="col">Pregunta</th>
                                    <th scope="col" width="150px">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>banezcak@gmail.com</td>
                                    <td>Otto</td>
                                    <td><!-- Button trigger modal -->
                                    <div>
                                    <a class="btn btn-info" href="<?php echo site_url('system_settings/question_response'); ?>" data-toggle="modal"
                                        data-target="#myModal"><i class="fa fa-commenting-o"></i></a>
                                    <a  class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>banezcak@gmaul.com</td>
                                    <td>Thornton</td>
                                    <td>
                                    <a class="btn btn-info" href="<?php echo site_url('system_settings/question_response'); ?>" data-toggle="modal"
                                        data-target="#myModal"><i class="fa fa-commenting-o"></i></a>
                                    <a class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
            
                            <div id="addTabs" class="tab-pane fade">
                            <?php $attrib = array('data-toggle' => 'validator', 'role' => 'form');
                                    echo form_open_multipart("system_settings/addAccountsML", $attrib); ?>
                                        <div class="form-group">
                                            <?= lang("represent_account") ?>
                                            <input id="image" type="text" name="text1" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <?= lang("email_ML") ?>
                                            <input id="image" type="email" name="text2" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <?= lang("token_access") ?>
                                            <input id="image" type="text" name="text3" class="form-control">
                                        </div>
                                        <?php echo form_submit('addAccountsML', lang('save'), 'class="btn btn-primary"'); ?>
                                <?php echo form_close(); ?>
                            </div>
                            <div id="addTemplates" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Cabecera de la respuesta</div>
                                            <div class="panel-body">
                                                    <?php
                                                    $attrib = array('class' => 'form-horizontal', 'data-toggle' => 'validator', 'role' => 'form');
                                                    echo form_open_multipart("system_settings/add_template_header", $attrib)
                                                    ?>
                                                            <?= form_textarea('text',($headerReponse[0] == false ?'':$headerReponse[0]->text), 'class="form-control" id="text"'); ?><br/>
                                                            <?php echo form_submit('updateHeader', $this->lang->line("update"), 'class="btn btn-primary"'); ?>
                                                    <?= form_close(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel panel-default">
                                        <div class="panel-heading">Final de la respuesta</div>
                                        <div class="panel-body">
                                                    <?php
                                                    $attrib = array('class' => 'form-horizontal', 'data-toggle' => 'validator', 'role' => 'form');
                                                    echo form_open_multipart("system_settings/add_template_footer", $attrib)
                                                    ?>
                                                            <?= form_textarea('textPFianl',($footerReponse[0] == false ?'':$footerReponse[0]->text), 'class="form-control" id="textPFianl"'); ?><br/>
                                                            <?php echo form_submit('updateFooter', $this->lang->line("update"), 'class="btn btn-primary"'); ?>
                                                    <?= form_close(); ?>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
