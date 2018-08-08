<?php 
	include_once("connection.php");
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilo.css" />
		<title>
		|| Motor de Busca
		</title>
	</head>
<body>
	<br/>
	<form action="motor.php" method="POST">
		<h3>Sistema de Busca</h3>
		<p id="resultStyle">Nome: <br/>
		<input type="text" name="nome" size="30"/>
		<input type="submit" name="botaoEnviar" value="Buscar"/> </p>
	</form>
</body>
</html>