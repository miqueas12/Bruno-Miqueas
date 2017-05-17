<html>
<head>
<script type="text/javascript">
		function loginsucesso(){
			setTimeout("window.location='index.php'", 2000)
		}
	</script>
<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		h2{
			color: #B12FF3;
			text-shadow: 1px 1px 3px black;
			text-align: center;
		}
		.form-inline{
			text-align: center;
		}
		body{
			background-image: url("fundo.png");
			background-repeat: no-repeat;
			background-size: 100% 100%;
		}
	</style>

<script type="text/javascript" src="js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"></head>
<body>
<form class="form-inline" method="post" action="cadastro_candidato.php">
		<h2>Cadastro dos Candidatos</h2><br>
		<div class="form-group">

	<label>Nome</label>
	<input type="text" class="form-control" name="nome">
	
	<label>Numeração:</label>
	<input type="text" class="form-control" name="number">
	
	<label>Partido:</label>
	<input type="text" class="form-control" name="partido">
	
	<button type="submit" class="btn btn-default">Enviar</button><br>
	</div>
<br><br>
<?php
require("conexao.php");

@$nome = $_POST['nome'];
@$numeracao = $_POST['number'];
@$partido = $_POST['partido'];

$query = mysql_query("INSERT INTO candidato values('$nome','$numeracao','$partido')");



if($query){
	echo "<div class='alert alert-success'>
  <strong>Sucesso!</strong> Cadastro realizado.
</div>" . "<script>loginsucesso()</script>";
}else{
	echo "<div class='alert alert-danger'>
  <strong>Falhou!</strong> Cadastro não realizado, numeração já cadastrada.
</div>";
}

?>

</form>
<br><button class="btn btn-default"><a href="index.php">Inicial</a></button>
</body>



</html>