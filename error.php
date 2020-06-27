<?php
	if(isset($_SESSION['error_authentication'])): ?>
	<p><small> Usuário ou senha inválidos! </small></p>
<?php
endif;
	unset($_SESSION['error_authentication']);
?>
<?php
	if(isset($_SESSION['error_vazio'])): ?>
	<p><small> Digite o seu Usuário e senha! </small></p>
<?php
endif;
	unset($_SESSION['error_vazio']);
?>