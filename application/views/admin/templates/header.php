<!DOCTYPE html>
<html>
  <head>
    <title>Minereux Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="/assets/jquery/bootstrap.min.js"></script>
      <script src="/assets/jquery/tinymce/tinymce.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
   
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Minereux</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Inicio</a></li>
      <li><a href="<?php echo base_url();?>index.php/admin/pages">Paginas</a></li>
      <li><a href="<?php echo base_url();?>index.php/admin/users">Usuarios</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Cuenta<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Cambiar Contrase&ntilde;a</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo base_url();?>index.php/admin/home/logout">Logout</a></li>
        </ul>
      </li>
    </ul>

  </div><!-- /.navbar-collapse -->
  </div>
</nav>
<div class="container">
   
  
