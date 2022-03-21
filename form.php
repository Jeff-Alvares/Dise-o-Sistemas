<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>


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
/*registro de formulario*/
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

#Formularios {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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

<h1 id="titulo">Registro de Datos</h1>
<br> <br>
<div id="Formularios">
  <form action="/action_page.php">
    <label for="fname">Digite Su Nombre</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Digite Su Apellido</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Digite Su Email</label>
    <input type="text" id="email" name="email" placeholder="Your Email..">

    <label for="country">Seleccione Su Pais</label>
    <select id="country" name="country">
      <option value="australia">El Salvador</option>
      <option value="canada">Estados Unidos</option>
      <option value="usa">Argentina</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>
	
</body>
</html>