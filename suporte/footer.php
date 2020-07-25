<footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="javascript:void(0);">Fincorp</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- modal Cadastrar novo usuário-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Novo usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" enctype="multipart/form-data" action="" class="">
    <div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="nome-cliente" class="">Nome do usuário</label>
            <input name="txtnome" id="txtnome" placeholder="Nome completo do cliente" type="text" spellcheck="false" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="cpf_cliente" class="">CPF</label>
            <input name="txtcpf" id="txtcpf" placeholder="Digite o CPF do cliente..." type="text" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="email_cliente" class="">E-mail</label>
            <input name="txtemail" id="txtemail" placeholder="E-mail para contato" type="email" spellcheck="false" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="telefone_cliente" class="">Telefone</label>
            <input name="txttelefone" id="txttelefone" placeholder="Número para contato" type="text" class="form-control" required>
        </div>
    </div>
</div>
<div class="position-relative form-group">
    <label for="txtendereco" class="">Endereço</label>
    <input name="txtendereco" id="txtendereco" placeholder="Rua Bairro Nº" type="text" spellcheck="false" class="form-control">
</div>
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="txtempresa" class="">Nome da Empresa:</label>
            <input name="txtempresa" placeholder="Digite o nome da empresa..." id="txtempresa" type="text" spellcheck="false" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="txtcidade" class="">Cidade/Estado</label>
            <input name="txtcidade" placeholder="Informe cidade & estado" id="txtcidade" type="text" spellcheck="false" class="form-control">
        </div>
    </div>
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="exampleZip" class="">CEP</label>
            <input name="txtcep" id="txtcep" type="text" class="form-control">
        </div>
    </div>
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="txtusername" class="">Username</label>
            <input name="txtusername" id="txtusername" placeholder="Nome completo do cliente" spellcheck="false" type="text" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="txtpassword" class="">Password</label>
            <input name="txtpassword" id="txtpassword" placeholder="Digite o CPF do cliente..." type="password" class="form-control" required>
        </div>
    </div>
<div class="position-relative form-group">
    <label for="fotoperfil" class="">Foto de perfil:</label>
    <input name="fotoperfil" id="fotoperfil" type="file" class="form-control" required>
</div>
<div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group" required>
                        <label>Nível de acesso:</label>
                        <select name="access_level" class="form-control" required>
                        <option disabled selected>Selecione um nível de acesso</option>
                          <option value="Suporte">Suporte</option>
                          <option value="Administrador">Administrador</option>
                        </select>
                      </div>
                    </div>
            </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="cadastrar-usuario">Cadastrar</button>
            </form>
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
            <input name="nome" id="nome-produto" placeholder="Nome do produto" type="text" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="codigo-produto" class="">Código</label>
            <input name="codigo_barra" id="codigo-produto" placeholder="Código de barra" type="text" class="form-control">
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