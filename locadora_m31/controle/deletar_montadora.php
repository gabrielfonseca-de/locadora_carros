<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">
</head>
<body>
<h1>Exclusão de montadora</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $cod_montadora = $_POST['cmb_montadora'];
    $sql = "UPDATE carro set montadora_carro=12 WHERE montadora_carro=$cod_montadora";
    $conn->query($sql);
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
try{
    $sql = "DELETE FROM montadora WHERE cod_montadora='$cod_montadora'";
    $conn->query($sql);
    echo "<h4>montadora excluida com sucesso</h4>
    <h3><a href='/locadora_m31/index2.html'>Voltar</a></h3>";
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>
</fieldset>
</div>
</div>
</body>
</html>