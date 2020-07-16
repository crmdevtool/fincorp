<?php
require_once("header.php");
?>
<div class="app-main">
<div class="app-sidebar sidebar-shadow">
<div class="app-header__logo">
<div class="logo-src"></div>
<div class="header__pane ml-auto">
<div>
<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
    <span class="hamburger-box">
        <span class="hamburger-inner"></span>
    </span>
</button>
</div>
</div>
</div>
<div class="app-header__mobile-menu">
<div>
<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
<span class="hamburger-box">
    <span class="hamburger-inner"></span>
</span>
</button>
</div>
</div>
<div class="app-header__menu">
<span>
<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
<span class="btn-icon-wrapper">
    <i class="fa fa-ellipsis-v fa-w-6"></i>
</span>
</button>
</span>
</div>    <div class="scrollbar-sidebar">
<div class="app-sidebar__inner">
<ul class="vertical-nav-menu">
<li class="app-sidebar__heading">Home-Inicial</li>
<li>
    <a href="painel_admin.php" class="mm-active">
        <i class="metismenu-icon pe-7s-home"></i>
        Dashboard
    </a>
</li>
<li class="app-sidebar__heading">Controle & cadastro de usuários</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-users"></i>
        Cadastro de usuários
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul>
        <li>
            <a href="products.php">
                <i class="metismenu-icon">
                </i>Administradores
            </a>
        </li>
        <li>
            <a href="venda-analytics.php">
                <i class="metismenu-icon">
                </i>Cadastro de Funcionarios
            </a>
        </li>
        <li>
            <a href="fornecedores.php">
                <i class="metismenu-icon">
                </i>Cadastro do Suporte
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-copy-file"></i>
        Publicações
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul>
        <li>
            <a href="ordem-service.php">
                <i class="metismenu-icon"></i>
                Publicação Blog
            </a>
        </li>
        <li>
            <a href="service-analytics.php">
                <i class="metismenu-icon">
                </i>Publicação Suporte
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-global"></i>
        Nota de atualização
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul>
        <li>
            <a href="clientes.php">
                <i class="metismenu-icon">
                </i>Publicar Nota
            </a>
        </li>
    </ul>
</li>
<li class="app-sidebar__heading">Financeiro</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-note">
        </i>Anotações
    </a>
</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-graph2">
        </i>Relatório
    </a>
</li>
<li class="app-sidebar__heading">Suporte</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-help1">
        </i>Central de Suporte
    </a>
</li>
<li class="app-sidebar__heading">Configurações & sair</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-config">
        </i>
        Configurações
    </a>
</li>
<li>
    <a href="../logout.php">
        <i class="metismenu-icon pe-7s-next-2">
        </i>
        Sair
    </a>
</li>
</ul>
</div>
</div>
</div>    
<div class="app-main__outer">
<div class="app-main__inner">
<div class="app-page-title">
<div class="page-title-wrapper">
<!-- Body -->
<body>
<div class="page-title-heading">
    <div class="page-title-icon">
        <i class="tess icon-gradient bg-mean-fruit">
            <img src="../assets/images/avatars/tess.png" alt="tess" class="tess">
        </i>
    </div>
    <div class="assistente">Tess - Assistente Virtual
        <div class="page-title-subheading"><div id="result"></div>
        <div class="container">
            <button id="switch" onclick="toggleTheme()">Switch</button>
        </div>
        </div>
    </div>
</div>
<div class="page-title-actions">
    </button>
    <div class="d-inline-block dropdown">
        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
            <span class="btn-icon-wrapper pr-2 opacity-7">
                <i class="fa fa-business-time fa-w-20"></i>
            </span>
            Selecione uma opção
        </button>
        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-link-icon lnr-inbox"></i>
                        <span>
                            Notificações
                        </span>
                        <div class="ml-auto badge badge-pill badge-secondary">0</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-link-icon lnr-book"></i>
                        <span>
                            E-mail
                        </span>
                        <div class="ml-auto badge badge-pill badge-danger">0</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-link-icon lnr-picture"></i>
                        <span>
                            Chat - suporte
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>    </div>
</div>            


</div>
</div>
</div>


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

</body>
<!-- /Body -->
        </div>
    </div>
    </div>
<?php
require_once("footer.php");
?>