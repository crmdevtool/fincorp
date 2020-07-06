<?php
require_once("header.php");
?>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
<div class="app-header header-shadow">
<div class="app-header__logo">
<div class="logo-titulo"><img class="img-logo" src="../assets/images/crm.png">Fincorp</div>
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
</div>    
<div class="app-header__content">
<div class="app-header-left">
<div class="search-wrapper">
<div class="input-holder">
<input type="text" class="search-input" placeholder="Procurar...">
<button class="search-icon"><span></span></button>
</div>
<button class="close"></button>
</div>
<ul class="header-menu nav">
<li class="nav-item">
<a href="javascript:void(0);" class="nav-link">
<i class="nav-link-icon fa fa-cash-register"> </i>
Caixa
</a>
</li>
<li class="btn-group nav-item">
<a href="products.php" class="nav-link" data-toggle="modal"
data-target=".bd-example-modal-lg-produto">
<i class="nav-link-icon fa fa-shopping-bag"></i>
Add produtos
</a>
</li>
</ul>        </div>
<div class="app-header-right">
<div class="header-btn-lg pr-0">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left">
    <div class="btn-group">
        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
            <img width="42" class="rounded-circle" src="../assets/images/avatars/1.jpg" alt="">
            <i class="fa fa-angle-down ml-2 opacity-8"></i>
        </a>
        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
            <a href="perfil.php"><button type="button" tabindex="0" class="dropdown-item">Perfil</button></a>
            <button type="button" tabindex="0" class="dropdown-item">Configurações</button>
            <h6 tabindex="-1" class="dropdown-header">Central de ajuda</h6>
            <button type="button" tabindex="0" class="dropdown-item">Ajuda</button>
            <div tabindex="-1" class="dropdown-divider"></div>
            <a href="../logout.php"><button type="button" tabindex="0" class="dropdown-item">Sair</button></a>
        </div>
    </div>
</div>
<div class="widget-content-left  ml-3 header-user-info">
    <div class="widget-heading">
        <?php echo $_SESSION['nome_user']; ?>
    </div>
    <div class="widget-subheading">
        <?php echo $_SESSION['access_level']; ?>
    </div>
</div>
</div>
</div>
</div>        </div>
</div>
</div>        
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
    <a href="painel_funcionario.php" class="mm-active">
        <i class="metismenu-icon pe-7s-home"></i>
        Dashboard
    </a>
</li>
<li class="app-sidebar__heading">Controle de Estoque e clientes</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-shopbag"></i>
        Produtos-OS
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul>
        <li>
            <a href="products.php">
                <i class="metismenu-icon">
                </i>Produtos
            </a>
        </li>
        <li>
            <a href="fornecedores.php">
                <i class="metismenu-icon">
                </i>Fornecedores
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-note2"></i>
        Ordem de serviço
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul>
        <li>
            <a href="ordem-service.php">
                <i class="metismenu-icon"></i>
                Ordem de serviço
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-users"></i>
        Clientes-OS
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul>
        <li>
            <a href="clientes.php">
                <i class="metismenu-icon">
                </i>Clientes
            </a>
        </li>
        <li>
            <a href="pendent-value.php">
                <i class="metismenu-icon">
                </i>valor Pendente
            </a>
        </li>
    </ul>
</li>
<li class="app-sidebar__heading">Controle de caixa</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-cash"></i>
        Caixa
    </a>
</li>
<li class="app-sidebar__heading">Financeiro</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-note">
        </i>Anotações
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
<div class="row">
<div class="col-md-6 col-xl-4">
<div class="card mb-3 widget-content bg-love-kiss">
    <div class="widget-content-wrapper text-white">
        <div class="widget-content-left">
            <div class="widget-heading">Serviços em manutenção</div>
            <div class="widget-subheading">Serviços para finalizar</div>
        </div>
        <div class="widget-content-right">
            <div class="widget-numbers text-white"><span>0</span></div>
        </div>
    </div>
</div>
</div>
<div class="col-md-6 col-xl-4">
    <div class="card mb-3 widget-content bg-happy-green">
        <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
                <div class="widget-heading">Serviços finalizados</div>
                <div class="widget-subheading">Serviços finalizados</div>
            </div>
            <div class="widget-content-right">
                <div class="widget-numbers text-white"><span>0</span></div>
            </div>
        </div>
    </div>
    </div>
<div class="col-md-6 col-xl-4">
<div class="card mb-3 widget-content bg-plum-plate">
    <div class="widget-content-wrapper text-white">
        <div class="widget-content-left">
            <div class="widget-heading">Valor em caixa</div>
            <div class="widget-subheading">Total em caixa</div>
        </div>
        <div class="widget-content-right">
            <div class="widget-numbers text-white"><span>$ 0</span></div>
        </div>
    </div>
</div>
</div>
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
<script type="text/javascript" src="../assets/js/message.js"></script>