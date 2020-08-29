<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">

<div class="cabecalho">
	
		<div class="row">
			<div class="col-sm-4">	
			  <img src="../assets/images/icons.png" width="220px">
			</div>
			<div class="col-sm-7">	
			 <h3 class="titulo"><b>SysTec Freitas - Assistência Técnica</b></h3>
			 <h6 class="titulo">Rua da Q-Cursos Networks Nº 1000, Centro - BH - MG - CEP 30555-555</h6>
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
				 <p style="font-size:12px">  Nome: <?php echo $res_1['cli_nome']; ?> </p>
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
				 <p style="font-size:12px">  CPF: <?php echo $res_1['cliente']; ?> </p>
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
				 <p style="font-size:12px">  Aparelho: <?php echo $res_1['produto']; ?> </p>
				</div>
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Nº Série: <?php echo $res_1['serie']; ?> </p>
				</div>
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Modelo: XHPER </p>
				</div>
				
			</div>

			<div class="row">
				<div class="col-sm-12">	
				 <p style="font-size:12px">  Defeito: <?php echo $res_1['problema']; ?> </p>
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

						
		<br><br>

		<table class="table">
			<tr bgcolor="#f9f9f9">
				<td> <b>Peça 1</b> </td>
				<td> <b>Valor da Peça</b> </td>
				<td> <b> Quantidade</b> </td>
				
			</tr>
			<tr>
				<td> <?php echo $res_1['pecas']; ?> </td>
				<td> <?php echo $res_1['valor_pecas']; ?> </td>
				<td> 1 </td>
				
			</tr>
		</table>

		<table class="table">
			<tr bgcolor="#f9f9f9">
				<td> <b>Peça 2</b> </td>
				<td> <b>Valor da Peça</b> </td>
				<td> <b> Quantidade</b> </td>
				
			</tr>
			<tr>
				<td> <?php echo $res_1['pecas']; ?> </td>
				<td> <?php echo $res_1['valor_pecas']; ?> </td>
				<td> 1 </td>
				
			</tr>
		</table>


		<hr>
		<br>
		<br>

		<div class="row">
				<div class="col-sm-6">	
				 
				 
				</div>
				<div class="col-sm-4 areaTotais">	
				 <p class="pgto" style="font-size:14px">  <b>Total de Peças: </b> R$ <?php echo $res_1['valor_pecas']; ?> </p>
				 <p class="pgto" style="font-size:14px">  <b>Total Mão de Obra: </b> R$ <?php echo $res_1['valor_servico']; ?> </p>
				
				</div>
				
				
		</div>

		<div class="row">
				<div class="col-sm-6">	
				 <p style="font-size:14px">  <b>Técnico: </b> <?php echo $res_1['func_nome']; ?> </p>
				
				</div>
				<div class="col-sm-4 areaTotal">	
				
				 <p class="pgto" style="font-size:14px">  <b>Total a Pagar: </b> R$ <?php echo $res_1['valor_total']; ?> </p>
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

			

	
</div>


<div class="footer">
 <p style="font-size:12px" align="center">Copyright © 2020-2021 Fincorp. All rights reserved.
</p> 
</div>