<?php

include('../db/connection.php');

if(isset($_POST['cadastrar-cliente'])){
  $id_user = $_SESSION['id_user'];
  $nome = $_POST['txtnome'];
  $documento = $_POST['txtcpf'];
  $endereco = $_POST['txtendereco'];
  $cidade = $_POST['txtcidade'];
  $estado = $_POST['txtestado'];
  $cep = $_POST['txtcep'];
  $telefone = $_POST['txttelefone'];
  $email = $_POST['txtemail'];

//VERIFICAR SE O CPF JÁ ESTÁ CADASTRADO
$query_verify = "SELECT * FROM tb_clientes WHERE documento = '$documento' ";

$result_verify = mysqli_query($conn, $query_verify);
$row_verify = mysqli_num_rows($result_verify);

if($row_verify > 0){
  echo "<script language='javascript'> window.alert('CPF já cadastrado!');</script>";
  exit();
}

$query = "INSERT into tb_clientes (id_user, nome, documento, endereco, cidade, estado, cep, telefone, email, dt_registro) VALUES ('$id_user','$nome', '$documento', '$endereco', '$cidade', '$estado', '$cep', '$telefone', '$email', NOW() )";

$result = mysqli_query($conn, $query);

if($result == ''){
echo "<script language='javascript'> window.alert('Ocorreu um erro ao cadastrar!');</script>";
} else {
echo "<script language='javascript'> window.alert('Salvo com Sucesso!');</script>";
}

}

?>