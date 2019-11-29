<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="<?=base_url()?>dashboard">
                        <em class="fa fa-home"></em>
                    </a>
                </li>
                <li class="active">Exercícios</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-6" style="float:left;">
                <h1 class="page-header">Exercícios</h1>
            </div>
            <div class="col-md-6">
                <a href="<?=base_url()?>Exercicio/cadastrar">
                    <button type="button" class="btn btn-lg btn-primary" style="float: right; margin-top: 3.5%"><span class="fa fa-plus"></span>  Novo item</button>
                </a>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <?php if($this->session->flashdata('mensagem')){ ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('mensagem'); ?>
                    </div>
                <?php } ?>
                <?php if($this->session->flashdata('erro')){ ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('erro'); ?>
                    </div>
                <?php } ?>
                <div class="panel panel-default">
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
                                    <tr>
                                        <td><?= $exercicio->Id_Exe?></td>
    						            <td><?= $exercicio->Nom_Exe?></td>
                                        <?php foreach ($hidrocarbonetos as $hidrocarboneto) { ?>
                                            <?php if($hidrocarboneto->Id_Hidro == $exercicio->Tip_Exe) {?>
                                                <td><?= $hidrocarboneto->Nom_Hidro?></td>
                                            <?php } ?>
                                        <?php } ?>
                                        <td><?= $exercicio->Env_Exe?></td>
                                        <td style="text-align:center">
                                            <a href="<?=base_url()?>Exercicio/visualizar/<?= $exercicio->Id_Exe?>" title="Detalhes" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>						                		</a>
                                            <a href="<?=base_url()?>Exercicio/atualizar/<?= $exercicio->Id_Exe?>" title="Editar Cadastro" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                            <a href="<?=base_url()?>Exercicio/apagar/<?= $exercicio->Id_Exe?>" title="Apagar Cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->