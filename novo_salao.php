<?php require 'cabecalho.php'?>

<?php
if (isset($_POST['cadastrar'])) {
	$nome 		= $_POST['nome'];
	$endereco 	= $_POST['endereco'];
	$telefone 	= $_POST['telefone'];
	$latitude 	= $_POST['latitude'];
	$longitude 	= $_POST['longitude'];

	$sql 		= $conn->query("INSERT INTO estabelecimento 
		(nome, endereco, telefone, latitude, longitude) VALUES 
		('$nome','$endereco','$telefone','$latitude','$longitude')");

	$sucesso = true;
}
?>

	<?php if ($sucesso) { ?>

		<p>CADASTRO REALIZADO COM SUCESSO</p>

	<?php } ?>

<form method="POST"> 
Nome  do Estabelecimento: <input type="text" name="nome"/>
<br/><br/>
Endereço: <input type="text" name="endereco"/><br/><br/>
Telefone: <input type="text" name="telefone"/><br/><br/>
Latitude: <input type="text" name="latitude"/><br/><br/>
Longitude:<input type="text" name="longitude"><br/><br/>
<input type="submit" name="cadastrar" value="cadastrar"/>
</form>
</body>
</html>