<?php 
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
$atuacao = filter_input(INPUT_POST, 'atuacao');
$skills = isset($_POST['skills']) ? implode(' ', $_POST['skills']) : null ;
$senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
$numerotel = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

function formataTelefone($numerotel){
    if(strlen($numerotel) == 10){
        $telefone = substr_replace($numerotel, '(', 0, 0);
        $telefone = substr_replace($telefone, '9', 3, 0);
        $telefone = substr_replace($telefone, ')', 3, 0);
    }else{
        $telefone = substr_replace($numerotel, '(', 0, 0);
        $telefone = substr_replace($telefone, ')', 3, 0);
    }
    return $telefone;
}

formataTelefone($numerotel);

$respostas_candidato = "INSERT INTO dados_form (nome, email, comentario, genero, atuacao, skills, numerotel, senha, created) VALUES ('$nome', '$email', '$comentario', '$genero', '$atuacao', '$skills', '$numerotel', '$senha', NOW())";
$resultado_usuario = mysqli_query($conn, $respostas_candidato);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = '<br /><div class="alert alert-success" role="alert">
    Cadastro realizado com sucesso!
  </div>';
    header("Location:index.php");
} else {
    $_SESSION['msg'] = '<br /><div class="alert alert-danger" role="alert">
    Ocorreu um erro!
  </div>';
}

?>