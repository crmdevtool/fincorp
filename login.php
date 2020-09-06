<?php
session_start();
session_id();
include('db/connection.php');

//CANCELAR ORÇAMENTOS APÓS 5 DIAS
$query = "SELECT * from tb_orcamentos where status = 'Aguardando'";
$result = mysqli_query($conn, $query);
 while($res_1 = mysqli_fetch_array($result)){
$data_geracao = $res_1['data_geracao'];
$data_cancelamento = date('Y/m/d', strtotime("-7 days",strtotime(date('Y/m/d'))));

$query_editar = "UPDATE tb_orcamentos set status = 'Cancelado' where data_geracao = '$data_cancelamento' and status = 'Aguardando' ";

$result_editar = mysqli_query($conn, $query_editar);

}

if(empty($_POST['username']) || empty($_POST['password'])){
  header('Location: index.php');
  $_SESSION['error_vazio'] = true;
  exit();
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = "SELECT * FROM usuarios WHERE usuarios.username = '{$username}' AND usuarios.password 
      = '{$password}' ";

$result = mysqli_query($conn, $query);
$dado = mysqli_fetch_array($result);
$row = mysqli_num_rows($result);

if($row > 0){
  $_SESSION['username'] = $username;
  $_SESSION['nome_user'] = $dado["nome"];
  $_SESSION['foto_user'] = $dado["foto"];
  $_SESSION['id_user'] = $dado["id_user"];
  $_SESSION['id_funcionario'] = $dado["id_funcionario"];
  $_SESSION['access_level'] = $dado["access_level"];

  if ($_SESSION['access_level'] == 'Suporte'){
    header('Location: suporte/dashboard.php');
    exit();
  }
  if ($_SESSION['access_level'] == 'Administrador'){
  header('Location: vv/dashboard.php');
  exit();
  }
  if ($_SESSION['access_level'] == 'Funcionário'){
  header('Location: w/dashboard.php');
  exit();
  }
  if ($_SESSION['access_level'] == 'Desativado'){
    header('Location: index.php');
    $_SESSION['permissao_negada'] = true;
    exit();
    }

  exit();
}else{
  $_SESSION['error_authentication'] = true;
  header('Location: index.php');

  exit();

}

?>