<?php include 'header.php'?>

<div class="container card-melhorias">
  <div class="row card">
  
		<h3>Usuários cadastrados</h3>
		
		<table class="table table-hover">
		  <thead>
			<tr>
			  <th scope="col-sm-1"><input type="number" class="form-control form-control-sm" id="pesquisa-id" placeholder="CÓDIGO"></th>
			  <th scope="col-sm-3"><input type="text" class="form-control form-control-sm" id="pesquisa-nome" aria-describedby="pesquisa-nome" placeholder="NONME"></th>
			  <th scope="col-sm-3"><input type="text" class="form-control form-control-sm" id="pesquisa-descricao" aria-describedby="pesquisa-descricao" placeholder="LOGIN"></th>
			  <th scope="col-sm-2"><input type="text" class="form-control form-control-sm" id="pesquisa-descricao" aria-describedby="pesquisa-descricao" placeholder="TIPO"></th>
			  <th scope="col-sm-1"></th>
			</tr>
		  </thead>
		   <thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Nome</th>
			  <th scope="col">Login</th>
			  <th scope="col">Tipo</th>
			  <th scope="col">Opções</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th scope="row">1</th>
			  <td>Jefferson Lino</td>
			  <td>jefferson.lino@maximasist.com.br</td>
			  <td>Administrador</td>
			  <td>
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-editar">
						<span class="oi oi-pencil" title="Editar"></span>
					</button>
					<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-excluir">
						<span class="oi oi-trash" title="Excluir"></span>
					</button>
					<button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-detalhes-usuario">
						<span class="oi oi-zoom-in" title="Ver detalhes"></span>
					</button>
				</div>
			  </td>
			</tr>
			
		  </tbody>
		</table>
		
  </div>
</div>

<!-- Modal de edição -->

<div class="modal fade" id="modal-editar" tabindex="-1" role="dialog" aria-labelledby="modal-editar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-editar">Usuário #1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">Nome:</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Jefferson Lino">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Login:</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="jefferson.lino@maximasist.com.br">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Senha:</label>
				<input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Confirmação de senha:</label>
				<input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Tipo:</label>
				<select class="custom-select custom-select-lg mb-3">
				  <option value="0">Cliente</option>
				  <option value="1" selected>Administrador Máxima</option>
				  <option value="2">Usuário interno Máxima</option>
				</select>
			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
		<button type="submit" class="btn btn-primary">SALVAR USUÁRIO</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de excluir -->

<div class="modal fade" id="modal-excluir" tabindex="-1" role="dialog" aria-labelledby="modal-excluir" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-excluir">Excluir usuário #1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Tem certeza que deseja excluir?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
		<button type="button" class="btn btn-danger">EXCLUIR USUÁRIO</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de detalhes -->

<div class="modal fade" id="modal-detalhes-usuario" tabindex="-1" role="dialog" aria-labelledby="modal-detalhes-usuario" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-detalhes-usuario">Usuário #1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>Nome: <strong>Jefferson Lino</strong></p>
       <p>Login: <strong>jefferson.lino@maximasist.com.br</strong></p>
       <p>Senha: <strong>salveotricolorpaulista</strong></p>
       <p>Tipo: <strong>Administrador</strong></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'?>