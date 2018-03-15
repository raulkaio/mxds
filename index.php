<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/custom.css">

    <title>Hello, world!</title>
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
                            <center><h4>Login</h4></center>
                        </div>
                        <form method="POST">
                            <div class="form-group">
                                <label for="email">E-Mail:</label>

                                <input id="email" type="email" class="form-control" name="email" value="" required=""
                                       autofocus="">
                            </div>

                            <div class="form-group">
                                <label for="password">Senha</label>
                                <div style="position:relative"><input id="senha" type="password" class="form-control"
                                                                      name="senha" required="" data-eye=""
                                                                      style="padding-right: 60px;">
                                </div>
                            </div>

                            <div class="form-group">
                                <center>
                                    <label>
                                    <a href="forgot.html" class="float-right">
                                        Esqueceu a senha?
                                    </a>
                                </label>
                                </center>
                            </div>

                            <div class="form-group no-margin">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Entrar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="footer">
                    <center>Copyright © 2018 - Máxima Sistemas SA</center>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/my-login.js"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="bootstrap.min.js"></script>
<script src="bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>