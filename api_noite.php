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
    $data = json_decode(file_get_contents("php://input"),
    true);
    if (isset(
        $data ["nome"],
        $data ["email"],
        $data ["senha"],
        $data ["telefone"],
        $data ["endereço"],
        $data_nascimento["data_nascimento"],
    )){ $nome = $data ["nome"];
        $email = $data ["email"];
        $senha = $data ["senha"];
        $telefone = $data ["telefone"];
        $endereco = $data ["endereço"];
        $data_nascimento = $data_nascimento["data_nascimento"];
    }else{
        http_response_code(400);
        echo json_encode(["error"=>"Todos os campos são obrigatórios"], JSON_UNESCAPED_UNICODE);
    };
}
$sql = "INSERT INTO API_USUARIOS(nome, email, senha, telefone, endereco, estado, data_nascimento) VALUES ('$nome', '$email', '$senha','  $telefone', '$endereco', '$data_nascimento')" ;
if ($conn->query($sql){
    $id = $conn -> insert_id;
    $result = $conn -> query ("select * from API_USUARIOS where id = $id ");
    $cliente = $result->fetch_assoc ();
echo json_encode(["mensagem" =>"CLIENTE CADASTRADO COM SUCESSO","cliente"=> $cliente]) JSON_UNESCAPED_UNICODE
}else{
    http_response_code(400);
    echo json_encode(["error"=>"cliente já existe"],
    JSON_UNESCAPED_UNICODE);
})
?>