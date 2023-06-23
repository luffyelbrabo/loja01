<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . "/login.php");
if (getLogged($sid) == true) {
	header("location: home.php");
} else {
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Conecta 4G</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Handlee|Josefin+Sans:300,600&amp;display=swap'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="card-wrap">
    <div class="card border-0 shadow card--welcome is-show" id="welcome">
      <div class="card-body">
      <img class="img" name="img" src="images/logo.png"
        <h2 class="card-title">Bem vindo</h2>
        <p>Bem-vindo à página de login</p>

        <?php
				if (isset($_SESSION['erro'])) : echo $_SESSION['erro'];
				session_destroy();
				endif; ?>
             <?php
				if(isset($_SESSION['errouser'])){
          echo $_SESSION['errouser'];
          unset($_SESSION['errouser']);
          } 
          ?>
          <?php
				if(isset($_SESSION['erroemail'])){
          echo $_SESSION['erroemail'];
          unset($_SESSION['erroemail']);
          } 
          ?>
         <?php
				if(isset($_SESSION['usersuce'])){
          echo $_SESSION['usersuce'];
          unset($_SESSION['usersuce']);
          } 
          ?>
        
  
        <div class="btn-wrap"><a class="btn btn-lg btn-register js-btn" data-target="register">REGISTRE-SE</REGISTRE-SE></a><a class="btn btn-lg btn-login js-btn" data-target="login">ENTRAR</a></div>
      </div>
    </div>
    <div class="card border-0 shadow card--register" id="register">
      <div class="card-body">
        <h2 class="card-title">CRIAR CONTA</h2>
        <img class="img" name="img" src="images/logo.png"
        <p class="card-text">Insira seus dados pessoais<br/>
          e comece sua jornada conosco</p>

				<?php
				if (isset($_SESSION['erro'])) : echo $_SESSION['erro'];
				session_destroy();
				endif; ?>

        <form method="POST" action="processa.php">
          <div class="form-group">
            <input class="form-control" type="text" name="nome" placeholder="Name" required="required"/>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="login" placeholder="Usuario" required="required"/>
          </div>
          <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email" required="required"/>
          </div>
          <div class="form-group">
            <input class="form-control" type="password" name="senha" placeholder="Senha" required="required"/>
          </div>
          <button class="btn btn-lg">REGISTRE-SE</button>
        </form>
      </div>
      <button class="btn btn-back js-btn" data-target="welcome"><i class="fas fa-angle-left"></i></button>
    </div>
    <div class="card border-0 shadow card--login" id="login">
      <div class="card-body">
        <h2 class="card-title">
          Bem vindo de volta!</h2>
          <img class="img" name="img" src="images/logo.png"
        <p>Para se manter conectado conosco<br/>por favor faça o login com suas informações pessoais</p>
        <form method="POST" action="" class="mt-4">
          <div class="form-group mb-4">
          <div class="input-group">
          <span class="input-group-text" id="basic-addon1">
										<svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
											<path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
											<path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
										</svg>
						</span>
            <input class="form-control" type="text" name="login" placeholder="Usuario" required="required"/>
          </div>
          </div>
          <!-- End of Form -->
          <div class="form-group">
          <div class="form-group mb-4">
          <div class="input-group">
          <span class="input-group-text" id="basic-addon2">
											<svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
											</svg>
					</span>
            <input class="form-control" type="password" name="senha" placeholder="Password" required="required"/>
          </div>
          </div>
          <!-- End of Form -->
          <div class="d-flex justify-content-between align-items-top mb-4">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="remember">
										<label class="form-check-label mb-0" for="remember"> Lembre-me
										</label>
								</div>
							</div>
								<button name="btn_login" class="btn btn-lg">ENTRAR</button>
							</div>
        </form>
        </div>
      <button class="btn btn-back js-btn" data-target="welcome"><i class="fas fa-angle-left"></i></button>
      </div>
  </div>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>

<?php
}
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/rodape.php"); ?>