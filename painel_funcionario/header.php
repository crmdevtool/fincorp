<?php
session_start();
include('../verify_login.php');
if($_SESSION['access_level'] != 'Funcionário'){
  header('Location: ../index.php');
  exit();
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Fincorp CRM - Controle de Estoque e venda.</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
<meta name="description" content="This is an example dashboard created using build-in elements and components.">
<meta name="msapplication-tap-highlight" content="no">
<!--
=========================================================
* Fincorp CRM - v1.0.0
=========================================================
* By Adimael
* adimaelbr@gmail.com
* Licensed under MIT (https://github.com/adimael)
=========================================================
-->
<link href="../assets/css/darkmode.css" rel="stylesheet">
<link href="../assets/css/main.css" rel="stylesheet">
<link href="../assets/css/scrollbar.css" rel="stylesheet">
</head>