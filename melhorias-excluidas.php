<?php include 'header.php'?>

<div class="container card-melhorias">
  <div class="row card">
  
		<h3>Melhorias excluídas</h3>
		
		<table class="table table-hover">
		  <thead>
			<tr>
			  <th scope="col-sm-1"><input type="number" class="form-control form-control-sm" id="pesquisa-id" placeholder="CÓDIGO"></th>
			  <th scope="col-sm-3"><input type="text" class="form-control form-control-sm" id="pesquisa-titulo" aria-describedby="pesquisa-titulo" placeholder="TÍTULO"></th>
			  <th scope="col-sm-3"><input type="text" class="form-control form-control-sm" id="pesquisa-descricao" aria-describedby="pesquisa-descricao" placeholder="DESCRIÇÃO"></th>
			  <th scope="col-sm-2"><input type="text" class="form-control form-control-sm" id="pesquisa-descricao" aria-describedby="pesquisa-descricao" placeholder="CHAMADO"></th>
			  <th scope="col-sm-2"><input type="text" class="form-control form-control-sm" id="pesquisa-descricao" aria-describedby="pesquisa-descricao" placeholder="CLIENTE"></th>
			  <th scope="col-sm-1"></th>
			</tr>
		  </thead>
		   <thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Título</th>
			  <th scope="col">Descrição</th>
			  <th scope="col">Chamado</th>
			  <th scope="col">Cliente</th>
			  <th scope="col">Opções</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th scope="row">1</th>
			  <td>Melhoria teste</td>
			  <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sem a...</td>
			  <td>8745696</td>
			  <td>145</td>
			  <td>
				  <div class="btn-group btn-group-toggle" data-toggle="buttons">
					<button type="button" class="btn btn-success btn-sm"  aria-hidden="true" data-toggle="modal" data-target="#modal-restaurar">
						<span class="oi oi-action-undo" title="Excluir"></span>
					</button>
					<button type="button" class="btn btn-secondary btn-sm" aria-hidden="true" data-toggle="modal" data-target="#modal-melhoria">
						<span class="oi oi-zoom-in" title="Ver detalhes"></span>
					</button>
				  </div>
			  </td>
			</tr>
			
		  </tbody>
		</table>
		
  </div>
</div>

<!-- Modal de restaurar melhoria -->

<div class="modal fade" id="modal-restaurar" tabindex="-1" role="dialog" aria-labelledby="modal-restaurar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-restaurar">Restaurar melhoria #123</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Tem certeza que deseja restaurar essa melhoria?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
		<button type="button" class="btn btn-success">Restaurar MELHORIA</button>
      </div>
    </div>
  </div>
</div>

<?php include 'modal-detalhes-interno.php'?>

<?php include 'footer.php'?>