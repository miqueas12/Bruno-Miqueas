<html>
<head>
<script type="text/javascript">

function loginsucesso(){
			setTimeout("window.location='votar.php'", 2000)

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
	<script type="text/javascript">
  function mascara(cpf){
    if(cpf.value.length == 3)
      cpf.value = cpf.value + '.';
    if(cpf.value.length == 7)
      cpf.value = cpf.value + '.';
    if(cpf.value.length == 11)
      cpf.value = cpf.value + '-';
  }
</script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"></head>
<body>
<form class="form-inline" method="post" action="cadastro_eleitor.php">
		<h2>Cadastro dos Eleitores</h2><br>
		<div class="form-group">

	<label>Nome</label>
	<input type="text" class="form-control" name="nome">
	
	<label>CPF:</label>
	<input type="text" class="form-control" name="cpf" required maxlength="14" onkeypress="mascara(this)">
	
	<label>Titulo de eleitor:</label>
	<input type="text" class="form-control" name="titulo" maxlength="12">
	
	<button type="submit" class="btn btn-default">Enviar</button>
	</div>
<?php
require("conexao.php");

@$nome = $_POST['nome'];
@$cpf1 = $_POST['cpf'];
@$titulo = $_POST['titulo'];
$cpf = implode("",(explode(".", $cpf1)));
$cpf_final =  implode("",(explode("-", $cpf)));

$query = mysql_query("INSERT INTO eleitor values('$nome','$cpf_final','$titulo')");

?>

</form>

<?php

if($query){
	echo "<div class='alert alert-success'>
  <strong>Sucesso!</strong> Cadastro realizado.
</div>" . "<script>loginsucesso()</script>";
}else{
	echo "<div class='alert alert-danger'>
  <strong>Falhou!</strong> Cadastro não realizado, titulo já cadastrado.
</div>";
}

?>
<br><button class="btn btn-default"><a href="index.php">Inicial</a></button>
</body>
</html>