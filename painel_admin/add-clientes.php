<?php
require_once("header.php");
?>
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
<a href="add-products.php" class="nav-link">
<i class="nav-link-icon fa fa-shopping-bag"></i>
Add produtos
</a>
</li>
<li class="dropdown nav-item">
<a href="javascript:void(0);" class="nav-link">
<i class="nav-link-icon fa fa-chart-line"></i>
Relatório
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
            <button type="button" tabindex="0" class="dropdown-item">Sair</button>
        </div>
    </div>
</div>
<div class="widget-content-left  ml-3 header-user-info">
    <div class="widget-heading">
        Fincorp - CRM
    </div>
    <div class="widget-subheading">
        Administrador(a) do sistema
    </div>
</div>
<div class="widget-content-right header-user-info ml-3">
    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
    </button>
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
    <a href="painel_admin.php">
        <i class="metismenu-icon pe-7s-home"></i>
        Dashboard
    </a>
</li>
<li class="app-sidebar__heading">Controle de Estoque e clientes</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-shopbag"></i>
        Produtos
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul>
        <li>
            <a href="add-products.php">
                <i class="metismenu-icon"></i>
                Adicionar Produto
            </a>
        </li>
        <li>
            <a href="products.php">
                <i class="metismenu-icon">
                </i>Produtos em estoque
            </a>
        </li>
        <li>
            <a href="venda-analytics.php">
                <i class="metismenu-icon">
                </i>Estatísticas de vendas
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
        <li>
            <a href="service-analytics.php">
                <i class="metismenu-icon">
                </i>Estatística de Serviços
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="#" class="mm-active">
        <i class="metismenu-icon pe-7s-users"></i>
        Clientes
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul>
        <li>
            <a href="add-clientes.php" class="mm-active">
                <i class="metismenu-icon">
                </i>Adicionar Cliente
            </a>
        </li>
        <li>
            <a href="clientes.php">
                <i class="metismenu-icon">
                </i>Clientes cadastrado
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
        <i class="metismenu-icon pe-7s-graph">
        </i>Controle de Venda
    </a>
</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-graph1">
        </i>Controle de produtos
    </a>
</li>
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
    <a href="#">
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
</div>   
</div>
</div>
<!-- Body -->
<body>



</body>
<!-- /Body -->
<?php
require_once("footer.php");
?>