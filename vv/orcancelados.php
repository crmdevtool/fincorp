<?php
require_once("header.php");
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Preloader -->
	<div id="iot-preloader">
		<div class="center-preloader d-flex align-items-center">
			<div class="spinners">
				<div class="spinner01"></div>
				<div class="spinner02"></div>
			</div>
		</div>
	</div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input name="txtpesquisar" class="form-control form-control-navbar" type="search" placeholder="Pesquisar..." aria-label="Search">
        <div class="input-group-append">
          <button name="buttonPesquisar" class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Add Produtos -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" title="Add Produtos" data-toggle="modal"
        data-target=".bd-example-modal-lg-produto">
          <i class="fas fa-cart-plus"></i>
        </a>
      </li>
      <!-- Add Funcionário -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" title="Add cliente" data-toggle="modal"
        data-target=".bd-example-modal-lg">
          <i class="fas fa-user-plus"></i>
        </a>
      </li>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <!-- Logout -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="../logout.php" title="Sair">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="../assets/dist/img/crm.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Fincorp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/images/avatars/<?=$_SESSION['foto_user'];?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nome_user']; ?></a>
          <span class="access_level"><?php echo $_SESSION['access_level']; ?></span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-child-indent nav-flat nav-legacy flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dashboard.php" class="nav-link">
                  <i class="fas fa-home nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Produtos-OS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="categorias.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Categoria de produtos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="produtos.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Produtos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fornecedores.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Fornecedores</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Orçamentos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="orcamentos.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Orçamentos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rel_orcamentos.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Relatório Orçamentos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="orcancelados.php" class="nav-link active">
                  <i class="nav-icon"></i>
                  <p>Orçamento Cancelado</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-signature"></i>
              <p>
                Ordem de serviço
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="orderservices.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Ordem de serviço</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="osfinalizadas.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>OS - Finalizadas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="oscanceladas.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>OS - Canceladas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Cadastro-OS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="clientes.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="funcionarios.php" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Funcionários</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">CONTROLE DE CAIXA</li>
          <li class="nav-item">
            <a href="caixa.php" class="nav-link">
              <i class="nav-icon fas fa-cash-register"></i>
              <p>Caixa</p>
            </a>
          </li>
          <li class="nav-header">FINANCEIRO</li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>Controle de venda</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>Controle de produtos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Anotações</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>Relatório</p>
            </a>
          </li>
          <li class="nav-header">SUPORTE</li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>Central de Suporte</p>
            </a>
          </li>
          <li class="nav-header">CONFIGURAÇÕES & SAIR</li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>Configurações</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Sair</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i> <span>Exporta dados para o Excel</span></a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">orçamentos-cancelados</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h3 class="card-title">Orçamentos Cancelados</h3>
</div>
<!-- /.card-header -->
<div class="card-body">

<!--LISTAR TODAS AS OS CANCELADAS -->

<?php


if(isset($_GET['buttonPesquisar']) and $_GET['txtpesquisar'] != ''){
    $nome = $_GET['txtpesquisar'] . '%';
    $query = "select * from tb_clientes where id_user = $_SESSION[id_user]  order by nome asc"; 
}else if(isset($_GET['buttonPesquisarCPF']) and $_GET['txtpesquisarcpf'] != ''){
    $nome = $_GET['txtpesquisarcpf'];
    $query = "select * from tb_clientes where cpf = '$nome'  order by nome asc"; 
}

else{ 
  $query = "select tb_orcamentos.*, tb_clientes.* from tb_orcamentos join tb_clientes where tb_orcamentos.id_cliente = tb_clientes.id_cliente AND status = 'Cancelado' order by nome ASC"; 
}

    $result = mysqli_query($conn, $query);
    //$dado = mysqli_fetch_array($result);
    $row = mysqli_num_rows($result);

if($row == ''){

    echo "<h3> Não existem dados cadastrados no banco </h3>";

}else{

?>

<table id="example1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>id</th>
    <th>Cliente</th>
    <th>Técnico</th>
    <th>Aparelho</th>
    <th>Modelo</th>
    <th>Nº Série</th>
    <th>Valor</th>
    <th>status</th>
    <th>Email</th>
    <th>Telefone</th>
    <th>Laudo</th>
    <th>Data</th>
    <th>Ação</th>
  </tr>
  </thead>
  <tbody>

  <?php 

    while($res_1 = mysqli_fetch_array($result)){
        $id = $res_1["id"];
        $cliente = $res_1["nome"];
        $tecnico = $res_1["tecnico"];
        $aparelho = $res_1["aparelho"];
        $modelo = $res_1["modelo"];
        $serie = $res_1["serie"];
        $valor_total = $res_1["valor_total"] - $res_1["desconto"];
        $status = $res_1["status"];
        $email = $res_1["email"];
        $telefone = $res_1["telefone"];
        $laudo = $res_1["laudo"];
        $data_geracao = $res_1["data_geracao"];

        $data_geracao2 = implode('/', array_reverse(explode('-', $data_geracao)));

    ?>

  <tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $cliente; ?></td>
    <td><?php echo $tecnico; ?></td>
    <td><?php echo $aparelho; ?></td>
    <td><?php echo $modelo; ?></td>
    <td><?php echo $serie; ?></td>
    <td>R$<?php echo $valor_total; ?></td>
    <td><?php echo $status; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $telefone; ?></td>
    <td><?php echo $laudo; ?></td>
    <td><?php echo $data_geracao2; ?></td>
    <td><div class="widget-content-right">
    <a href="orderservices.php?func=deleta&id=<?php echo $id; ?>"><button class="border-0 btn-transition btn btn-outline-danger">
    <i class="fa fa-times-circle"></i>
    </button></a>
    </div></td>
  </tr>
  <?php 
        }                        
    ?>
  </tbody>
</table>
<?php 
        }                        
    ?>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
require_once("footer.php");
?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- SweetAlert2 -->
<script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../assets/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- Preloader -->
<script src="../assets/js/preloadtime.js"></script>
<script src="../assets/js/iot-timer.min.js"></script>
<script src="../assets/js/svg4everybody.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- MASK -->
<script type="text/javascript" src="../assets/js/jquery.mask.min.js"></script>
  <!--MASCARAS -->
<script type="text/javascript">
    $(document).ready(function(){
      $('#telefone-cliente').mask('(00) 00000-0000');
      $('#cpf-cliente').mask('000.000.000-00');
      $('#cep-cliente').mask('00000-000');
      });
</script>
 <!-- MASCARAS -->
 <script type="text/javascript">
    $(document).ready(function(){
      $('#valorpeca1').mask('R$ 000,00');
      $('#valorpeca2').mask('R$ 000,00');
      $('#valorpeca3').mask('R$ 000,00');
      $('#valorpeca4').mask('R$ 000,00');
      $('#total').mask('R$ 000,00');
      $('#valortotal').mask('R$ 000,00');
      });
</script>  
</body>
</html>
<!--EXCLUIR -->
<?php
if(@$_GET['func'] == 'deleta'){
  $id_cliente = $_GET['id_cliente'];
  $query = "DELETE FROM tb_orcamentos where id = '$id'";
  mysqli_query($conn, $query);
  echo "<script language='javascript'> window.location='orderservices.php'; </script>";
}
?>

  <!--MASCARAS -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('#editar-telefone').mask('(00) 00000-0000');
      $('#editar-cpf').mask('000.000.000-00');
      $('#editar-cep').mask('00000-000');
      });
</script> 

<!--EDITAR -->
<?php
if(@$_GET['func'] == 'edita'){ 
  $id = $_GET['id'];
  $query = "select * from tb_orcamentos where id = '$id'";
  $result = mysqli_query($conn, $query);

  while($res_1 = mysqli_fetch_array($result)){

?>

<!-- modal Editar -->
<div id="modalEditar" class="modal fade bd-example-modal-lg-editar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Orçamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" enctype="multipart/form-data" action="" class="">
    <div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="nome-cliente" class="">Nome do Cliente</label>
            <input name="txtcliente" value="<?php echo $res_1['cliente']; ?>" id="cliente" placeholder="Nome do cliente..." type="text" spellcheck="false" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="tecnico" class="">Técnico</label>
            <input name="txttecnico" value="<?php echo $res_1['tecnico']; ?>" id="tecnico" placeholder="Técnico responsável..." type="text" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="aparelho" class="">Aparelho</label>
            <input name="txtaparelho" value="<?php echo $res_1['aparelho']; ?>" id="aparelho" placeholder="Tipo de aparelho..." type="text" spellcheck="false" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="modelo" class="">Modelo</label>
            <input name="txtmodelo" value="<?php echo $res_1['modelo']; ?>" id="modelo" placeholder="Modelo do aparelho" type="text" class="form-control" required>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="serie" class="">Nº de Série</label>
            <input name="txtserie" value="<?php echo $res_1['serie']; ?>" placeholder="Número de série do aparelho..." id="serie" type="text" spellcheck="false" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="defeito" class="">Defeito</label>
            <input name="txtdefeito" value="<?php echo $res_1['defeito']; ?>" placeholder="Defeito relatado pelo cliente..." id="defeito" type="text" spellcheck="false" class="form-control">
        </div>
    </div>
<div class="form-row">
            </div>
            </div>
            <div class="position-relative form-group">
            <label for="obs" class="">Observações</label>
            <textarea name="txtobs" id="obs" placeholder="Observações..." type="text" spellcheck="false" class="form-control"><?php echo $res_1['obs']; ?></textarea>
            </div>
            <div class="position-relative form-group">
            <label for="laudo" class="">Laudo</label>
            <textarea name="txtlaudo" id="laudo" placeholder="Laudo técnico..." type="text" spellcheck="false" class="form-control"><?php echo $res_1['laudo']; ?></textarea>
            </div>
            <div class="form-row">
            <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="peca1" class="">Peça 1</label>
            <input name="txtpeca1" value="<?php echo $res_1['peca1']; ?>" placeholder="Peça utilizada no reparo..." id="peca1" type="text" spellcheck="false" class="form-control">
        </div>
    </div>
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="valor_peca1" class="">Valor da peça</label>
            <input name="txtvalorpeca1" value="<?php echo $res_1['valor_peca1']; ?>" placeholder="R$" id="valorpeca1" type="text" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="peca2" class="">Peça 2</label>
            <input name="txtpeca2" value="<?php echo $res_1['peca2']; ?>" placeholder="Peça utilizada no reparo..." id="peca2" type="text" spellcheck="false" class="form-control">
        </div>
    </div>
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="valorpeca2" class="">Valor da peça</label>
            <input name="txtvalorpeca2" value="<?php echo $res_1['valor_peca2']; ?>" placeholder="R$" id="valorpeca2" type="text" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="peca3" class="">Peça 3</label>
            <input name="txtpeca3" value="<?php echo $res_1['peca3']; ?>" placeholder="Peça utilizada no reparo..." id="peca3" type="text" spellcheck="false" class="form-control">
        </div>
    </div>
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="valorpeca3" class="">Valor da peça</label>
            <input name="txtvalorpeca3" value="<?php echo $res_1['valor_peca3']; ?>" placeholder="R$" id="valorpeca3" type="text" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="peca4" class="">Peça 4</label>
            <input name="txtpeca4" value="<?php echo $res_1['peca4']; ?>" placeholder="Peça utilizada no reparo..." id="peca4" type="text" spellcheck="false" class="form-control">
        </div>
    </div>
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="valorpeca4" class="">Valor da peça</label>
            <input name="txtvalorpeca4" value="<?php echo $res_1['valor_peca4']; ?>" placeholder="R$" id="valorpeca4" type="text" class="form-control">
        </div>
    </div>
    <div class="col-md-3">
    <!-- select -->
    <div class="form-group" required>
                        <label>Forma de pagamento</label>
                        <select name="txtpagamento" class="form-control" required>
                          <option disabled selected>Forma de pagamento...</option>
                          <option value="Dinheiro">Dinheiro</option>
                          <option value="Cartão">Cartão</option>
                        </select>
                      </div>
                    </div>
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="total" class="">Valor do Serviço</label>
            <input name="txttotal" value="<?php echo $res_1['valor_servico']; ?>" placeholder="R$" id="total" type="text" spellcheck="false" class="form-control">
        </div>
    </div>
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="valortotal" class="">Valor total</label>
            <input name="txtvalortotal" value="<?php echo $res_1['valor_total']; ?>" id="valortotal" placeholder="R$" type="text" class="form-control">
        </div>
    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning" name="editar-orcamento">Atualizar</button>
            </form>
            </div>
        </div>
    </div>
</div>

<script> $("#modalEditar").modal("show"); </script> 

<!--Comando para editar os dados UPDATE -->
<?php
if(isset($_POST['editar-orcamento'])){
  $id_user = $_SESSION['id_user'];
  $cliente = $_POST['txtcliente'];
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
  $valor_servico = $_POST['txttotal'];
  $valor_total = $_POST['txtvalortotal'];

//UPDATE DE OS
$query_editar = "UPDATE tb_orcamentos SET cliente = '$cliente', tecnico = '$tecnico', aparelho = '$aparelho', modelo = '$modelo', serie = '$serie', defeito = '$defeito', obs = '$obs', laudo = '$laudo', peca1 = '$peca1', valor_peca1 = '$valor_peca1', peca2 = '$peca2', valor_peca2 = '$valor_peca2', peca3 = '$peca3', valor_peca3 = '$valor_peca3', peca4 = '$peca4', valor_peca4 = '$valor_peca4', pagamento = '$pagamento', valor_servico = '$valor_servico', valor_total = '$valor_total' WHERE id_user = '$id_user' ";

$result_editar = mysqli_query($conn, $query_editar);

if($result_editar == ''){
  //Mensagem Ocorreu um erro ao atualizar!
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Editar!'); </script>";
  echo "<script language='javascript'> window.location='orcamentos.php'; </script>";

} else {
  //Mensagem de Salvo com Sucesso!
  echo "<script language='javascript'> window.alert('Editado com Sucesso!'); </script>";
  echo "<script language='javascript'> window.location='orcamentos.php'; </script>";
}
}
?>

<?php } } ?>