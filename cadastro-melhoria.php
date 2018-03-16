<?php include 'header.php'?>

<div class="container card-melhorias">
  <div class="row card">
  
		<h3>Cadastrar melhoria</h3>
		
		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">Código:</label>
				<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Título:</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Descrição:</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Chamado:</label>
				<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Cliente:</label>
				<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<center>
				<button type="reset" class="btn btn-secondary btn-lg">LIMPAR</button>
				<button type="submit" class="btn btn-primary btn-lg">SALVAR</button>
			</center>
		</form>
		
  </div>
</div>

<?php include 'footer.php'?>