<?php

include('../db/connection.php');

if(isset($_POST['cadastrar-cliente'])){
  $id_user = $_SESSION['id_user'];
  $nome = $_POST['txtnome'];
  $cpf = $_POST['txtcpf'];
  $endereco = $_POST['txtendereco'];
  $cidade = $_POST['txtcidade'];
  $estado = $_POST['txtestado'];
  $cep = $_POST['txtcep'];
  $telefone = $_POST['txttelefone'];
  $email = $_POST['txtemail'];

//VERIFICAR SE O CPF JÁ ESTÁ CADASTRADO
$query_verify = "SELECT * FROM tb_clientes WHERE id_user = id_user AND cpf = '$cpf' ";

$result_verify = mysqli_query($conn, $query_verify);
$row_verify = mysqli_num_rows($result_verify);

if($row_verify > 0){
  //Mensagem CPF já cadastrado!
  echo "<script language='javascript'> window.alert('CPF já Cadastrado!'); </script>";
  echo "<script language='javascript'> window.location='clientes.php'; </script>";
  exit();
}

//CADASTRO DE CLIENTES
$query = "INSERT into tb_clientes (id_user, nome, cpf, endereco, cidade, estado, cep, telefone, email, dt_registro) VALUES ('$id_user','$nome', '$cpf', '$endereco', '$cidade', '$estado', '$cep', '$telefone', '$email', NOW() )";

$result = mysqli_query($conn, $query);

if($result == ''){
  //Mensagem Ocorreu um erro ao cadastrar!
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Cadastrar!'); </script>";
  echo "<script language='javascript'> window.location='clientes.php'; </script>";

} else {
  //Mensagem de Salvo com Sucesso!
  echo "<script language='javascript'></script>";
  echo "<script language='javascript'> window.location='clientes.php'; </script>";
}

}

if(isset($_POST['cadastrar-funcionario'])){
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
  echo "<script language='javascript'> window.location='funcionarios.php'; </script>";
  exit();
}

//CADASTRO DE USUÁRIOS
$query = "INSERT into usuarios (foto, nome, username, password, cpf, email, telefone, endereco, empresa, cidade, cep, access_level, dt_registro) VALUES ('$novo_nome', '$nome', '$username', '$password', '$cpf', '$email', '$telefone', '$endereco', '$empresa', '$cidade', '$cep', '$access_level', curDate() )";

$result = mysqli_query($conn, $query);

if($result == ''){
  //Mensagem Ocorreu um erro ao cadastrar!
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Cadastrar!'); </script>";
  echo "<script language='javascript'> window.location='funcionarios.php'; </script>";

} else {
  //Mensagem de Salvo com Sucesso!
  echo "<script language='javascript'></script>";
  echo "<script language='javascript'> window.location='funcionarios.php'; </script>";
}

}

if(isset($_POST['criar-orcamento'])){
  $id_user = $_SESSION['id_user'];
  $id_cliente = $_POST['txtcliente'];
  $tecnico = $_POST['txttecnico'];
  $aparelho = $_POST['txtaparelho'];
  $modelo = $_POST['txtmodelo'];
  $serie = $_POST['txtserie'];
  $defeito = $_POST['txtdefeito'];
  $obs = $_POST['txtobs'];

//ABRINDO NOVO ORÇAMENTO
$query = "INSERT into tb_orcamentos (id_user, id_cliente, tecnico, aparelho, serie, modelo, defeito, obs, status, data_abertura) VALUES ('$id_user', '$id_cliente', '$tecnico', '$aparelho', '$serie', '$modelo', '$defeito', '$obs', 'Aberto', curDate() )";

$result = mysqli_query($conn, $query);

if($result == ''){
  //Mensagem Ocorreu um erro ao cadastrar!
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Cadastrar!'); </script>";
  echo "<script language='javascript'> window.location='orcamentos.php'; </script>";

} else {
  //Mensagem de Salvo com Sucesso!
  echo "<script language='javascript'></script>";
  echo "<script language='javascript'> window.location='orcamentos.php'; </script>";
}

}

//CADASTRAR FORNECEDORES
if(isset($_POST['cadastrar-fornecedor'])){
  $id_user = $_SESSION['id_user'];
  $nome = $_POST['txtnome'];
  $cpf = $_POST['txtcpf'];
  $endereco = $_POST['txtendereco'];
  $cidade = $_POST['txtcidade'];
  $estado = $_POST['txtestado'];
  $cep = $_POST['txtcep'];
  $telefone = $_POST['txttelefone'];
  $email = $_POST['txtemail'];

//VERIFICAR SE O CPF JÁ ESTÁ CADASTRADO
$query_verify = "SELECT * FROM tb_fornecedores WHERE id_user = id_user AND cpf = '$cpf' ";

$result_verify = mysqli_query($conn, $query_verify);
$row_verify = mysqli_num_rows($result_verify);

if($row_verify > 0){
  //Mensagem CPF já cadastrado!
  echo "<script language='javascript'> window.alert('CPF já Cadastrado!'); </script>";
  echo "<script language='javascript'> window.location='fornecedores.php'; </script>";
  exit();
}

//CADASTRO DE CLIENTES
$query = "INSERT into tb_fornecedores (id_user, nome, cpf, endereco, cidade, estado, cep, telefone, email) VALUES ('$id_user','$nome', '$cpf', '$endereco', '$cidade', '$estado', '$cep', '$telefone', '$email' )";

$result = mysqli_query($conn, $query);

if($result == ''){
  //Mensagem Ocorreu um erro ao cadastrar!
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Cadastrar!'); </script>";
  echo "<script language='javascript'> window.location='fornecedores.php'; </script>";

} else {
  //Mensagem de Salvo com Sucesso!
  echo "<script language='javascript'></script>";
  echo "<script language='javascript'> window.location='fornecedores.php'; </script>";
}

}

//CADASTRAR PRODUTOS
if(isset($_POST['cadastrar-produto'])){
  $foto = $_FILES["img"];
  $id_user = $_SESSION['id_user'];
  $id_categoria = $_POST['txtcategoria'];
  $id_fornecedor = $_POST['txtfornecedor'];
  $produto = $_POST['txtproduto'];
  $desproduto = $_POST['txtdesproduto'];
  $quantidade = $_POST['txtquantidade'];
  $codigo_barra = $_POST['txtcodigo_barra'];
  $valor = $_POST['txtvalor'];

  //Define a constante
  define('ROOT_PATH', dirname(__FILE__) . '/');

if(isset($_FILES['img'])){
  $extensao = strtolower(substr($_FILES['img']['name'], -4));
  $novo_nome = rand().$_FILES['img']['name'];
  
  $diretorio = ROOT_PATH . "../../assets/images/produtos/";

  if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
    echo "<script language='javascript'> window.alert('Você poderá enviar apenas arquivos '*.jpg;*.jpeg;*.gif;*.png''); </script>";

  if ( @move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$novo_nome) ){
    echo "<script language='javascript'> window.alert('Arquivo salvo com sucesso em: . $diretorio .'); </script>";
  }
  else
    echo "<script language='javascript'> window.alert('Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.'); </script>";
    }
    else{
        echo "<script language='javascript'> window.alert('Você poderá enviar apenas arquivos '*.jpg;*.jpeg;*.gif;*.png''); </script>";
}

}

//CADASTRO DE USUÁRIOS
$query = "INSERT INTO tb_produtos (id_user, id_categoria, id_fornecedor, produto, desproduto, quantidade, codigo_barra, valor, imagem, dt_registro) VALUES ('$id_user', '$id_categoria', '$id_fornecedor', '$produto', '$desproduto', '$quantidade', '$codigo_barra', '$valor', '$novo_nome', curDate() )";

$result = mysqli_query($conn, $query);

if($result == ''){
  //Mensagem Ocorreu um erro ao cadastrar!
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Cadastrar!'); </script>";
  echo "<script language='javascript'> window.location='produtos.php'; </script>";

} else {
  //Mensagem de Salvo com Sucesso!
  echo "<script language='javascript'></script>";
  echo "<script language='javascript'> window.location='produtos.php'; </script>";
}

}

?>