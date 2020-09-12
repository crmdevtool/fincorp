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
            <a href="#" class="nav-link active">
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
                <a href="produtos.php" class="nav-link active">
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
            <a href="#" class="nav-link">
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
                <a href="orcancelados.php" class="nav-link">
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
          <a href="#" class="btn btn-success" data-toggle="modal"
          data-target=".bd-example-modal-lg-produto"><i class="material-icons">&#xE147;</i> <span>Add Novo Produto</span></a>
          <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i> <span>Exporta dados para o Excel</span></a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">produtos</li>
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
<h3 class="card-title">Listagem de produtos</h3>
</div>
<!-- /.card-header -->
<div class="card-body">

<!--LISTAR TODOS OS PRODUTOS -->

<?php


if(isset($_GET['buttonPesquisar']) and $_GET['txtpesquisar'] != ''){
    $produto = $_GET['txtpesquisar'] . '%';
    $query = "select * from tb_produtos where id_user = $_SESSION[id_user]  order by produto asc"; 
}else if(isset($_GET['buttonPesquisarCPF']) and $_GET['txtpesquisarcpf'] != ''){
    $produto = $_GET['txtpesquisarcpf'];
    $query = "select * from tb_produtos where cpf = '$produto'  order by produto asc"; 
}

else{ 
$query = "select * from tb_produtos join tb_categorias join tb_fornecedores WHERE tb_produtos.id_user = '1' and tb_produtos.id_categoria = tb_categorias.id_categoria order by produto ASC"; 
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
    <th>imagem</th>
    <th>produto</th>
    <th>Descrição</th>
    <th>Quantidade</th>
    <th>Categoria</th>
    <th>Valor</th>
    <th>Data</th>
    <th>Ação</th>
  </tr>
  </thead>
  <tbody>

  <?php 

    while($res_1 = mysqli_fetch_array($result)){
        $id_produto = $res_1["id_produto"];
        $img = $res_1["imagem"];
        $produto = $res_1["produto"];
        $desproduto = $res_1["desproduto"];
        $quantidade = $res_1["quantidade"];
        $categoria = $res_1["nome_categoria"];
        $valor = $res_1["valor"];
        $dt_registro = $res_1["dt_registro"];

        $dt_registro2 = implode('/', array_reverse(explode('-', $dt_registro)));

    ?>

  <tr>
    <td><?php echo $id_produto; ?></td>
    <td><?php echo "<img src='../assets/images/produtos/".$img."' class='img-produto' alt='Foto'"; ?></td>
    <td><?php echo $produto; ?></td>
    <td><?php echo $desproduto; ?></td>
    <td><?php echo $quantidade; ?></td>
    <td><?php echo $categoria; ?></td>
    <td>R$<?php echo $valor; ?></td>
    <td><?php echo $dt_registro2; ?></td>
    <td><div class="widget-content-right">
    <a href="produtos.php?func=edita&id_produto=<?php echo $id_produto; ?>"><button class="border-0 btn-transition btn btn-outline-success" data-toggle="modal"
    data-target=".bd-example-modal-lg-editar"><i class="fa fa-edit"></i>
    </button></a>
    <a href="produtos.php?func=deleta&id_produto=<?php echo $id_produto; ?>"><button class="border-0 btn-transition btn btn-outline-danger">
    <i class="fa fa-trash-alt"></i>
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
<!-- Select2 -->
<script src="../assets/plugins/select2/js/select2.full.min.js"></script>
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

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
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
</body>
</html>
<!--EXCLUIR -->
<?php
if(@$_GET['func'] == 'deleta'){
  $id_produto = $_GET['id_produto'];
  $query = "DELETE FROM tb_produtos where id_produto = '$id_produto'";
  mysqli_query($conn, $query);
  $url= '../assets/images/produtos/'.$img;
  unlink($url);
  echo "<script language='javascript'> window.location='produtos.php'; </script>";
}
?>
  <!--MASCARAS -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('#cadastar-telefone').mask('(00) 00000-0000');
      $('#cadastar-cpf').mask('000.000.000-00');
      $('#cadastar-cep').mask('00000-000');
      });
</script>

<!--EDITAR -->
<?php
if(@$_GET['func'] == 'edita'){ 
  $id_produto = $_GET['id_produto'];
  $query = "select * from tb_produtos join tb_categorias join tb_fornecedores where id_produto = '$id_produto'";
  $result = mysqli_query($conn, $query);

  while($res_1 = mysqli_fetch_array($result)){

?>

<!--MASCARAS -->
<script type="text/javascript">
    $(document).ready(function(){
      $('#editar-telefone').mask('(00) 00000-0000');
      $('#editar-cpf').mask('000.000.000-00');
      $('#editar-cep').mask('00000-000');
      });
</script> 


<!-- modal Editar -->
<div id="modalEditar" class="modal fade bd-example-modal-lg-editar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar novo produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" enctype="multipart/form-data" action="" class="">
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="nome-produto" class="">Nome/Marca do produto</label>
            <input name="txtproduto" value="<?php echo $res_1['produto']; ?>" autocomplete="off" id="nome-produto" placeholder="Nome do produto" type="text" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="codigo-produto" class="">Código</label>
            <input name="txtcodigo_barra" value="<?php echo $res_1['codigo_barra']; ?>" id="codigo-produto" placeholder="Código de barra" type="text" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
                  <label for="nome-cliente" class="">Categoria</label>
                  <select name="txtcategoria" class="form-control select2" style="width: 100%;">                
                  <option selected="selected" value="<?php echo $res_1['id_categoria']; ?>"><?php echo $res_1['nome_categoria']; ?></option> 
                  </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="nome-produto" class="">Quantidade</label>
            <input name="txtquantidade" value="<?php echo $res_1['quantidade']; ?>" autocomplete="off" id="nome-produto" placeholder="<?php echo $res_1['quantidade']; ?>" type="number" class="form-control">
        </div>
    </div>
</div>
<div class="position-relative form-group">
    <label for="desproduto" class="">Descrição</label>
    <textarea name="txtdesproduto" id="desproduto" placeholder="Descrição do produto" type="text" class="form-control"><?php echo $res_1['desproduto']; ?></textarea>
</div>
<div class="form-row">
    <div class="col-md-5">
        <div class="position-relative form-group">
                  <label for="nome-cliente" class="">Fornecedor</label>
                  <select name="txtfornecedor" value="<?php echo $res_1['nome']; ?>" class="form-control select2" style="width: 100%;">
                    <option selected="selected" value="<?php echo $res_1['id_fornecedor']; ?>"><?php echo $res_1['nome']; ?></option> 
                  </select>
        </div>
    </div>
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="valor" class="">Valor R$</label>
            <input name="txtvalor" value="<?php echo $res_1['valor']; ?>" id="valor" placeholder="R$" type="text" class="form-control">
        </div>
    </div>
</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="editar-produto" class="btn btn-primary">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script> $("#modalEditar").modal("show"); </script> 

<!--Comando para editar os dados UPDATE -->
<?php
if(isset($_POST['editar-produto'])){
  $id_user = $_SESSION['id_user'];
  $produto = $_POST['txtproduto'];
  $codigo_barra = $_POST['txtcodigo_barra'];
  $id_categoria = $_POST['txtcategoria'];
  $quantidade = $_POST['txtquantidade'];
  $desproduto = $_POST['txtdesproduto'];
  $id_fornecedor = $_POST['txtfornecedor'];
  $valor = $_POST['txtvalor'];

//CADASTRO DE CLIENTES
$query_editar = "UPDATE tb_produtos SET produto = '$produto', codigo_barra = '$codigo_barra', id_categoria = '$id_categoria', quantidade = '$quantidade', desproduto = '$desproduto', id_fornecedor = '$id_fornecedor', valor = '$valor', dt_registro = curDate() WHERE id_produto = '$id_produto' ";

$result_editar = mysqli_query($conn, $query_editar);

if($result_editar == ''){
  //Mensagem Ocorreu um erro ao cadastrar!
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Editar!'); </script>";
  echo "<script language='javascript'> window.location='produtos.php'; </script>";

} else {
  //Mensagem de Salvo com Sucesso!
  echo "<script language='javascript'> window.alert('Editado com Sucesso!'); </script>";
  echo "<script language='javascript'> window.location='produtos.php'; </script>";
}
}
?>

<?php } } ?>