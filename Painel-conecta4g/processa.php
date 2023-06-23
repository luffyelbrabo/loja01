<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));



#Verifica se tem um email para pesquisa
$result = $conn->query("SELECT COUNT(*) FROM usuarios WHERE email = '{$email}'");
$result = $conn->query("SELECT COUNT(*) FROM usuarios WHERE login = '{$login}'");
$row = $result->fetch_row();
    if ($row[0] > 0) {
    $_SESSION['erroemail']="<font color='#FF0000'><h5>Erro EMAIL ja exites.</font></h5><br>";
    $_SESSION['errouser']="<font color='#FF0000'><h5>Erro USUARIO ja exites.</font></h5>";
    header("Location: index.php");
    
#Fazer a Conexão ao banco de dados
} else {
    $result_usuario = "INSERT INTO usuarios (nome, login, email, senha) VALUES ('$nome', '$login', '$email', '$senha')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $_SESSION['usersuce']="<font color='#FF0000'><h5>Usuario cadastrado com sucesso!.</font></h5><br>";
    header("Location: index.php");
}
