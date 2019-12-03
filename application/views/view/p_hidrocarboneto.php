<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="<?=base_url()?>dashboard">
                        <em class="fa fa-home"></em>
                    </a>
                </li>
                <li class="active"><?php echo $hidrocarbonetos->Nom_Hidro ?></li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="text-align: center"><?php echo $hidrocarbonetos->Nom_Hidro ?></h1>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="padding: 2%">
                    <?php echo $hidrocarbonetos->Desc_Hidro ?>


                    <br>
                    <hr>
                    <h2><strong>Exercícios</strong></h2>

                    <div style="overflow: auto; width: 100%; height: 380px;padding: 1%"> 
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col" style="text-align:left;t">Nome</th>
                                <th scope="col" style="text-align:left;t">Assunto</th>
                                <th scope="col" style="text-align:left;t">Tentativas</th>
                                <th scope="col" style="text-align:center">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($exercicios as $exercicio) { ?>
                                    <?php if($exercicio->Tip_Exe == $hidrocarbonetos->Id_Hidro){ ?>
                                        <tr>
                                            <td><?= $exercicio->Id_Exe?></td>
                                            <td><?= $exercicio->Nom_Exe?></td>
                                            <td><?php echo $hidrocarbonetos->Nom_Hidro ?></td>
                                            <td><?= $exercicio->Env_Exe?></td>
                                            <td style="text-align:center">
                                                <a href="<?=base_url()?>Praticar/visualizar/<?= $exercicio->Id_Exe?>" title="Detalhes" class="btn btn-success">Resolver</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <br>
                    <br>
                    <a href="<?=base_url()?>tipoHidro" title="Voltar" class="btn btn-primary">
                    Voltar</a>    
                </div>

            </div>
        </div>
        <!--/.row-->