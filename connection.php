<html>
	<head>
		<title>
		|| Resultados da Pesquisa
		</title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
	</head>
<body>

<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "teste";
	$nome =  isset($_POST['nome'])? $_POST['nome']: null;
	
	if($nome == ""){
		
		echo "<br/>";
		echo "<h3>Você deve digitar um nome a ser pesquisado.</h3>";
		
	}
	
	// Estabelece conexao
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Verifica a conexao criada
	if(!$conn) {

		die("Falha ao conectar: " . mysqli_connect_error());

	}

	$sql = "SELECT * FROM usuarios where nome like '%$nome%'";
	
	$result = mysqli_query($conn ,$sql);
	
	if($result == ""){
		
		echo "<br>";
		echo "<h3>Resultados de" . $nome . ":</h3>";
		echo "<hr/>";
		echo "<p id='resultStyle'><strong>Nenhum resultado.</strong></p>";
		
	}
	
	while ($array_leitura = mysqli_fetch_array($result)){
		
		echo "<br/>";
		echo "<h3>Resultados de " . $nome . ":</h3>";
		echo "<hr/>";
		echo "<p id='resultStyle'><strong>ID:</strong> " . $array_leitura['id_user'] . "<br/>";
		echo "<strong>Nome:</strong>". $array_leitura['nome']. "<br/>";
		echo "<strong>Login:</strong>". $array_leitura['login']. "<br/>";
		echo "<br/>";
		echo "<br/>";
		
	}

	mysqli_close($conn);
	
?>

</body>
</html>
