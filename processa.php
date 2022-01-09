<?php 

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
$atuacao = filter_input(INPUT_POST, 'atuacao');

$skills = isset($_POST['skills']) ? implode(' ', $_POST['skills']) : null ;


$senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));


$respostas_candidato = "INSERT INTO dados_form (nome, email, comentario, genero, atuacao, skills, senha) VALUES ('$nome', '$email', '$comentario', '$genero', '$atuacao', '$skills', '$senha')";
$resultado_usuario = mysqli_query($conn, $respostas_candidato);


if(mysqli_insert_id($conn)) {
    echo  'Informações enviadas com sucesso!';
} else {
    echo  mysqli_error($conn);
}

?>