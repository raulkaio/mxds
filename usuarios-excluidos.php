<?php include 'header.php'?>

<div class="container card-melhorias">
  <div class="row card">
  
		<h3>Usuários excluídos</h3>
		
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
					<button type="button" class="btn btn-success btn-sm" aria-hidden="true" data-toggle="modal" data-target="#modal-restaurar">
						<span class="oi oi-action-undo" title="Excluir"></span>
					</button>
					<button type="button" class="btn btn-secondary btn-sm" aria-hidden="true" data-toggle="modal" data-target="#modal-detalhes-usuario">
						<span class="oi oi-zoom-in" title="Ver detalhes"></span>
					</button>	
				</div>
			  </td>
			</tr>
			
		  </tbody>
		</table>
		
  </div>
</div>

<!-- Modal de restaurar usuário -->

<div class="modal fade" id="modal-restaurar" tabindex="-1" role="dialog" aria-labelledby="modal-restaurar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-restaurar">Restaurar usuário #123</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Tem certeza que deseja restaurar esse usuário?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
		<button type="button" class="btn btn-success">Restaurar usuário</button>
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