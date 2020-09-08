<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="theme-color" content="#1A1B25">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Fincorp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
		<meta name="msapplication-tap-highlight" content="no">
		 <!-- Favicon -->
		 <link rel="icon" href="favicon.png" type="assets/images/crm.png" />
  <link rel="shortcut icon" href="assets/images/favicon.ico" />
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
		<!-- SweetAlert2 -->
		<link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/toast.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/scrollbar.css" rel="stylesheet">
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <div class="app-header header-shadow">
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
</div>    <div class="app-header__content">
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
			<a href="/fincorp/index.php" class="nav-link">
			<i class="nav-link-icon fa fa-home" aria-hidden="true"> </i>
				Inicio
			</a>
		</li>
		<li class="btn-group nav-item">
			<a href="javascript:void(0);" class="nav-link" data-toggle="modal" data-target=".bd-example-modal-lg-produto">
			<i class="nav-link-icon fa fa-blog" aria-hidden="true"></i>
				Blog
			</a>
		</li>
		<li class="dropdown nav-item">
			<a href="javascript:void(0);" class="nav-link">
			<i class="nav-link-icon fa fa-info" aria-hidden="true"></i>
				Suporte
			</a>
		</li>
    </ul>        </div>
    <div class="app-header-right">
    <div class="header-btn-lg pr-0">
    <div class="widget-content p-0">
    <div class="widget-content-wrapper">
    <div class="widget-content-left">
    </div>
    <div class="widget-content-right header-user-info ml-3">
    </div>
    </div>
    </div>
    </div>        </div>
    </div>
    </div>        <div class="ui-theme-settings">
    <div class="theme-settings__inner">
    <div class="scrollbar-container">
    </div>
    </div>
    </div>        <div class="app-main">
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
        <a href="javascript:void(0);" class="mm-active">
            <i class="metismenu-icon pe-7s-home"></i>
            Página principal
        </a>
    </li>
		<li class="app-sidebar__heading">Menu do Cliente</li>
		<li>
        <a href="javascript:void(0);">
            <i class="metismenu-icon pe-7s-user">
            </i>Painel do cliente
        </a>
    </li>
    <li>
        <a href="javascript:void(0);">
            <i class="metismenu-icon pe-7s-cart">
            </i>Loja Virtual
        </a>
    </li>
    <li>
        <a href="javascript:void(0);">
            <i class="metismenu-icon pe-7s-news-paper">
            </i>Blog
        </a>
    </li>
    <li class="app-sidebar__heading">Suporte</li>
    <li>
        <a href="javascript:void(0);">
            <i class="metismenu-icon pe-7s-info">
            </i>Central de Suporte
        </a>
    </li>
</ul>
    </div>
    </div>
    </div>    <div class="app-main__outer">
    <div class="app-main__inner">
    <div class="app-page-title">
    <div class="page-title-wrapper">
    <div class="page-title-heading">
            </div>
        </div>
		</div>
		<h5>Bem-Vindo a nossa página de suporte!</h5>
    <img src="./assets/images/icons.png" alt="">
</div>            
</div>
</div>
</div>
        </div>
    </div>
				<script type="text/javascript" src="assets/js/index.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>