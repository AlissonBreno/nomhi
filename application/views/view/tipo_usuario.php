<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="<?=base_url()?>dashboard">
                        <em class="fa fa-home"></em>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url()?>tipoUsuario">Tipo de Usuários</a>
                </li>
                <li class="active">Visualizar Tipo de Usuário</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="text-align: center"><?php echo $tipo_usuarios->Nom_TUsu ?></h1>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="padding: 2%">
                    <?php echo $tipo_usuarios->Desc_TUsu ?>
                    <a href="<?=base_url()?>tipoUsuario" title="Voltar" class="btn btn-primary">
                    Voltar</a>    
                </div>

            </div>
        </div>
        <!--/.row-->