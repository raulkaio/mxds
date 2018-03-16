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
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
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
					<button type="button" class="btn btn-secondary btn-sm" aria-hidden="true" data-toggle="modal" data-target="#modal-melhoria">
						<span class="oi oi-zoom-in" title="Ver detalhes"></span>
					</button>
				</div>
			  </td>
			</tr>
			
			<tr>
			  <th scope="row">1</th>
			  <td>Melhoria teste</td>
			  <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sem a...</td>
			  <td>
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
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
					<button type="button" class="btn btn-secondary btn-sm" aria-hidden="true" data-toggle="modal" data-target="#modal-melhoria">
						<span class="oi oi-zoom-in" title="Ver detalhes"></span>
					</button>
				</div>
			  </td>
			</tr>
			
			<tr>
			  <th scope="row">1</th>
			  <td>Melhoria teste</td>
			  <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sem a...</td>
			  <td>
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
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
					<button type="button" class="btn btn-secondary btn-sm" aria-hidden="true" data-toggle="modal" data-target="#modal-melhoria">
						<span class="oi oi-zoom-in" title="Ver detalhes"></span>
					</button>
				</div>
			  </td>
			</tr>
			
			<tr>
			  <th scope="row">1</th>
			  <td>Melhoria teste</td>
			  <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sem a...</td>
			  <td>
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
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

<?php include 'modal-detalhes-externo.php'?>

<?php include 'footer.php'?>