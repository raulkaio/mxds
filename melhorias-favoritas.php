<?php include 'header.php'?>

<div class="container card-melhorias">
  <div class="row card">
  
		<h3>Melhorias favoritas</h3>
		
		<table class="table table-hover">
		  <thead>
			<tr>
			  <th scope="col-sm-1"><input type="number" class="form-control form-control-sm" id="pesquisa-id" placeholder="CÓDIGO"></th>
			  <th scope="col-sm-4"><input type="text" class="form-control form-control-sm" id="pesquisa-titulo" aria-describedby="pesquisa-titulo" placeholder="TÍTULO"></th>
			  <th scope="col-sm-4"><input type="text" class="form-control form-control-sm" id="pesquisa-descricao" aria-describedby="pesquisa-descricao" placeholder="DESCRIÇÃO"></th>
			  <th scope="col-sm-3"></th>
			</tr>
		  </thead>
		   <thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Título</th>
			  <th scope="col">Descrição</th>
			  <th scope="col">Opções</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th scope="row">1</th>
			  <td>Melhoria teste</td>
			  <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sem a...</td>
			  <td>
				<button type="button" class="btn btn-primary btn-sm">
					<abbr title="Aumenta a força da melhoria, quanto mais curtidas ela receber, maiores as chances de ela ser implementada." class="initialism">
						<span class="oi oi-thumb-up" aria-hidden="true"></span>
					</abbr>
				</button>
				<button type="button" class="btn btn-warning btn-sm">
					<abbr title="Ao colocar uma melhoria como favorita, qualquer mudança no seu estado (se ela for implementada, alterada ou algo do tipo) você será notificado no menu ''Favoritas''." class="initialism">
						<span class="oi oi-star" aria-hidden="true"></span>
					</abbr>
				</button>
				<button type="button" class="btn btn-secondary btn-sm">
					<span class="oi oi-zoom-in" title="Ver detalhes" aria-hidden="true" data-toggle="modal" data-target="#modal-melhoria"></span>
				</button>			  
			  </td>
			</tr>
			
			<tr>
			  <th scope="row">1</th>
			  <td>Melhoria teste</td>
			  <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sem a...</td>
			  <td>
				<button type="button" class="btn btn-primary btn-sm">
					<abbr title="Aumenta a força da melhoria, quanto mais curtidas ela receber, maiores as chances de ela ser implementada." class="initialism">
						<span class="oi oi-thumb-up" aria-hidden="true"></span>
					</abbr>
				</button>
				<button type="button" class="btn btn-warning btn-sm">
					<abbr title="Ao colocar uma melhoria como favorita, qualquer mudança no seu estado (se ela for implementada, alterada ou algo do tipo) você será notificado no menu ''Favoritas''." class="initialism">
						<span class="oi oi-star" aria-hidden="true"></span>
					</abbr>
				</button>
				<button type="button" class="btn btn-secondary btn-sm">
					<span class="oi oi-zoom-in" title="Ver detalhes" aria-hidden="true" data-toggle="modal" data-target="#modal-melhoria"></span>
				</button>			  
			  </td>
			</tr>
		  </tbody>
		</table>
		
  </div>
</div>

<!-- Modal de recuperação de senha-->

<div class="modal fade" id="modal-melhoria" tabindex="-1" role="dialog" aria-labelledby="modal-melhoria" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-melhoria">#1 - Melhoria teste</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sem a ipsum volutpat sodales vel eget odio. Etiam et turpis quam. Morbi et vestibulum massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis fermentum rhoncus risus. Ut tempor malesuada convallis. Quisque quis augue id lacus pulvinar placerat ac sit amet libero. In neque libero, tempus quis ornare vitae, cursus in leo. Phasellus scelerisque odio a tincidunt mollis. Nullam scelerisque ex quis augue varius aliquet. Ut mattis erat vitae magna iaculis, vitae commodo eros blandit. Duis nec dui malesuada, convallis tellus quis, viverra nibh. Integer vulputate, tortor sit amet feugiat faucibus, ex neque elementum dolor, nec fringilla urna mauris ut tortor. Maecenas sit amet dictum diam. Maecenas cursus turpis id libero posuere ornare.</p>

		<p>Aliquam vulputate, leo ac auctor ornare, magna lacus tristique massa, vitae efficitur orci nisl ut sapien. Donec efficitur vel nulla at tristique. Aenean eget porta lectus. Ut lobortis quis erat vitae convallis. Phasellus accumsan odio nec viverra ultrices. Duis a justo ut arcu pretium posuere. Integer tincidunt sapien vel nunc lacinia fringilla.</p>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
        <button type="button" class="btn btn-primary">
			<span class="oi oi-thumb-up" title="Curtir" aria-hidden="true"></span> CURTIR
		</button>
		<button type="button" class="btn btn-success">
			<span class="oi oi-star" title="Favoritar" aria-hidden="true"></span> FAVORITAR
		</button>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'?>