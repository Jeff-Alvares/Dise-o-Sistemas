<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio2</title>

<style>
	/*Fuente importada*/
	@import url('https://fonts.googleapis.com/css2?family=Concert+One&family=Russo+One&display=swap');

	/*Color de Fondo*/
	body{
		background: #000428;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #004e92, #000428);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #004e92, #000428); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}

	/*Estilos del titul0 de la pagina*/
	#titulo{
		font-family: 'Concert One', cursive;
		font-family: 'Russo One', sans-serif;
		text-align: center;
		color: #02FF0A;
		text-shadow: 5px 5px #558ABB;
		font-size: 40px;
	}
	/*Boton de enlace de descarga de codigo fuente*/
	.myButton {
	box-shadow: 0px 10px 14px -7px #276873;
	background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
	background-color:#599bb3;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Trebuchet MS;
	font-size:20px;
	font-weight:bold;
	padding:13px 32px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.myButton:hover {
	background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
	background-color:#408c99;
}
.myButton:active {
	position:relative;
	top:1px;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

/*tablas*/
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  color: #FF04E4;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

</head>
<body>
	<div class="topnav">
	  <a class="active" href="ejercicio-2.php">Inicio</a>
	  <a href="imagenes.php">Imagenes</a>
	  <a href="tablas.php">Tablas</a>
	  <a href="form.php">Formularios</a>
	  <a href="multimedia.php">Multimedia</a>
	</div>

			<h1 id="titulo">Ejercicio con tablas</h1>

		<table id="customers">
		  <tr>
		    <th>Empresa</th>
		    <th>Contacto</th>
		    <th>País</th>
		  </tr>
		  <tr>
		    <td>Google</td>
		    <td>Jeff Alvares</td>
		    <td>El Salvador</td>
		  </tr>
		  <tr>
		    <td>Facebook</td>
		    <td>Jeff Alvares</td>
		    <td>El Salvador</td>
		  </tr>
		  <tr>
		    <td>WhatsApp</td>
		    <td>Jeff Alvares</td>
		    <td>El Salvador</td>
		  </tr>
		</table>
</body>
</html>