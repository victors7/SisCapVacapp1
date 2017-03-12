<!DOCTYPE html>
<html>
<head lang="es">
<meta charset="utf-8">
	<title>Entrevista</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!--link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<style type="text/css">
		img{
	       border-radius: 10px 10px 10px 10px;
           -moz-border-radius: 10px 10px 10px 10px;
           -webkit-border-radius: 10px 10px 10px 10px;
} 
	</style>
</head>
<body>

<div class="container-fluid encabezado"><div class="imagen-encabezado"></div><h1>Califica para nuestras vacantes</h1></div>
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container-nav">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-ap">
					<span class="sr-only">Despleagar /Ocultar Menú</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Royal Prestige</a>
			</div>
			<!--inicia menu-->
			<div class="collapse navbar-collapse" id="navegacion-ap">
				<ul class="nav navbar-nav">
					<li><a href="index" style="color:#424242;">Inicio</a></li>
							<li><a href="#" style="color:#424242;">Nosotros</a></li>
							<li><a href="formulario" style="color:#424242;">Entrevista</a></li>
							<li><a href="ubicacion" style="color:#424242;">Ubicación</a></li>
							<li><a href="inicio" style="color:#424242;">Vacantes</a></li>
				</ul>

			</div>
		</div>
	</nav>

<div class="container-fluid">
	
	<div class="white row">
	
	<article class="titulos">Entrevista</article>
	
		<div class="panel panel-default">
		<div class="panel-body">
   		</br>
   		<p>A continuación se presenta una lista de preguntas para que usted las responde y a partir de esto se evaluara su desempeño </p>
   			<form class="form-horizontal">
    			<div class="form-group">
      				<label for="nombre">* Nombre: </label>
      				<input type="nombre" class="form-control txtancho" id="nombre" placeholder="Ingrese su nombre" required="required">
    			</div>
    			

    			<div class="form-group">
      				<label for="apellidos">* Apellidos: </label>
      				<input type="text" class="form-control txtancho" id="apellidos" placeholder="Ingrese sus apellidos" required="required">
    			</div>


    			<div class="form-group">
      				<label for="pregunta1">* 1.-¿Haz desarrollado algún proyecto de empredimiento?:</label>
      				<div class="radio">
     					<label><input type="radio" name="optradio">Si</label>
    				</div>
    				<div class="radio">
      					<label><input type="radio" name="optradio">No</label>
    				</div>
      				<label for="respuesta1">¿Lo puedes describir de forma concreta?</label>
      				<textarea class="form-control"></textarea>
    			</div>


    			<div class="form-group">
      				<label for="pregunta2">* 2. ¿Selecciona las 3 características que te describan más como persona?  </label>
      					
      					<div class="checkbox">
      					<label><input type="checkbox">Personal Sociable</label>
      					</div>
      					<div class="checkbox">
      					<label><input type="checkbox">Bueno con los números</label>
      					</div>
      					<div class="checkbox">
      					<label><input type="checkbox">Me gusta enseñar</label>
      					</div>
      					<div class="checkbox">
      					<label><input type="checkbox">Responsable con mi dinero</label>
      					</div>
      					<div class="checkbox">
      					<label><input type="checkbox">Ordenado con mis cosas</label>	
      					</div>
      					<div class="checkbox">
      					<label><input type="checkbox">Aventurero</label>	
      					</div>
      					<div class="checkbox">
      					<label><input type="checkbox">Me considero buen hijo/amigo/socio</label>	
      					</div>
      					
      				
    			</div>
    			
    			
    			<div class="form-group">
    				<label for="pregunta3">*3. Contesta las siguientes preguntas: (cada una va ligada a la pregunta anterior, 1 con 1, 2 con 2 y así consecutivamente)</label>
      				<ul>
      				<label>
      				
      				<li><input type="checkbox">Opción 1</li>
      				<li><input type="checkbox">Opción 2</li>
      				<li><input type="checkbox">Opción 3</li>
      				<li><input type="checkbox">Opción 4</li>
      				<li><input type="checkbox">Opción 5</li>	
      				
      				</label>
      				</ul>
    			</div>


    			<button type="submit" class="btn btn-default">Submit</button>
			</form>
			</br>
  		</div>
  		</br>
  		</div>
	</div>
	</br>
</div>

	
	</body>
</html>











