<?php namespace Views;
   $template =new Template();   
	class Template{

		public function __construct(){
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Prueba tecnica ">
    <meta name="keywords" content="Prueba tecnica camilo agudelo">
    <title>Prueba tecnica</title>

  
    <link href="<?php echo URL;?>Views/template/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?php echo URL;?>Views/template/css/Estilos.css" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body>
<main>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="<?php echo URL; ?>estudiantes">Listado</a></li>
    <li class="divider"></li>
  <li><a href="<?php echo URL; ?>estudiantes/agregar">Agregar</a></li>

</ul>
<ul id="dropdown2" class="dropdown-content">
  <li><a href="<?php echo URL; ?>secciones">Listado</a></li>
    <li class="divider"></li>
  <li><a href="<?php echo URL; ?>secciones/agregar">Agregar</a></li>

</ul>
<ul id="dropdown3" class="dropdown-content">
  <li><a href="<?php echo URL; ?>estudiantes">Listado</a></li>
    <li class="divider"></li>
  <li><a href="<?php echo URL; ?>estudiantes/agregar">Agregar</a></li>
</ul>
<ul id="dropdown4" class="dropdown-content">
  <li><a href="<?php echo URL; ?>secciones">Listado</a></li>
    <li class="divider"></li>
  <li><a href="<?php echo URL; ?>secciones/agregar">Agregar</a></li>
</ul>
<div class="navbar-fixed-top">
  <nav>
    <div class="nav-wrapper">
      <a href="<?php echo URL; ?>" class="brand-logo">Prueba Tecnica</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo URL; ?>">Inicio</a></li>
         <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Estudiantes<i class="material-icons right">arrow_drop_down</i></a></li>
         <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Secciones<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="<?php echo URL; ?>">Inicio</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown3">Estudiantes<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown4">Secciones<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
  </nav>
  </div>
<?php
		}

		public function __destruct(){
?>
</main>
   <footer class="page-footer">
          <div class="container">
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Prueba tecnica
            
            </div>
          </div>
        </footer>
</body>

</html>
 <script type="text/javascript" src="<?php echo URL;?>Views/template/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo URL;?>Views/template/js/materialize.js"></script>
 <script type="text/javascript" src="<?php echo URL;?>Views/template/js/script.js"></script>
<?php

		}


	}
	

?>