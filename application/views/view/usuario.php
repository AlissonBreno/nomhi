<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="<?=base_url()?>dashboard">
                        <em class="fa fa-home"></em>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url()?>Usuario">Usuários</a>
                </li>
                
                <li class="active">Visualizar Usuário</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12" style="float:left;">
                <h1 class="page-header">Visualizar Usuário</h1>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="padding: 2%">
                    <div class="form-row" >
                        <div class="col-md-6">
                            <label for="inputNome">Nome</label>
                            <h3><?php echo $usuarios->Nom_Usu ?></h3>
                            
                        </div>
                        <div class="col-md-6">
                            <label for="inputNome">Sobrenome</label>
                            <h3><?php echo $usuarios->Sob_Usu ?></h3>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="inputNome">Email</label>
                            <h3><?php echo $usuarios->Ema_Usu ?></h3>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputNome">Senha:</label>
                            <h3>**************</h3>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputNome">Endereço</label>
                            <h3><?php echo $usuarios->End_Usu ?></h3>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputNome">Telefone</label>
                            <h3><?php echo $usuarios->Tel_Usu ?></h3>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputNome">CPF</label>
                            <h3><?php echo $usuarios->Cpf_Usu ?></h3>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputNome">RG</label>
                            <h3><?php echo $usuarios->Rg_Usu ?></h3>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputNome">Tipo de Usuário</label>
                        <?php foreach ($tipo_usuarios as $tipo_usuario) { ?>
                            <?php if($usuarios->Tip_Usu == $tipo_usuario->Id_TUsu){ ?>
                                <h3><?php echo $tipo_usuario->Nom_TUsu ?></h3>
                            <?php } ?>
                        <?php } ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputNome">Pontuação</label>
                            <h3><?php echo $usuarios->Pon_Usu ?></h3>
                        </div>
                    </div>
                    <a href="<?=base_url()?>Usuario" title="Voltar" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
        <!--/.row-->