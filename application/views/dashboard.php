<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="<?=base_url()?>dashboard">
                        <em class="fa fa-home"></em>
                    </a>
                </li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>
        <!--/.row-->

        <div class="panel panel-container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 no-padding">
                    <div class="panel panel-teal panel-widget border-right">
                        <div class="row no-padding">
                            <div class="large">
                                <?php foreach ($usuarios as $usuario) { ?>
                                        <?php $cod = $this->session->userdata('codigo'); ?>
                                        <?php if($cod == $usuario->Id_Usu){ ?>
                                            <tr>
                                                <?php echo $usuario->Pon_Usu ?>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
                            </div>
                            <div class="text-muted">Esses são os seus acertos :D</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Seus Exercícios resolvidos
                        <ul class="pull-right panel-settings panel-button-tab-right">
                            <li class="dropdown">
                                <a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                                    <em class="fa fa-cogs"></em>
                                </a>
                                
                            </li>
                        </ul>
                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                    <div class="panel-body">
                        <div style="overflow: auto; width: 100%; height: 380px;padding: 1%"> 
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col" style="text-align:left;t">Nome</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($exercicios as $exercicio) { ?>
                                        <?php $cod = $this->session->userdata('codigo'); ?>
                                        <?php if($cod == $exercicio->Alu_ExerR){ ?>
                                            <tr>
                                                <td><?= $exercicio->Id_ExerR?></td>
                                                <td><?= $exercicio->Nom_ExerR?></td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->

        
        