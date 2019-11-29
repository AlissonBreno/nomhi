<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="<?=base_url()?>dashboard">
                        <em class="fa fa-home"></em>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url()?>tipoHidro">Grupos Químicos</a>
                </li>
                
                <li class="active">Editar Hidrocarbonetos</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12" style="float:left;">
                <h1 class="page-header">Editar Hidrocarboneto</h1>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <form style="padding: 1%" action="<?=base_url()?>tipoHidro/salvar" name="form_add" method="post">
                        <div class="form-row" >
                            <div class="form-group col-md-12">
                                <label for="inputNome">Nome</label>
                                <input type="text" class="form-control" name="nome" value="<?php echo $hidrocarbonetos->Nom_Hidro ?>" placeholder="Nome">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputNome">Conteúdo</label>
                                <textarea name="conteudo" id="conteudo"><?php echo $hidrocarbonetos->Desc_Hidro ?></textarea>
                                <script>
                                    CKEDITOR.replace( 'conteudo' );
                                </script>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $hidrocarbonetos->Id_Hidro ?>">
                        </div>

                        <button style="margin-left: 2%" type="submit" class="btn btn-success btn-md">Atualizar</button>
                        <a href="<?=base_url()?>tipoHidro" title="Voltar" class="btn btn-primary">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
        <!--/.row-->