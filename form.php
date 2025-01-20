<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    echo "Acesso inválido!";
    exit;
  } else {
    // Receber os dados do formulário
    $name = htmlspecialchars($_POST['inputname']);
    $user_function = $_POST['inputfunction'];
    $user_email = filter_var($_POST['inputemail'], FILTER_VALIDATE_EMAIL);
    $application = $_POST['inputapplication'];
    $user_phone = $_POST['inputnumber'];
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
    if ($user_email && !empty($name) && !empty($project_description) && strlen($project_description) <= 500) {
      if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        echo "Erro: Nome inválido!";
      }
      $name = trim($name);
      $project_description = trim($project_description);
      
      $arquivo = fopen("mensagens.txt", "a");
      fwrite($arquivo, "Nome: $name\nFunção: $user_function\n Email: $user_email\nAplicação: $application\nTelefone: $user_phone\nUsername:$username\nInstituição: $institution\nCategoria: $category\nDepartamento: $department\nEndereço Universidade: $address_uni\nCód. postal: $zip_code\nCidade: $city\nEstado: $state\nPaís: $country\nTítulo projeto: $project_title\nÁrea do projeto: $project_field\nCoordenador do projeto: $project_coordinator\nLattes id: $lattes\n Email do coodernador: $coordinator_email\nDescrição resumida: $project_description\nArquivo: $project_file\nPalavras-chave: $key_words\nFinanciador: $project_financer \n\n");
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
