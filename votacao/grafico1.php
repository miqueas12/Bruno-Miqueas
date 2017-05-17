<html>
<head>
	<title></title>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		h2{
			color: black;
			text-shadow: 1px 1px 3px black;
			text-align: center;
		}
		.grafico{
			position: relative;
			width: 400px;	
			border: 1px solid #B1D632;
			padding: 2px;
		}
		.grafico .barra{
			display: block;
			position: relative;
			background: #B1D632;
			text-align: left;
			color: #333;
			height: 2em;
		}
		body{
			background-image: url("fundo.png");
			background-repeat: no-repeat;
			background-size: 100% 100%;
		}
		.grafico .barra span{position: absolute;left: 1em;}
	</style>
</head>
<body>
<center><h2>Gráfico de Votos</h2></center>
<?php
require("conexao.php");

$query = mysql_query("SELECT count(id_voto) from votar where voto=17");
?>


<div class="grafico"><strong style="width: 30%;" class="barra">30%</strong></div>
<div class="grafico"><strong style="width: 40%;" class="barra">40%</strong></div>

<br><button class="btn btn-default"><a href="index.php">Inicial</a></button>

</body>
</html>