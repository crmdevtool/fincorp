<?php
session_start();
session_id();
include('db/connection.php');

if(empty($_POST['username']) || empty($_POST['password'])){
  header('Location: index.php');
  $_SESSION['error_vazio'] = true;
  exit();
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = "SELECT * FROM usuarios WHERE username = '{$username}' AND password 
      = '{$password}' ";

$result = mysqli_query($conn, $query);

$dado = mysqli_fetch_array($result);

$row = mysqli_num_rows($result);

session_id([ $id_user ]);

if($row > 0){
  $_SESSION['username'] = $username;
  $_SESSION['nome_user'] = $dado["nome"];
  $_SESSION['id_user'] = $dado["id_user"];
  $_SESSION['access_level'] = $dado["access_level"];

  if ($_SESSION['access_level'] == 'Administrador'){
  header('Location: painel_admin/painel_admin.php');
  exit();
  }
  if ($_SESSION['access_level'] == 'Suporte'){
    header('Location: painel_system/painel_system.php');
    exit();
    }
  //if ($_SESSION['access_level'] == 'Funcionário'){
    header('Location: painel_funcionario/painel_funcionario.php');
    //exit();
    //}

  exit();
}else{
  $_SESSION['error_authentication'] = true;
  header('Location: index.php');

  exit();

}

?>