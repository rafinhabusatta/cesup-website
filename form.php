<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    echo "Acesso inválido!";
    exit;
  } else {
    // Receber os dados do formulário
    $nome = htmlspecialchars($_POST['inputname']);
    $funcao = $_POST['inputfuncao'];
    $user_email = filter_var($_POST['inputemail'], FILTER_VALIDATE_EMAIL);
    $phone = $_POST['inputnumber'];
    $username = $_POST['inputusername'];
    $institution = $_POST['inputuni'];
    $category = $_POST['inputcategory'];
    $department = $_POST['inputdept'];
    $address_uni = $_POST['inputuniaddr'];
    $zip_code = $_POST['inputpostal'];
    $city = $_POST['inputcity'];
    $state = $_POST['inputstate'];
    $country = $_POST['inputcountry'];
    $project_title = $_POST['inputprojecttitle'];
    $project_field = $_POST['inputfield'];
    $project_coordinator = $_POST['inputcoord']; 
    $lattes = $_POST['inputlattes'];
    $coordinator_email = filter_var($_POST['inputcoordemail'], FILTER_VALIDATE_EMAIL);
    $project_description = htmlspecialchars($_POST['inputdescription']);
    $project_file = $_FILES['detaileddescription'];
    $key_words = $_POST['inputkeywords'];
    $project_financer = $_POST['inputfinancer'];

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
