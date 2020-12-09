<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Obtener valores de multiples CheckBox seleccionadas con PHP | BaulCode</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</head>

<body>
<header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">BaulPHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a> </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
      </form>
    </div>
  </nav>
</header>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">Obtener valores de multiples CheckBox</h3>
  <hr>
  <div class="row">
    <div class="col-8 col-md-8"> 
      <!-- Contenido -->
      
<form action="index.php" method="post">

<label class="heading">Seleccione su lenguaje favorito:</label>
<div class="checkbox">
  <label><input type="checkbox" name="check_lista[]" value="C++">C++</label>
</div>
<div class="checkbox"> 
  <label><input type="checkbox" name="check_lista[]" value="Java">Java</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="check_lista[]" value="PHP7">PHP 7</label>
</div> 
<div class="checkbox">
  <label><input type="checkbox" name="check_lista[]" value="HTML5/CSS">HTML5/CSS</label>
</div> 
<div class="checkbox">
  <label><input type="checkbox" name="check_lista[]" value="JavaScript/jQuery">JavaScript/jQuery</label>
</div> 
<button type="submit" class="btn btn-primary" name="enviar">Enviar Información</button>
<!----- Including PHP Script ----->
<?php include 'checkbox_proceso.php';?>
</form>
      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> <span class="text-muted">
    <p>Códigos <a href="https://www.baulphp.com/" target="_blank">BaulPHP</a></p>
    </span> </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>