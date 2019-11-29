<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Dashboard</title>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/datepicker3.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/styles.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">Maria Eduarda</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Criadora de Conteúdo</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <ul class="nav menu">
            <li><a href="<?=base_url()?>dashboard"><em class="fa fa-dashboard"></em> Dashboard</a></li>
            <li class="parent ">
                <a data-toggle="collapse" href="#sub-item-1">
                    <em class="fa fa-navicon"></em> Grupos Químicos <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li>
                        <a class="" href="<?=base_url()?>tipoHidro">
                            <span class="fa fa-table"></span> Hidrocarbonetos
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?=base_url()?>tipoHidro/cadastrar">
                            <span class="fa fa-plus"></span> Cadastrar Novo
                        </a>
                    </li>
                </ul>
            </li>
            <li class="parent ">
                <a data-toggle="collapse" href="#sub-item-2">
                    <em class="fa fa-navicon"></em> Usuário <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li>
                        <a class="" href="<?=base_url()?>Usuario">
                            <span class="fa fa-table"></span> Usuários
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?=base_url()?>Usuario/cadastrar">
                            <span class="fa fa-plus"></span> Cadastrar Novo
                        </a>
                    </li>
                </ul>
            </li>
            <li class="parent ">
                <a data-toggle="collapse" href="#sub-item-3">
                    <em class="fa fa-navicon"></em> Tipos de Usuário <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-3">
                    <li>
                        <a class="" href="<?=base_url()?>tipoUsuario">
                            <span class="fa fa-table"></span> Tipos de Usuários
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?=base_url()?>tipoUsuario/cadastrar">
                            <span class="fa fa-plus"></span> Cadastrar Novo
                        </a>
                    </li>
                </ul>
            </li>
            <li class="parent ">
                <a data-toggle="collapse" href="#sub-item-4">
                    <em class="fa fa-navicon"></em> Exercício <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-4">
                    <li>
                        <a class="" href="<?=base_url()?>Exercicio">
                            <span class="fa fa-table"></span> Exercícios
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?=base_url()?>Exercicio/cadastrar">
                            <span class="fa fa-plus"></span> Cadastrar Novo
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="login.html"><em class="fa fa-power-off"></em> Logout</a></li>

        </ul>
    </div>
    <!--/.sidebar-->