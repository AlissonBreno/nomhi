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
                
                <li class="active">Cadastrar novo Tipo de Usuário</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12" style="float:left;">
                <h1 class="page-header">Cadastrar novo Tipo de Usuário</h1>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <form style="padding: 1%" action="<?=base_url()?>tipoUsuario/salvar" name="form_add" method="post">
                        <div class="form-row" >
                            <div class="form-group col-md-12">
                                <label for="inputNome">Nome</label>
                                <input type="text" class="form-control" name="nome" value="" placeholder="Nome">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputNome">Descrição</label>
                                <textarea name="conteudo" id="conteudo"></textarea>
                                <script>
                                    CKEDITOR.replace( 'conteudo' );
                                </script>
                            </div>
                        </div>
                        <button style="margin-left: 2%" type="submit" class="btn btn-success btn-md">Cadastrar</button>
                        <a href="<?=base_url()?>tipoHidro" title="Voltar" class="btn btn-primary">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
        <!--/.row-->