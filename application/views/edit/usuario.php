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
                
                <li class="active">Editar Usuário</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12" style="float:left;">
                <h1 class="page-header">Editar Usuário</h1>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <form style="padding: 1%" action="<?=base_url()?>Usuario/salvar" name="form_add" method="post">
                        <div class="form-row" >
                            <div class="form-group col-md-6">
                                <label for="inputNome">Nome</label>
                                <input type="text" class="form-control" name="nome" value="<?php echo $usuarios->Nom_Usu ?>" placeholder="Nome">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputNome">Sobrenome</label>
                                <input type="text" class="form-control" name="sobrenome" value="<?php echo $usuarios->Sob_Usu ?>" placeholder="Sobrenome">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label for="inputNome">Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $usuarios->Ema_Usu ?>" placeholder="Email">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputNome">Senha (padrão)</label>
                                <input type="password" class="form-control" name="senha" value="<?php echo $usuarios->Sen_Usu ?>" placeholder="Senha">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputNome">Endereço</label>
                                <input type="text" class="form-control" name="endereco" value="<?php echo $usuarios->End_Usu ?>" placeholder="Endereço">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputNome">Telefone</label>
                                <input type="text" class="form-control" name="telefone" value="<?php echo $usuarios->Tel_Usu ?>" placeholder="Telefone">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputNome">CPF</label>
                                <input type="text" class="form-control" name="cpf" value="<?php echo $usuarios->Cpf_Usu ?>" placeholder="CPF">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputNome">RG</label>
                                <input type="text" class="form-control" name="rg" value="<?php echo $usuarios->Rg_Usu ?>" placeholder="RG">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputNome">Tipo de Usuário</label>
                            <select name="tipo" class="form-control">
                                <option value="<?php echo $usuarios->Tip_Usu ?>"></option>
                                <?php foreach ($tipo_usuarios as $tipo_usuario) { ?>
                                    <option value="<?= $tipo_usuario->Id_TUsu?>"><?= $tipo_usuario->Nom_TUsu?></option>
                                <?php } ?>
                            </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputNome">Pontuação</label>
                                <input type="text" class="form-control" name="pontuacao" value="<?php echo $usuarios->Pon_Usu ?>" placeholder="Pontuação" disabled>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $usuarios->Id_Usu ?>">
                        </div>
                        <button style="margin-left: 2%" type="submit" class="btn btn-success btn-md">Atualizar</button>
                        <a href="<?=base_url()?>Usuario" title="Voltar" class="btn btn-primary">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
        <!--/.row-->