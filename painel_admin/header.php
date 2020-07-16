<?php
session_start();
include('../verify_login.php');
if($_SESSION['access_level'] != 'Administrador'){
  header('Location: ../index.php');
  exit();
}
include('controller/cadastrar.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="../assets/css/darkmode.css" rel="stylesheet">
    <link href="../assets/css/main.css" rel="stylesheet">
    <link href="../assets/css/scrollbar.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<!-- modal Cadastrar novo Produto -->

<div class="modal fade bd-example-modal-lg-produto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar novo produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="">
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="nome-produto" class="">Nome/Marca do produto</label>
            <input name="nome" id="nome-produto" placeholder="Nome do produto" type="name" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="codigo-produto" class="">Código</label>
            <input name="codigo_barra" id="codigo-produto" placeholder="Código de barra" type="name" class="form-control">
        </div>
    </div>
</div>
<div class="position-relative form-group">
    <label for="desproduto" class="">Descrição</label>
    <input name="desproduto" id="desproduto" placeholder="Descrição do produto" type="text" class="form-control">
</div>
<div class="form-row">
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="valor" class="">Valor</label>
            <input name="valor" id="valor" placeholder="R$" type="text" class="form-control">
        </div>
    </div>
</div>
<div class="position-relative row form-group">
<label for="imagem" class="col-sm-2 col-form-label">Imagem do produto</label>
<div class="col-sm-10">
    <input name="imagem" id="imagem" type="file" class="form-control-file">
    <small class="form-text text-muted">Selecione uma foto do produto.
    </small>
</div>
</div>
</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </div>
</div>