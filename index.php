<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Intra Life</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
							
  </head>
<body>
	<div class="container">
		<div class="row text-center login-page">
			<div class="col-md-12 login-form">
				<form action="ManejadorSesiones.php" method="post"> 
					
					<div class="row">
						<div class="col-md-12 login-form-header">
							<p class="login-form-font-header">Intra<span>Life</span><p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 login-from-row">
							<input name="usuario" type="text" placeholder="Usuario" required/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 login-from-row">
							<input name="password" type="password" placeholder="Contraseña" required/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 login-from-row">
							<button class="btn btn-info">Entrar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</div>
	
</body>
</html>
