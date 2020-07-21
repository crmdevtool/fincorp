<?php
	if(isset($_SESSION['error_authentication'])): ?>
	<div id="toast-container" class="toast-top-right">
	<div class="toast toast-error" aria-live="assertive" style="">
	<div class="toast-message">Usuário ou senha inválidos!</div></div></div>
<?php
endif;
	unset($_SESSION['error_authentication']);
?>
<?php
	if(isset($_SESSION['error_vazio'])): ?>
	<div id="toast-container" class="toast-top-right">
	<div class="toast toast-warning" aria-live="assertive" style="">
	<div class="toast-message">Digite o seu Usuário e senha!</div></div></div>
<?php
endif;
	unset($_SESSION['error_vazio']);
?>
<?php
	if(isset($_SESSION['permissao_negada'])): ?>
	<div id="toast-container" class="toast-top-right">
	<div class="toast toast-warning" aria-live="assertive" style="">
	<div class="toast-message">Permissão de acesso negado!</div></div></div>
<?php
endif;
	unset($_SESSION['permissao_negada']);
?>