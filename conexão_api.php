<?php
//conexão com o banco de dados
$host = "localhost";
$user = "root"; 
$password = "aluno";
$db = "dados_from_test";
$conn = new mysqli($host, $user, $password, $db);
if($conn -> connect_error){
    http_response_code(500);
    echo json_encode(["erro" =>"Falha na Conexão com o banco de dados"]),    JSON_UNESCAPE_UNICODE;
    exit();}
?>