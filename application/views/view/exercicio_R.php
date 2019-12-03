<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="<?=base_url()?>dashboard">
                        <em class="fa fa-home"></em>
                    </a>
                </li>
                <li>
                    <a href="#">Exercícios</a>
                </li>
                <li class="active"><?php echo $exercicios->Nom_Exe ?></li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="text-align: center"><strong><?php echo $exercicios->Nom_Exe ?></strong></h1>
                <?php  ?>
                <?php foreach ($hidrocarbonetos as $hidrocarboneto) { ?>
                    <?php if($exercicios->Tip_Exe == $hidrocarboneto->Id_Hidro){ ?>
                        <h4 style="text-align: center; margin-top: -2%"><?php echo $hidrocarboneto->Nom_Hidro ?></h4>
                <?php } ?>
                <?php } ?>
                
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="padding: 2%">
                    <?php echo $exercicios->Des_Exe ?>
                    <br>
                    <br>
                    <hr>
                    <h2><strong>RESPONDA:</strong></h2>

                    <form style="margin-left: 1%; font-family: Segoe UI; color: #707070" action="<?=base_url()?>praticar/enviar_resposta" name="form_add" method="post">
                        <div class="form-row" >
                            <div class="form-group col-md-6">   
                                <label class="radio-inline">
                                    <input type="radio" name="opcao" value="<?php echo $exercicios->Op1_Exe ?>"><?php echo $exercicios->Op1_Exe ?>
                                </label>
                            </div>
                            <div class="form-group col-md-6">   
                                <label class="radio-inline">
                                    <input type="radio" name="opcao" value="<?php echo $exercicios->Op2_Exe ?>"><?php echo $exercicios->Op2_Exe ?>
                                </label>
                            </div>
                            <div class="form-group col-md-6">   
                                <label class="radio-inline">
                                    <input type="radio" name="opcao" value="<?php echo $exercicios->Op3_Exe ?>"><?php echo $exercicios->Op3_Exe ?>
                                </label>
                            </div>
                            <div class="form-group col-md-6">   
                                <label class="radio-inline">
                                    <input type="radio" name="opcao" value="<?php echo $exercicios->Op4_Exe ?>"><?php echo $exercicios->Op4_Exe ?>
                                </label>
                            </div>
                        </div>
                        <hr style="border: 1px solid green; margin-right: 2%; margin-top: -0.5%">
                        <input type="hidden" name="id" value="<?php echo $exercicios->Id_Exe ?>">
                        <input type="hidden" name="correta" value="<?php echo $exercicios->ResC_Exe ?>">
                        <input type="hidden" name="env" value="<?php echo $exercicios->Env_Exe ?>">
                        <input type="hidden" name="nome" value="<?php echo $exercicios->Nom_Exe ?>">
                        <input type="hidden" name="assunto" value="<?php echo $exercicios->Tip_Exe ?>">
                        <input type="hidden" name="tentativas" value="<?php echo $this->session->userdata('tentativas') ?>">
                        <button type="submit" class="btn btn-success btn-md">Enviar</button>
                        <a href="<?=base_url()?>Exercicio" title="Voltar" class="btn btn-primary">
                        Voltar</a>     
                    </form>
                </div>
                <?php if($this->session->flashdata('mensagem')){ ?>
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $('#myModal').modal('show');
                        });
                    </script>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"></button>
                            <h4 class="modal-title"><?php echo $this->session->flashdata('mensagem'); ?></h4>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!--/.row-->