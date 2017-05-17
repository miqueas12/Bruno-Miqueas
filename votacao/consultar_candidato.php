<!DOCTYPE html>
<html>
<head>
	<title></title>
	<h2>Consultas de Candidatos</h2>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 
<?php
require("conexao.php");

$query = mysql_query("SELECT nome, numeracao, partido from candidato");
?>

<table border= "2" class= "table table-striped">
<?php
while($linha = mysql_fetch_array($query)){
	echo "<tr> <td>Nome: ".$linha['nome']."</td>"."<td>Numeracao: " . $linha['numeracao']."</td>"."<td>Partido: " .$linha['partido']."</td></tr>";
	
}
?>
</table>
<button class="btn btn-default"><a href="index.php">Inicial</a></button>
</body>
</html>