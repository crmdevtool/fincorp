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
