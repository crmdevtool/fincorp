<?php

include('../db/connection.php');

if(isset($_POST['cadastrar-usuario'])){
  $foto = $_FILES["fotoperfil"];
  $nome = $_POST['txtnome'];
  $username = $_POST['txtusername'];
  $password = $_POST['txtpassword'];
  $cpf = $_POST['txtcpf'];
  $email = $_POST['txtemail'];
  $telefone = $_POST['txttelefone'];
  $endereco = $_POST['txtendereco'];
  $empresa = $_POST['txtempresa'];
  $cidade = $_POST['txtcidade'];
  $cep = $_POST['txtcep'];
  $access_level = $_POST['access_level'];

  //Define a constante
  define('ROOT_PATH', dirname(__FILE__) . '/');

if(isset($_FILES['fotoperfil'])){
  $extensao = strtolower(substr($_FILES['fotoperfil']['name'], -4));
  $novo_nome = rand().$_FILES['fotoperfil']['name'];
  
  $diretorio = ROOT_PATH . "../../assets/images/avatars/";

  if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
    echo "<script language='javascript'> window.alert('Você poderá enviar apenas arquivos '*.jpg;*.jpeg;*.gif;*.png''); </script>";

  if ( @move_uploaded_file($_FILES['fotoperfil']['tmp_name'], $diretorio.$novo_nome) ){
    echo "<script language='javascript'> window.alert('Arquivo salvo com sucesso em: . $diretorio .'); </script>";
  }
  else
    echo "<script language='javascript'> window.alert('Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.'); </script>";
    }
    else{
        echo "<script language='javascript'> window.alert('Você poderá enviar apenas arquivos '*.jpg;*.jpeg;*.gif;*.png''); </script>";
}

}

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

//CADASTRO DE USUÁRIOS
$query = "INSERT into usuarios (foto, nome, username, password, cpf, email, telefone, endereco, empresa, cidade, cep, access_level, dt_registro) VALUES ('$novo_nome', '$nome', '$username', '$password', '$cpf', '$email', '$telefone', '$endereco', '$empresa', '$cidade', '$cep', '$access_level', curDate() )";

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