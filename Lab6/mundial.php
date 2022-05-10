<!DOCTYPE html>
<?php
include('funciones/funciones.php');
$xc = conectar();
$sql_mundial = "SELECT * FROM mundial";
$res_mundial = mysqli_query($xc, $sql_mundial);
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Mundial/NEWS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/internacional.css">
</head>
<body>
    <h1><?php
	while($filas_mundial = mysqli_fetch_array($res_mundial)) {
		echo $filas_mundial['titulo'];
	}
	?></h1>
    <br>
    <div style="text-align: center;">
      <button type="button" class="btn btn-primary">Noteamérica</button>
      <button type="button" class="btn btn-secondary">Sudamérica</button>
      <button type="button" class="btn btn-success">Europa</button>
      <button type="button" class="btn btn-danger">Asia</button>
      <button type="button" class="btn btn-warning">Oceanía</button>
    </div>
    <br>
    <p style="text-align: center;">En esta sección podras las diferentes acontecimientos que estan ocurriendo actualmente en nuestro planeta puedes acceder a la sección de cada continente.</p>
    <section class="post-list">
    	<div class="content">
    		<article class="post">
    			<div class="post-header">
    				<div class="post-img-1"></div>
    			</div>
    			<div class="post-body">
    				<span>11 Julio, 2021 | Sudamérica</span>
    				<h2>¡Alerta en Caracas!</h2>
    				<p>El presidente de Venezuela Nicolas Máduro ordeno la militarización de la capital del país ya que un hombre que se hace llamar Koki y es un pandillero de la ciudad que reunio un gran grupo de personas rebeldes amenazaron...</p>
    				<a href="caracas.html" class="post-link">Ver Más</a>
    			</div>
    		</article>
    		<article class="post">
    			<div class="post-header">
    				<div class="post-img-2"></div>
    			</div>
    			<div class="post-body">
    				<span>4 Julio, 2021 | Europa</span>
                    <h2>Terrible atentado</h2>
                    <p>El día de ayer el castillo de la reina Isabel II del Reino Unido sufrió un atentado terrible que lamentablemente tuvo como consecuencia la muerte de 15 turistas...</p>
                    <a href="" class="post-link">Ver Más</a>
    			</div>
    		</article>
    		<article class="post">
    			<div class="post-header">
    				<div class="post-img-3"></div>
    			</div>
    			<div class="post-body">
    				<span>11 Julio, 2021 | Norteamérica</span>
                    <h2>Ataque en Siria</h2>
                    <p>Una base militar estadounidense muy importante en Siria fue blanco de un ataque con varios cohetes el pasado 11 de julio cosa que conmociono a la población de EE.UU incluyendo a mismo presidente...</p>
    				<a href="" class="post-link">Ver Más</a>
    			</div>
    		</article>
        </div>
    </section>
    <div style="text-align: center;">
        <a href="Index.html"><button type="button" class="btn btn-dark">Volver</button></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>