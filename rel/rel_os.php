<?php 
$id = $_GET['id'];

include('../db/connection.php');

$query = "select * from usuarios join tb_orcamentos join tb_os join tb_clientes on tb_os.id_cliente = tb_clientes.id_cliente and tb_os.id = $id group by tb_os.id = $id, tb_clientes.id_cliente = tb_clientes.id_cliente";
$result = mysqli_query($conn, $query);

 while($res_1 = mysqli_fetch_array($result)){

$data2 = implode('/', array_reverse(explode('-', $res_1['data_fechamento'])));

 ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">

<div class="cabecalho">
	
		<div class="row">
			<div class="col-sm-4">	
			  <img src="../assets/images/icons.png" width="220px">
			</div>
			<div class="col-sm-7">	
			 <h3 class="titulo"><b><?php echo $res_1['empresa']; ?> - Assistência Técnica</b></h3>
			 <h6 class="titulo"><?php echo $res_1['endereco']; ?>, <?php echo $res_1['cidade']; ?> - CEP <?php echo $res_1['cep']; ?></h6>
			</div>
		</div>
	
</div>

<div class="container">

		
			<div class="row">
				<div class="col-sm-8">	
				  <big> Orçamento Nº <?php echo $id ?>  </big>
				</div>
				<div class="col-sm-4">	
				<big> Data: <?php echo $data2; ?> </big>
				</div>
			</div>
		
		<hr>

			<div class="row">
				<div class="col-sm-12">
					<p style="font-size:12px"> <b> Dados do Cliente </b> </p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Nome: <?php echo $res_1['nome']; ?> </p>
				</div>
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Email: <?php echo $res_1['email']; ?> </p>
				</div>
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Endereço: <?php echo $res_1['endereco']; ?> </p>
				</div>
				
			</div>

			<div class="row">
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Telefone: <?php echo $res_1['telefone']; ?> </p>
				</div>
				<div class="col-sm-3">	
				 <p style="font-size:12px">  CPF: <?php echo $res_1['cpf']; ?> </p>
				</div>
				
				
			</div>
		
		<hr>


		<div class="row">
				<div class="col-sm-12">
					<p style="font-size:12px"> <b> Dados do Aparelho </b> </p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Aparelho: <?php echo $res_1['aparelho']; ?> </p>
				</div>
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Nº Série: <?php echo $res_1['serie']; ?> </p>
				</div>
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Modelo: <?php echo $res_1['modelo']; ?> </p>
				</div>
				
			</div>

			<div class="row">
				<div class="col-sm-12">	
				 <p style="font-size:12px">  Defeito: <?php echo $res_1['defeito']; ?> </p>
				</div>
				
				
				
			</div>

			
		
		<hr>


		<div class="row">
				<div class="col-sm-12">
					<p style="font-size:12px"> <b> Laudo Técnico </b> </p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">	
				 <p style="font-size:12px">  <?php echo $res_1['laudo']; ?>  </p>
				</div>
				
				
			</div>

						
		<br>

		<table class="table">
			<tr bgcolor="#f9f9f9">
				<td> <b>Peça</b> </td>
				<td> <b>Valor da Peça</b> </td>
				<td> <b> Quantidade</b> </td>
				
			</tr>
			<tr>
				<td> <?php echo $res_1['peca1']; ?> </td>
				<td> R$ <?php echo $res_1['valor_peca1']; ?> </td>
				<td> 1 </td>
				
			</tr>
			<tr>
				<td> <?php echo $res_1['peca2']; ?> </td>
				<td> R$ <?php echo $res_1['valor_peca2']; ?> </td>
				<td> 1 </td>
				
			</tr>
		</table>

		<hr>
		<br>

		<div class="row">
				<div class="col-sm-6">	
				 
				 
				</div>
				<div class="col-sm-4 areaTotais">	
				 <p class="pgto" style="font-size:14px">  <b>Total de Peças: </b> R$ <?php echo $res_1['valor_peca1'] + $res_1['valor_peca2']; ?>.00 </p>
				 <p class="pgto" style="font-size:14px">  <b>Total do serviço: </b> R$ <?php echo $res_1['valor_servico']; ?> </p>
				 <p class="pgto" style="font-size:14px">  <b>Desconto: </b> R$ <?php echo $res_1['total'] - $res_1['desconto']; ?>.00 </p>
				</div>
				
				
		</div>

		<div class="row">
				<div class="col-sm-6">	
				 <p style="font-size:14px">  <b>Técnico: </b> <?php echo $res_1['tecnico']; ?> </p>
				
				</div>
				<div class="col-sm-4 areaTotal">	
				
				 <p class="pgto" style="font-size:14px">  <b>Total a Pagar: </b> R$ <?php echo $res_1['valor_total']?> </p>
				</div>
				
				
		</div>

		<br>
		<br>

		<div class="row">
				<div class="col-sm-6">	
				
				</div>

				<div class="col-sm-3" align="center">
				<p style="font-size:12px" align="center">__________________________________________________</p>	
				<p style="font-size:12px" align="center">  (Assinatura do cliente)</p>
				</div>
				
				
		</div>

		<div class="col-sm-5">	
				<p style="font-size:13px"><b>Garantia de <?php echo $res_1['garantia']; ?> a partir de <?php echo $data2; ?></b></p>
				</div>

	
</div>


<div class="footer">
 <p style="font-size:12px" align="center">Copyright © 2020-2021 Fincorp. All rights reserved.
</p> 
</div>

<?php } ?>