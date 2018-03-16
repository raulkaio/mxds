<?php include 'header.php'?>

<div class="container card-melhorias">
  <div class="row card">
  
		<h3>Melhorias cadastradas</h3>
		
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
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-editar">
							<span class="oi oi-pencil" title="Editar"></span>
					</button>
					<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-excluir">
						<span class="oi oi-trash" title="Excluir"></span>
					</button>
					<button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-melhoria">
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
        <h5 class="modal-title" id="modal-editar">Melhoria #123</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">Código:</label>
				<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="1">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Título:</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Melhoria teste">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Descrição:</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sem a ipsum volutpat sodales vel eget odio. Etiam et turpis quam. Morbi et vestibulum massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis fermentum rhoncus risus. Ut tempor malesuada convallis. Quisque quis augue id lacus pulvinar placerat ac sit amet libero. In neque libero, tempus quis ornare vitae, cursus in leo. Phasellus scelerisque odio a tincidunt mollis. Nullam scelerisque ex quis augue varius aliquet. Ut mattis erat vitae magna iaculis, vitae commodo eros blandit. Duis nec dui malesuada, convallis tellus quis, viverra nibh. Integer vulputate, tortor sit amet feugiat faucibus, ex neque elementum dolor, nec fringilla urna mauris ut tortor. Maecenas sit amet dictum diam. Maecenas cursus turpis id libero posuere ornare.
				<br>Aliquam vulputate, leo ac auctor ornare, magna lacus tristique massa, vitae efficitur orci nisl ut sapien. Donec efficitur vel nulla at tristique. Aenean eget porta lectus. Ut lobortis quis erat vitae convallis. Phasellus accumsan odio nec viverra ultrices. Duis a justo ut arcu pretium posuere. Integer tincidunt sapien vel nunc lacinia fringilla.</textarea>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Chamado:</label>
				<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="8745696">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Cliente:</label>
				<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="145">
			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
		<button type="submit" class="btn btn-primary">SALVAR</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de excluir -->

<div class="modal fade" id="modal-excluir" tabindex="-1" role="dialog" aria-labelledby="modal-excluir" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-excluir">Excluir melhoria #123</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Tem certeza que deseja excluir?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
		<button type="button" class="btn btn-danger">EXCLUIR MELHORIA</button>
      </div>
    </div>
  </div>
</div>

<?php include 'modal-detalhes-interno.php'?>

<?php include 'footer.php'?>