<!DOCTYPE html>
<html>
<head>
	<title></title>
	<h2>Consultas de Eleitores</h2>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"></head>
 
</head>
<body>



<?php
require("conexao.php");

$query = mysql_query("SELECT nome, titulo from eleitor");
?>

<table border= "2" class= "table table-striped">
<?php
while($linha = mysql_fetch_array($query)){
	echo "<tr> <td>Nome: ".$linha['nome']."</td>"."<td>Título: " . $linha['titulo']."</td></tr>";
	
}
?>
</table>
<button class="btn btn-default"><a href="index.php">Inicial</a></button>
</body>
</html>