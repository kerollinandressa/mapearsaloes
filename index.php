<?php require 'cabecalho.php'; ?>

<?php
		$sql = mysql_query("SELECT * FROM estabelecimento order by id DESC limit 10");
?>	
</form>
</body>
</html>