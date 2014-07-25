<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Marco Soria">
    <title>Minereux AdminPanel for Codigniter</title>
    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/assets/css/signin.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
    	<div style="text-align: center;">
	    	<img src="/assets/images/logo.png" alt="Minereux" style="margin-top: -40px;" />
    	</div>
    	<div class="login_wrapper" style="width: 320px;margin: 0 auto;">
        	<?php echo form_open('admin/home/do_login') ?>
	        <h3 class="form-signin-heading">Inicia Sesion en Minereux</h3>
    	    <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
        	<input type="password" class="form-control" placeholder="Password" name="password">
	        <label class="checkbox">
    	      <input type="checkbox" value="remember-me">Recordar mi sesión
        	</label>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
	      </form>
      </div>
    </div> <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>