<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Fincorp CRM - Controle de Estoque e venda.</title>
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/toast.css">
    <link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/scrollbar.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="app-header header-shadow">
<div class="app-header__logo">
<div class="logo-titulo"><img class="img-logo" src="assets/images/crm.png">Fincorp</div>
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
<i class="fa fa-ellipsis-v fa-w-6" aria-hidden="true"></i>
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
</ul>   
     </div>
</div>
</div>
	<div class="container">
		<div class="login-content">
			<form action="login.php" method="post">
				<img src="assets/images/avatar.png">
				<h2 class="title">Fincorp</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Esqueceu a senha?</a>
							<input type="submit" class="btn" value="Login">
							<?php include("error.php") ?>
            </form>
        </div>
    </div>
		<script type="text/javascript" src="assets/js/index.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Fincorp CRM - Controle de Estoque e venda.</title>
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/toast.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="login-content">
			<form action="login.php" method="post">
				<img src="assets/images/avatar.png">
				<h2 class="title">Fincorp</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Esqueceu a senha?</a>
							<input type="submit" class="btn" value="Login">
							<?php include("error.php") ?>
            </form>
        </div>
    </div>
		<script type="text/javascript" src="assets/js/index.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>
