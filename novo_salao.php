<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<title>Mapear Barbearias</title>
</head>	
<body>
<?php
$servername = "localhost";
$database = "mapear_barbearia";
$username = "root";
$password = "root";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Conectado com sucesso";
mysqli_close($conn);
?>

</body>
</html>