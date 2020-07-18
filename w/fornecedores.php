<?php
require_once("header.php");
?>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
<div class="app-header header-shadow">
<div class="app-header__logo">
<div class="logo-titulo"><img class="img-logo" src="../assets/images/crm.png">Fincorp</div>
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
</div>    
<div class="app-header__content">
<div class="app-header-left">
<div class="search-wrapper">
<div class="input-holder">
<input type="text" class="search-input" placeholder="Procurar...">
<button class="search-icon"><span></span></button>
</div>
<button class="close"></button>
</div>
<ul class="header-menu nav">
<li class="nav-item">
<a href="javascript:void(0);" class="nav-link">
<i class="nav-link-icon fa fa-cash-register"> </i>
Caixa
</a>
</li>
<li class="btn-group nav-item">
<a href="products.php" class="nav-link" data-toggle="modal"
data-target=".bd-example-modal-lg-produto">
<i class="nav-link-icon fa fa-shopping-bag"></i>
Add produtos
</a>
</li>
</ul>        </div>
<div class="app-header-right">
<div class="header-btn-lg pr-0">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left">
    <div class="btn-group">
        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
            <img width="42" class="rounded-circle" src="../assets/images/avatars/1.jpg" alt="">
            <i class="fa fa-angle-down ml-2 opacity-8"></i>
        </a>
        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
        <a href="perfil.php"><button type="button" tabindex="0" class="dropdown-item">Perfil</button></a>
            <button type="button" tabindex="0" class="dropdown-item">Configurações</button>
            <h6 tabindex="-1" class="dropdown-header">Central de ajuda</h6>
            <button type="button" tabindex="0" class="dropdown-item">Ajuda</button>
            <div tabindex="-1" class="dropdown-divider"></div>
            <button type="button" tabindex="0" class="dropdown-item">Sair</button>
        </div>
    </div>
</div>
<div class="widget-content-left  ml-3 header-user-info">
    <div class="widget-heading">
        Fincorp - CRM
    </div>
    <div class="widget-subheading">
        Administrador(a) do sistema
    </div>
</div>
<div class="widget-content-right header-user-info ml-3">
    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
    </button>
</div>
</div>
</div>
</div>        </div>
</div>
</div>        
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
    <a href="painel_funcionario.php">
        <i class="metismenu-icon pe-7s-home"></i>
        Dashboard
    </a>
</li>
<li class="app-sidebar__heading">Controle de Estoque e clientes</li>
<li>
    <a href="#" class="mm-active">
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
            <a href="fornecedores.php" class="mm-active">
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
    </ul>
</li>
<li>
    <a href="#">
        <i class="metismenu-icon pe-7s-users"></i>
        Clientes-OS
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul>
        <li>
            <a href="clientes.php">
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
        <i class="metismenu-icon pe-7s-note">
        </i>Anotações
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
    <a href="../logout.php">
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
     <!-- Body -->
     <body>
    <div class="main-card mb-3 card">
<div class="card-body">
<table style="width: 100%;" id="minhaTabela" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="minhaTabela" rowspan="1" colspan="1" style="width: 142.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Nome do cliente</th><th class="sorting" tabindex="0" aria-controls="minhaTabela" rowspan="1" colspan="1" style="width: 225.2px;" aria-label="Position: activate to sort column ascending">Endereço</th><th class="sorting" tabindex="0" aria-controls="minhaTabela" rowspan="1" colspan="1" style="width: 101.2px;" aria-label="Office: activate to sort column ascending">E-mail</th><th class="sorting" tabindex="0" aria-controls="minhaTabela" rowspan="1" colspan="1" style="width: 52.2px;" aria-label="Age: activate to sort column ascending">CPF</th><th class="sorting" tabindex="0" aria-controls="minhaTabela" rowspan="1" colspan="1" style="width: 105.2px;" aria-label="Start date: activate to sort column ascending">Telefone</th><th class="sorting" tabindex="0" aria-controls="minhaTabela" rowspan="1" colspan="1" style="width: 79.2px;" aria-label="Salary: activate to sort column ascending">Ação</th></tr>
</thead>
<tbody>
<tr role="row" class="odd">
    <td class="sorting_1 dtr-control" tabindex="0">Airi Satou</td>
    <td>Rua Jurandir Velame 478</td>
    <td>airi@gmail.com</td>
    <td>86185646573</td>
    <td>7399989-2369</td>
    <td><div class="widget-content-right">
    <button class="border-0 btn-transition btn btn-outline-success">
        <i class="fa fa-edit"></i>
    </button>
    <button class="border-0 btn-transition btn btn-outline-danger">
        <i class="fa fa-trash-alt"></i>
    </button>
</div></td>
</tr><tr role="row" class="even">
    <td class="sorting_1 dtr-control" tabindex="0">Angelica Ramos</td>
    <td>Rua Humberto Campos 80</td>
    <td>angelica@gmail.com</td>
    <td>56235698576</td>
    <td>739985-63219</td>
    <td><div class="widget-content-right">
    <button class="border-0 btn-transition btn btn-outline-success">
        <i class="fa fa-edit"></i>
    </button>
    <button class="border-0 btn-transition btn btn-outline-danger">
        <i class="fa fa-trash-alt"></i>
    </button>
</div></td>
</tr><tr role="row" class="odd">
    <td class="sorting_1 dtr-control" tabindex="0">Ashton Cox</td>
    <td>Junior Technical Author</td>
    <td>San Francisco</td>
    <td>66</td>
    <td>2009/01/12</td>
    <td><div class="widget-content-right">
    <button class="border-0 btn-transition btn btn-outline-success">
        <i class="fa fa-edit"></i>
    </button>
    <button class="border-0 btn-transition btn btn-outline-danger">
        <i class="fa fa-trash-alt"></i>
    </button>
</div></td>
</tr><tr role="row" class="even">
    <td class="sorting_1 dtr-control" tabindex="0">Bradley Greer</td>
    <td>Software Engineer</td>
    <td>London</td>
    <td>41</td>
    <td>2012/10/13</td>
    <td><div class="widget-content-right">
    <button class="border-0 btn-transition btn btn-outline-success">
        <i class="fa fa-edit"></i>
    </button>
    <button class="border-0 btn-transition btn btn-outline-danger">
        <i class="fa fa-trash-alt"></i>
    </button>
</div></td>
</tr><tr role="row" class="odd">
    <td class="sorting_1 dtr-control" tabindex="0">Brenden Wagner</td>
    <td>Software Engineer</td>
    <td>San Francisco</td>
    <td>28</td>
    <td>2011/06/07</td>
    <td><div class="widget-content-right">
    <button class="border-0 btn-transition btn btn-outline-success">
        <i class="fa fa-edit"></i>
    </button>
    <button class="border-0 btn-transition btn btn-outline-danger">
        <i class="fa fa-trash-alt"></i>
    </button>
</div></td>
</tr><tr role="row" class="even">
    <td class="sorting_1 dtr-control" tabindex="0">Brielle Williamson</td>
    <td>Integration Specialist</td>
    <td>New York</td>
    <td>61</td>
    <td>2012/12/02</td>
    <td><div class="widget-content-right">
    <button class="border-0 btn-transition btn btn-outline-success">
        <i class="fa fa-edit"></i>
    </button>
    <button class="border-0 btn-transition btn btn-outline-danger">
        <i class="fa fa-trash-alt"></i>
    </button>
</div></td>
</tr><tr role="row" class="odd">
    <td class="sorting_1 dtr-control" tabindex="0">Bruno Nash</td>
    <td>Software Engineer</td>
    <td>London</td>
    <td>38</td>
    <td>2011/05/03</td>
    <td><div class="widget-content-right">
    <button class="border-0 btn-transition btn btn-outline-success">
        <i class="fa fa-edit"></i>
    </button>
    <button class="border-0 btn-transition btn btn-outline-danger">
        <i class="fa fa-trash-alt"></i>
    </button>
</div></td>
</tr><tr role="row" class="even">
    <td class="sorting_1 dtr-control" tabindex="0">Caesar Vance</td>
    <td>Pre-Sales Support</td>
    <td>New York</td>
    <td>21</td>
    <td>2011/12/12</td>
    <td><div class="widget-content-right">
    <button class="border-0 btn-transition btn btn-outline-success">
        <i class="fa fa-edit"></i>
    </button>
    <button class="border-0 btn-transition btn btn-outline-danger">
        <i class="fa fa-trash-alt"></i>
    </button>
</div></td>
</tr><tr role="row" class="odd">
    <td class="sorting_1 dtr-control" tabindex="0">Cara Stevens</td>
    <td>Sales Assistant</td>
    <td>New York</td>
    <td>46</td>
    <td>2011/12/06</td>
    <td><div class="widget-content-right">
    <button class="border-0 btn-transition btn btn-outline-success">
        <i class="fa fa-edit"></i>
    </button>
    <button class="border-0 btn-transition btn btn-outline-danger">
        <i class="fa fa-trash-alt"></i>
    </button>
</div></td>
</tr><tr role="row" class="even">
    <td class="sorting_1 dtr-control" tabindex="0">Cedric Kelly</td>
    <td>Senior Javascript Developer</td>
    <td>Edinburgh</td>
    <td>22</td>
    <td>2012/03/29</td>
    <td><div class="widget-content-right">
    <button class="border-0 btn-transition btn btn-outline-success">
        <i class="fa fa-edit"></i>
    </button>
    <button class="border-0 btn-transition btn btn-outline-danger">
        <i class="fa fa-trash-alt"></i>
    </button>
</div></td>
</tr></tbody>
<tfoot>
<tr><th rowspan="1" colspan="1">Nome do cliente</th><th rowspan="1" colspan="1">Endereço</th><th rowspan="1" colspan="1">E-mail</th><th rowspan="1" colspan="1">CPF</th><th rowspan="1" colspan="1">Telefone</th><th rowspan="1" colspan="1">Ação</th></tr>
</tfoot>
</table></div></div>
</div>
</div>

</div>
</div>
</div>

<!-- modal Cadastrar novo Produto -->

<div class="modal fade bd-example-modal-lg-produto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
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
            <form class="">
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="nome-produto" class="">Nome/Marca do produto</label>
            <input name="nome" id="nome-produto" placeholder="Nome do produto" type="name" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="codigo-produto" class="">Código</label>
            <input name="codigo_barra" id="codigo-produto" placeholder="Código de barra" type="name" class="form-control">
        </div>
    </div>
</div>
<div class="position-relative form-group">
    <label for="desproduto" class="">Descrição</label>
    <input name="desproduto" id="desproduto" placeholder="Descrição do produto" type="text" class="form-control">
</div>
<div class="form-row">
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="valor" class="">Valor</label>
            <input name="valor" id="valor" placeholder="R$" type="text" class="form-control">
        </div>
    </div>
</div>
<div class="position-relative row form-group">
<label for="imagem" class="col-sm-2 col-form-label">Imagem do produto</label>
<div class="col-sm-10">
    <input name="imagem" id="imagem" type="file" class="form-control-file">
    <small class="form-text text-muted">Selecione uma foto do produto.
    </small>
</div>
</div>
</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </div>
</div>

  </body>
<!-- /Body -->
</div>   
</div>
</div>
<?php
require_once("footer.php");
?>