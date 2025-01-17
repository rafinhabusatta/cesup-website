<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    echo "Acesso inválido!";
    exit;
  } else {
    // Receber os dados do formulário
    $nome = htmlspecialchars($_POST['inputname']);
    $email = filter_var($_POST['inputemail'], FILTER_VALIDATE_EMAIL);
    $mensagem = htmlspecialchars($_POST['inputdescription']);

    // Validar os dados
    if ($email && !empty($nome) && !empty($mensagem) && strlen($mensagem) <= 500) {
      if (!preg_match("/^[a-zA-Z\s]+$/", $nome)) {
        echo "Erro: Nome inválido!";
      }
      $nome = trim($nome);
      $mensagem = trim($mensagem);
      
      $arquivo = fopen("mensagens.txt", "a");
      fwrite($arquivo, "Nome: $nome\nEmail: $email\nMensagem: $mensagem\n\n");
      fclose($arquivo);

      echo "Mensagem enviada com sucesso!";
    } else {
      echo "Erro: Dados inválidos!";
    }
  }
} else {
  echo "Acesso inválido!";
}
?>
