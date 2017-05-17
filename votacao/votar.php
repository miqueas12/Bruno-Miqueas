<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		h4{
			color: #B12FF3;
			text-shadow: 1px 1px 3px black;
			text-align: center;
		}
		h2{
			color: #B12FF3;
			text-shadow: 1px 1px 1px black;
			text-align: center;
		}
		.form-inline{
			text-align: center;
		}
		body{
			background-image: url("urna.jpg");
			background-repeat: no-repeat;
			background-size: 100% 100%;
		}
	</style>

<script type="text/javascript" src="js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"></head>
<script>
	function limpa(){
		if(document.getElementById('id_candidato').value!=""){
			document.getElementById('id_candidato').value="";
		}
	}
</script>

<body>
<form class="form-inline" method="post" action="votar.php">
<h2>Deixe seu voto aqui!</h2>
<div>
<label>Numeração: </label>
	<input type="text" class="form-control" name="id_candidato" id='id_candidato' maxlength="5"><br><br>
	</div>
	
<button type="button" class="btn btn-defalt">Branco</button>
<button type="button" class="btn btn-warning" onClick="limpa()">Corrige</button>
<button type="submit" class="btn btn-success">Confirma</button><br><br>

<br><button class="btn btn-default"><a href="index.php">Inicial</a></button>
<?php
   require('conexao.php');
 $seleciona=mysql_query("SELECT c.*, v.* from candidato as c, votar as v where c.numeracao = v.id_voto");
 $somo = mysql_query("SELECT sum(numerodevotos) from votar");

     while ($array=mysql_fetch_assoc($somo)) {

     	$soma = $array['sum(numerodevotos)'];

     	while($linha = mysql_fetch_assoc($seleciona)){
     		$parte = $linha['numerodevotos'];
     		$nome = $linha['nome'];

     		@$calculo = ($parte * 100)/$soma;
     	}
     }
   ?>
</form>
</body>
</html>