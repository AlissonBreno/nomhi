<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="<?=base_url()?>dashboard">
                        <em class="fa fa-home"></em>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url()?>Usuario">Exercícios</a>
                </li>
                
                <li class="active">Editar Exercício</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12" style="float:left;">
                <h1 class="page-header">Editar Exercício</h1>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <form style="padding: 1%" action="<?=base_url()?>Exercicio/salvar" name="form_add" method="post">
                        <div class="form-row" >
                            <div class="form-group col-md-7">
                                <label for="inputNome">Nome</label>
                                <input type="text" class="form-control" name="nome" value="<?= $exercicios->Nom_Exe?>" placeholder="Nome">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputNome">Assunto</label>
                                <select name="tipo" class="form-control">
                                <option value="<?= $exercicios->Tip_Exe?>"></option>
                                <?php foreach ($hidrocarbonetos as $hidrocarboneto) { ?>
                                    <option value="<?= $hidrocarboneto->Id_Hidro?>"><?= $hidrocarboneto->Nom_Hidro?></option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputNome">Enunciado</label>
                                <textarea name="enunciado" id="enunciado"><?= $exercicios->Des_Exe?></textarea>
                                <script>
                                    CKEDITOR.replace( 'enunciado' );
                                </script>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputNome">Resposta Correta</label>
                                <input type="text" class="form-control" name="resp_correta" value="<?= $exercicios->ResC_Exe?>" placeholder="Resposta Correta">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputNome">Opção 1</label>
                                <input type="text" class="form-control" name="op1" value="<?= $exercicios->Op1_Exe?>" placeholder="Opção 1">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputNome">Opção 2</label>
                                <input type="text" class="form-control" name="op2" value="<?= $exercicios->Op3_Exe?>" placeholder="Opção 2">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputNome">Opção 3</label>
                                <input type="text" class="form-control" name="op3" value="<?= $exercicios->Op3_Exe?>" placeholder="Opção 3">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputNome">Opção 4</label>
                                <input type="text" class="form-control" name="op4" value="<?= $exercicios->Op4_Exe?>" placeholder="Opção 4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputNome">Tentativas</label>
                                <input type="text" class="form-control" name="tentativas" value="<?= $exercicios->Env_Exe?>" placeholder="Tentativas" disabled>
                            </div>
                            <input type="hidden" name="id" value="<?= $exercicios->Id_Exe?>">
                        </div>
                        <button style="margin-left: 2%" type="submit" class="btn btn-success btn-md">Atualizar</button>
                        <a href="<?=base_url()?>Exercicio" title="Voltar" class="btn btn-primary">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
        <!--/.row-->