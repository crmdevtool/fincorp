<?php

include('../db/connection.php');

if(isset($_POST['cadastrar-usuario'])){
  $foto = $_POST['fotoperfil'];
  $nome = $_POST['txtnome'];
  $username = $_POST['txtusername'];
  $password = $_POST['txtpassword'];
  $cpf = $_POST['txtcpf'];
  $email = $_POST['txtemail'];
  $telefone = $_POST['txttelefone'];
  $endereco = $_POST['txtendereco'];
  $cidade = $_POST['txtcidade'];
  $cep = $_POST['txtcep'];
  $access_level = $_POST['access_level'];

//VERIFICAR SE O CPF JÁ ESTÁ CADASTRADO
$query_verify = "SELECT * FROM usuarios WHERE cpf = '$cpf' ";

$result_verify = mysqli_query($conn, $query_verify);
$row_verify = mysqli_num_rows($result_verify);

if($row_verify > 0){
  //Mensagem CPF já cadastrado!
  echo "<script language='javascript'> window.alert('CPF já Cadastrado!'); </script>";
  echo "<script language='javascript'> window.location='cadastros.php'; </script>";
  exit();
}

//CADASTRO DE CLIENTES
$query = "INSERT into usuarios (foto, nome, username, password, cpf, email, telefone, endereco, cidade, cep, access_level, dt_registro) VALUES ('$foto', '$nome', '$username', '$password', '$cpf', '$email', '$telefone', '$endereco', '$cidade', '$cep', '$access_level', curDate() )";

$result = mysqli_query($conn, $query);

if($result == ''){
  //Mensagem Ocorreu um erro ao cadastrar!
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Cadastrar!'); </script>";
  echo "<script language='javascript'> window.location='cadastros.php'; </script>";

} else {
  //Mensagem de Salvo com Sucesso!
  echo "<script language='javascript'></script>";
  echo "<script language='javascript'> window.location='cadastros.php'; </script>";
}

}

?>