<?php
require_once("header.php");
?>        
<div class="app-main">
<div class="app-sidebar sidebar-shadow">
<div class="app-header__logo">
<div class="logo-src"></div>
<div class="header__pane ml-auto">
<div>
<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
    <span class="hamburger-box">
        <span class="hamburger-inner"></span>
    </span>
</button>
</div>
</div>
</div>
<div class="app-header__mobile-menu">
<div>
<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
<span class="hamburger-box">
    <span class="hamburger-inner"></span>
</span>
</button>
</div>
</div>
<div class="app-header__menu">
<span>
<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
<span class="btn-icon-wrapper">
    <i class="fa fa-ellipsis-v fa-w-6"></i>
</span>
</button>
</span>
</div>    <div class="scrollbar-sidebar">
<div class="app-sidebar__inner">
<ul class="vertical-nav-menu">
<li class="app-sidebar__heading">Home-Inicial</li>
<li>
    <a href="painel_admin.php">
        <i class="metismenu-icon pe-7s-home"></i>
        Dashboard
    </a>
</li>
<li class="app-sidebar__heading">Controle de Estoque e clientes</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-shopbag"></i>
        Produtos-OS
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul>
        <li>
            <a href="products.php">
                <i class="metismenu-icon">
                </i>Produtos
            </a>
        </li>
        <li>
            <a href="venda-analytics.php">
                <i class="metismenu-icon">
                </i>Estatísticas de vendas
            </a>
        </li>
        <li>
            <a href="fornecedores.php">
                <i class="metismenu-icon">
                </i>Fornecedores
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-note2"></i>
        Ordem de serviço
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul>
        <li>
            <a href="ordem-service.php">
                <i class="metismenu-icon"></i>
                Ordem de serviço
            </a>
        </li>
        <li>
            <a href="service-analytics.php">
                <i class="metismenu-icon">
                </i>Estatística de Serviços
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="#" class="mm-active">
        <i class="metismenu-icon pe-7s-users"></i>
        Clientes-OS
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul>
        <li>
            <a href="clientes.php" class="mm-active">
                <i class="metismenu-icon">
                </i>Clientes
            </a>
        </li>
        <li>
            <a href="pendent-value.php">
                <i class="metismenu-icon">
                </i>valor Pendente
            </a>
        </li>
    </ul>
</li>
<li class="app-sidebar__heading">Controle de caixa</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-cash"></i>
        Caixa
    </a>
</li>
<li class="app-sidebar__heading">Financeiro</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-graph">
        </i>Controle de Venda
    </a>
</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-graph1">
        </i>Controle de produtos
    </a>
</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-note">
        </i>Anotações
    </a>
</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-graph2">
        </i>Relatório
    </a>
</li>
<li class="app-sidebar__heading">Suporte</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-help1">
        </i>Central de Suporte
    </a>
</li>
<li class="app-sidebar__heading">Configurações & sair</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-config">
        </i>
        Configurações
    </a>
</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-next-2">
        </i>
        Sair
    </a>
</li>
</ul>
</div>
</div>
</div>    
<div class="app-main__outer">
<div class="app-main__inner">
<div class="app-page-title">
<div class="page-title-wrapper">
</div>   
<!-- Body -->
<body>

<button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal"
data-target=".bd-example-modal-lg">Novo cliente</button>
    <div class="main-card mb-3 card">
<div class="card-body">

    <!--LISTAR TODOS OS CLIENTES -->

    <?php


    if(isset($_GET['buttonPesquisar']) and $_GET['txtpesquisar'] != ''){
        $nome = $_GET['txtpesquisar'] . '%';
        $query = "select * from tb_clientes where nome LIKE '$nome'  order by nome asc"; 
    }else if(isset($_GET['buttonPesquisarCPF']) and $_GET['txtpesquisarcpf'] != ''){
        $nome = $_GET['txtpesquisarcpf'];
        $query = "select * from tb_clientes where cpf = '$nome'  order by nome asc"; 
    }

    else{ 
     $query = "select * from tb_clientes order by nome asc"; 
    }

        $result = mysqli_query($conn, $query);
        //$dado = mysqli_fetch_array($result);
        $row = mysqli_num_rows($result);

    if($row == ''){

        echo "<h3> Não existem dados cadastrados no banco </h3>";

    }else{

   ?>

    <table style="width: 100%;" id="minhaTabela" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
    <thead>
    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="minhaTabela" rowspan="1" colspan="1" style="width: 142.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Nome</th><th class="sorting" tabindex="0" aria-controls="minhaTabela" rowspan="1" colspan="1" style="width: 225.2px;" aria-label="Position: activate to sort column ascending">Endereço</th><th class="sorting" tabindex="0" aria-controls="minhaTabela" rowspan="1" colspan="1" style="width: 79.2px;" aria-label="Salary: activate to sort column ascending">Cidade</th><th class="sorting" tabindex="0" aria-controls="minhaTabela" rowspan="1" colspan="1" style="width: 101.2px;" aria-label="Office: activate to sort column ascending">E-mail</th><th class="sorting" tabindex="0" aria-controls="minhaTabela" rowspan="1" colspan="1" style="width: 52.2px;" aria-label="Age: activate to sort column ascending">CPF</th><th class="sorting" tabindex="0" aria-controls="minhaTabela" rowspan="1" colspan="1" style="width: 105.2px;" aria-label="Start date: activate to sort column ascending">Telefone</th><th class="sorting" tabindex="0" aria-controls="minhaTabela" rowspan="1" colspan="1" style="width: 79.2px;" aria-label="Salary: activate to sort column ascending">Ação</th></tr>
    </thead>
    <tbody>

    <?php 

    while($res_1 = mysqli_fetch_array($result)){
        $nome = $res_1["nome"];
        $telefone = $res_1["telefone"];
        $endereco = $res_1["endereco"];
        $cidade = $res_1["cidade"];
        $email = $res_1["email"];
        $cpf = $res_1["cpf"];
        $data = $res_1["dt_registro"];
        $id_cliente = $res_1["id_cliente"];

        $data2 = implode('/', array_reverse(explode('-', $data)));

    ?>

    <tr role="row" class="odd">
        <td class="sorting_1 dtr-control" tabindex="0"><?php echo $nome; ?></td>
        <td><?php echo $endereco; ?></td>
        <td><?php echo $cidade; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $cpf; ?></td>
        <td><?php echo $telefone; ?></td>
    <td><div class="widget-content-right">
    <a href="clientes.php?func=edita&id_cliente=<?php echo $id_cliente; ?>"><button class="border-0 btn-transition btn btn-outline-success" data-toggle="modal"
    data-target=".bd-example-modal-lg-editar">
        <i class="fa fa-edit"></i>
    </button></a>
    <a href="clientes.php?func=deleta&id_cliente=<?php echo $id_cliente; ?>"><button class="border-0 btn-transition btn btn-outline-danger">
        <i class="fa fa-trash-alt"></i>
    </button></a>
    </div></td>
    </tr>

    <?php 
        }                        
    ?>

    </tbody>
    <tfoot>
    <tr><th rowspan="1" colspan="1">Nome</th><th rowspan="1" colspan="1">Endereço</th><th rowspan="1" colspan="1">Cidade</th><th rowspan="1" colspan="1">E-mail</th><th rowspan="1" colspan="1">CPF</th><th rowspan="1" colspan="1">Telefone</th><th rowspan="1" colspan="1">Ação</th></tr>
    </tfoot>
    </table>
    <?php 
        }                        
    ?>
</div></div>
</div>
</div>
</div>
</div>

<!-- modal Cadastrar -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Novo cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="" class="">
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="nome-cliente" class="">Nome do cliente</label>
            <input name="txtnome" id="nome-cliente" placeholder="Nome completo do cliente" type="text" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="cpf_cliente" class="">CPF</label>
            <input name="txtcpf" id="cpf-cliente" placeholder="Digite o CPF do cliente..." type="text" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="telefone_cliente" class="">Telefone</label>
            <input name="txttelefone" id="telefone-cliente" placeholder="Número para contato" type="text" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="email_cliente" class="">Email</label>
            <input name="txtemail" id="email-cliente" placeholder="E-mail do cliente" type="email" class="form-control">
        </div>
    </div>
</div>
<div class="position-relative form-group">
    <label for="exampleAddress" class="">Endereço</label>
    <input name="txtendereco" id="exampleAddress" placeholder="Rua Bairro Nº" type="text" class="form-control" required>
</div>
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="exampleCity" class="">Cidade</label>
            <input name="txtcidade" id="exampleCity" type="text" class="form-control" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="exampleState" class="">Estado</label>
            <input name="txtestado" id="exampleState" type="text" class="form-control" required>
        </div>
    </div>
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="exampleZip" class="">CEP</label>
            <input name="txtcep" id="cep-cliente" type="text" class="form-control" required>
        </div>
    </div>
</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="cadastrar-cliente">Salvar</button>
            </form>
            </div>
        </div>
    </div>
</div>

<!--EDITAR -->
<?php
if(@$_GET['func'] == 'edita'){  
$id_cliente = $_GET['id_cliente'];
$query = "select * from tb_clientes where id_cliente = '$id_cliente'";
$result = mysqli_query($conn, $query);

 while($res_1 = mysqli_fetch_array($result)){


?>

<!-- modal Editar -->

<div class="modal fade bd-example-modal-lg-editar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Cadastro do cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="">
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="nome-cliente" class="">Nome do cliente</label>
            <input name="txtnome" id="editar-nome" value="<?php echo $res_1['nome']; ?>" placeholder="Nome completo do cliente" type="name" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="cpf-cliente" class="">CPF</label>
            <input name="txtcpf" id="editar-cpf" value="<?php echo $res_1['cpf']; ?>" placeholder="Digite o CPF do cliente..." type="name" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="contato-cliente" class="">Telefone</label>
            <input name="txttelefone" id="editar-telefone" value="<?php echo $res_1['telefone']; ?>" placeholder="Número para contato" type="name" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="email-cliente" class="">Email</label>
            <input name="txtemail" id="editar-email" value="<?php echo $res_1['email']; ?>" placeholder="E-mail do cliente" type="email" class="form-control">
        </div>
    </div>
</div>
<div class="position-relative form-group">
    <label for="exampleAddress" class="">Endereço</label>
    <input name="txtendereco" id="editarAddress" value="<?php echo $res_1['endereco']; ?>" placeholder="Rua Bairro Nº" type="text" class="form-control">
</div>
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="exampleCity" class="">Cidade</label>
            <input name="txtcidade" id="editarCity" value="<?php echo $res_1['cidade']; ?>" type="text" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="exampleState" class="">Estado</label>
            <input name="txtestado" id="editarState" value="<?php echo $res_1['estado']; ?>" type="text" class="form-control">
        </div>
    </div>
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="exampleZip" class="">CEP</label>
            <input name="txtcep" id="editarZip" value="<?php echo $res_1['cep']; ?>" type="text" class="form-control">
        </div>
    </div>
</div>
</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" name="editar-cliente" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>

<!--Comando para editar os dados UPDATE -->
<?php
if(isset($_POST['editar-cliente'])){
    $nome = $_POST['txtnome'];
    $cpf = $_POST['txtcpf'];
    $endereco = $_POST['txtendereco'];
    $cidade = $_POST['txtcidade'];
    $estado = $_POST['txtestado'];
    $cep = $_POST['txtcep'];
    $telefone = $_POST['txttelefone'];
    $email = $_POST['txtemail'];


  if ($res_1['cpf'] != $cpf){

       //VERIFICAR SE O CPF JÁ ESTÁ CADASTRADO
    $query_verificar = "select * from tb_clientes where cpf = '$cpf' ";

    $result_verificar = mysqli_query($conn, $query_verificar);
    $row_verificar = mysqli_num_rows($result_verificar);

    if($row_verificar > 0){
        //Mensagem CPF já Cadastrado!
    echo "<script language='javascript'></script>";
    exit();
    }

  }

 
$query_editar = "UPDATE tb_clientes set nome = '$nome', telefone = '$telefone', endereco = '$endereco', email = '$email', cpf = '$cpf' where id_cliente = '$id_cliente' ";

$result_editar = mysqli_query($conn, $query_editar);

if($result_editar == ''){
    //Mensagem Ocorreu um erro ao Editar!
  echo "<script language='javascript'></script>";
}else{
    //Mensagem Editado com Sucesso!
    echo "<script language='javascript'></script>";
    echo "<script language='javascript'> window.location='clientes.php'; </script>";
}

}
?>


<?php } }  ?>

</body>
<!-- /Body -->
<?php
require_once("footer.php");
?>

<!--EXCLUIR -->
<?php
if(@$_GET['func'] == 'deleta'){
  $id_cliente = $_GET['id_cliente'];
  $query = "DELETE FROM tb_clientes where id_cliente = '$id_cliente'";
  mysqli_query($conn, $query);
  echo "<script language='javascript'> window.location='clientes.php'; </script>";
}
?>

<!--MASCARAS -->

<script type="text/javascript">
    $(document).ready(function(){
      $('#telefone-cliente').mask('(00) 00000-0000');
      $('#cpf-cliente').mask('000.000.000-00');
      $('#cep-cliente').mask('00000-000');
      });
</script>