<?php 
	//include_once("connection.php");
?>

<html>
	<head>
	
		<link rel="stylesheet" type="text/css" href="estilo.css" />
		
		<title>
			|| Motor de Busca
		</title>
		
		<script>
		
			function buscar(){
				
				var ajax = new XMLHttpRequest();
				var nome = document.getElementById("nome").value;
					
				ajax.onreadystatechange = function(){
						
					if(ajax.readyState == 4){
						document.getElementById("vem").innerHTML = ajax.responseText;
					}
						
				};
					
				ajax.open("GET", "connection.php?nome=" + nome, true);
				ajax.send();
				
			}
		
		</script>
		
	</head>
	
	<body>
	
		<br/>
		

			<h3>Sistema de Busca</h3>
			<p id="resultStyle">Nome: <br/>
			<input type="text" name="nome" id="nome" onkeyup="buscar()" size="30"/>
			</p>
			
			<div id="vem">
			
			
			
			</div>

		
	</body>
	
</html>