<?php
header('Content-Type: application/json. charset=UTF-8');
header('Acess-Control-Allow-Origin *');
header('Acess-Control-Allow-Methods: POST, PUT');
header('Acess-Control-Allow-Originheaders: Content-Type');

//conexão com o banco de dados
$host = "localhost";
$user = "root";
$password = "aluno";
$db = "DADOS_FROM_TEST";
$conn = new mysqli($host, $user, $password, $db);
if($conn -> connect_error){
    http_response_code(500);
    echo json_encode(["erro" =>"Falha na Conexão com o banco de dados"]),
    JSON_UNESCAPE_UNICODE;
    exit();

}
$method = $_SERVER["REQUEST_METHOD"];
if($method == "POST"){
    
}
?>