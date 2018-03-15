<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/custom.css">
	
	<link rel="icon" type="image/png" href="img/favicon.png">
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>maxIdeias</title>
</head>
<body class="my-login-page">
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <br><br>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <center><img src="img/logo-maxima.png" width="191" height="90"></center>
                        </div>
                        <form method="POST">
                            <div class="form-group">
                                <label for="email">E-Mail:</label>

                                <input id="email" type="email" class="form-control" name="email" value="" required=""
                                       autofocus="">
                            </div>

                            <div class="form-group">
                                <label for="password">Senha:</label>
                                <div style="position:relative"><input id="senha" type="password" class="form-control"
                                                                      name="senha" required="" data-eye=""
                                                                      style="padding-right: 60px;">
                                </div>
                            </div>

                            <div class="form-group">
                                <center>
                                    <label>
                                    <a href="" data-toggle="modal" data-target="#recupera-senha">
                                        Esqueceu a senha?
                                    </a>
                                </label>
                                </center>
                            </div>

                            <div class="form-group no-margin">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Entrar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="footer">
                    <center>© 2018 Máxima Sistemas</center>
                </div>

<!-- Modal de recuperação de senha-->

<div class="modal fade" id="recupera-senha" tabindex="-1" role="dialog" aria-labelledby="recupera-senha" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="recupera-senha">Esqueci minha senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
			<div class="form-group">
				<label for="email">E-Mail:</label>

				<input id="email" type="email" class="form-control" name="email" value="" required=""
					   autofocus="">
			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
        <button type="submit" class="btn btn-primary">ENVIAR PARA ESSE E-MAIL</button>
      </div>
    </div>
  </div>
</div>





            </div>
        </div>
    </div>
</section>
</body>
</html>