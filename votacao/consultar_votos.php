<!DOCTYPE html>
<html>
<head>
	<title></title>
	<h2>Consultas de Votos</h2>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"></head>
 
</head>
<body>

<?php
require("conexao.php");

$query = mysql_query("SELECT id_voto, voto from votar");

?>

<table border= "2" class= "table table-striped">
<?php
while($linha = mysql_fetch_array($query)){
	echo "<tr><td>". $linha['id_voto']."</td>. <td>". $linha['voto']."</td></tr>";
}


?>

</table>
<br><button class="btn btn-default"><a href="index.php">Inicial</a></button>

</body>
</html>