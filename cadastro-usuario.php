<?php include 'header.php'?>

<div class="container card-melhorias">
  <div class="row card">
  
		<h3>Cadastrar usuário</h3>
		
		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">Nome:</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Login:</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
				  <option selected>Cliente</option>
				  <option value="1">Administrador Máxima</option>
				  <option value="2">Usuário interno Máxima</option>
				</select>
			</div>
			<center>
				<button type="reset" class="btn btn-secondary btn-lg">LIMPAR</button>
				<button type="submit" class="btn btn-primary btn-lg">SALVAR</button>
			</center>
		</form>
		
  </div>
</div>

<?php include 'footer.php'?>