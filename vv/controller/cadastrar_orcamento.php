<?php

include('../db/connection.php');

if(isset($_POST['criar-orcamento'])){
  $id_user = $_SESSION['id_user'];
  $id_cliente = $_POST['txtcliente'];
  $tecnico = $_POST['txttecnico'];
  $aparelho = $_POST['txtaparelho'];
  $modelo = $_POST['txtmodelo'];
  $serie = $_POST['txtserie'];
  $defeito = $_POST['txtdefeito'];
  $obs = $_POST['txtobs'];
  $laudo = $_POST['txtlaudo'];
  $peca1 = $_POST['txtpeca1'];
  $valor_peca1 = $_POST['txtvalorpeca1'];
  $peca2 = $_POST['txtpeca2'];
  $valor_peca2 = $_POST['txtvalorpeca2'];
  $peca3 = $_POST['txtpeca3'];
  $valor_peca3 = $_POST['txtvalorpeca3'];
  $peca4 = $_POST['txtpeca4'];
  $valor_peca4 = $_POST['txtvalorpeca4'];
  $pagamento = $_POST['txtpagamento'];
  $total = $_POST['txttotal'];
  $valor_total = $_POST['txtvalortotal'];

//CADASTRO DE ORÇAMENTOS
$query = "INSERT into tb_orcamentos (id_user, id_cliente, tecnico, aparelho, modelo, serie, defeito, obs, laudo, peca1, valor_peca1, peca2, valor_peca2, peca3, valor_peca3, peca4, valor_peca4, pagamento, total, valor_total, status, data_abertura) VALUES ('$id_user', '$id_cliente', '$tecnico', '$aparelho', '$modelo', '$serie', '$defeito', '$obs', '$laudo', '$peca1', '$valor_peca1', '$peca2', '$valor_peca2', '$peca3', '$valor_peca3', '$peca4', '$valor_peca4', '$pagamento', '$total', '$valor_total', curDate() )";

$result = mysqli_query($conn, $query);

if($result == ''){
  //Mensagem Ocorreu um erro ao cadastrar!
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Cadastrar!'); </script>";
  echo "<script language='javascript'> window.location='orcamento.php'; </script>";

} else {
  //Mensagem de Salvo com Sucesso!
  echo "<script language='javascript'></script>";
  echo "<script language='javascript'> window.location='orcamento.php'; </script>";
}

}

?>