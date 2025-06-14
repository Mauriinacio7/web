<?php
$localhost = "localhost"; // ou 127.0.0.1
$username = "u854526661_mauricio"; // como está no painel da Hostinger
$password = "Bicaonomero37"; // a senha que você criou para o banco
$database = "u854526661_ecopontos"; // nome do banco

$conn = new mysqli($localhost, $username, $password, $database);

if ($conn->connect_error) {
    echo "Falha na conexão: " . $conn->connect_error;
}
?>

















<?php /*  XAMP ARQUIVO ABAIXO 
$localhost = "localhost";
$username = "root";
$password = "";
$database = "banco2";

$conn = new mysqli($localhost, $username, $password, $database);
if($conn->connect_error){
    echo "falha na conexao";
}

?>