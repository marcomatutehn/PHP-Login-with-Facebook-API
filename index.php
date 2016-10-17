<?php
	require_once 'app/start.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<?php require 'bootstrapHeader.php';  ?>
	<link href="css/style.css"
      rel="stylesheet" type="text/css">
</head>
<body>
	<?php require 'header.php';  ?>
	<div class="row">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
			<div class="container" id="inicio_sesion">

				<div class="col-md-12">
					<form class="form-signin">
					<h2 class="form-signin-heading">Por favor inicia sesion: </h2>

					<label class="sr-only" for="inputEmail" >Ingrese el correo</label>

					<input id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" type="email"></input>

					<label class="sr-only" for="inputPassword" >Ingrese la contrasena</label>
					<input id="inputPassword" class="form-control" placeholder="Password" required="" type="password">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="remember-me">
							Recuerdame
						</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
					</form>
					<p></p>
				</div>

				<div class="col-md-12" >
					<?php if (!isset($_SESSION['facebook'])): ?>

					<a href="<?php echo $helper->getLoginUrl($config['scopes']); ?>" class="btn btn-lg btn-primary btn-block" id="sesionFace">Iniciar sesión con Facebook!</a>
					<?php else: ?>
					<p>
						Bienvenido, <?php echo $facebook_user->getName(); ?>
					</p>
					<a href="app/logout.php" class="btn btn-danger" id="sesionFace">Cerrar sesión</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
	
		</div>
		
	</div>
	<?php require 'footer.php';  ?>
	<?php require 'bootstrapFooter.php';  ?>
</body>
</html>