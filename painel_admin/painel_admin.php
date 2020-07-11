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
<div class="card mb-3 widget-content bg-midnight-bloom">
    <div class="widget-content-wrapper text-white">
        <div class="widget-content-left">
            <div class="widget-heading">Produtos em estoque</div>
            <div class="widget-subheading">Produtos disponiveis</div>
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
<div class="col-md-6 col-xl-4">
<div class="card mb-3 widget-content bg-grow-early">
    <div class="widget-content-wrapper text-white">
        <div class="widget-content-left">
            <div class="widget-heading">Porcentagem de venda</div>
            <div class="widget-subheading">Total de venda</div>
        </div>
        <div class="widget-content-right">
            <div class="widget-numbers text-white"><span>0%</span></div>
        </div>
    </div>
</div>
</div>
<div class="col-md-6 col-xl-4">
    <div class="card mb-3 widget-content bg-arielle-smile">
        <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
                <div class="widget-heading">Total de Ganho</div>
                <div class="widget-subheading">Valor total lucros do dia</div>
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

</body>
<!-- /Body -->
        </div>
    </div>
    </div>
<?php
require_once("footer.php");
?>
<script type="text/javascript" src="../assets/js/message.js"></script>