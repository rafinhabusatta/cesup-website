<?php include 'header.php';
  session_start();
  $token = bin2hex(random_bytes(32));
  $_SESSION['csrf_token'] = $token;
?>
<h1>Contato</h1>
<form action="form.php" method="post" id="userform">
  <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
  <div class="mb-3">
    <label for="inputname" class="form-label">Nome completo</label>
    <input type="text" class="form-control" id="inputname" name="inputname">
  </div>
  <div class="mb-3">
    <select class="form-select" aria-label="Função">
      <option selected>Função</option>
      <option value="1">postdoc</option>
      <option value="2">Doutorando</option>
      <option value="3">Mestrando</option>
      <option value="4">Graduando</option>
      <option value="5">Pesquisador</option>
      <option value="6">Professor</option>
      <option value="7">Técnico</option>
      <option value="8">Outro</option>
  </select>
  </div>
  <div class="mb-3">
    <label label class="form-label" for="inputemail" aria-describedby="emailHelp">Email</label>
    <input type="email" class="form-control" id="inputemail" name='inputemail' aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nós nunca informaremos seu email a ninguém.</div>
  </div>
  <div class="mb-3">
    <label class="form-label" for="inputnumber">Telefone</label>
    <input type="tel" class="form-control" id="inputnumber" name='inputnumber'>
  </div>
  <div class="mb-3">
    <label class="form-label" for="inputusername">nome de usuário</label>
    <input type="tel" class="form-control" id="inputusername" name='inputusername' aria-describedby="usernameHelp">
    <div id="usernameHelp">Entre 5 e 8 caracteres</div>
  </div>
  <div class="mb-3">
    <label class="form-label" for="inputuni">Instituição de Ensino (digite para pesquisar)</label>
    <input type="text" class="form-control" id="inputuni" name='inputuni'>
  </div>
  <div class="mb-3">
    <select class="form-select" aria-label="Categoria">
      <option selected>Categoria</option>
      <option value="1">postdoc</option>
      <option value="2">Doutorando</option>
      <option value="3">Mestrando</option>
      <option value="4">Graduando</option>
      <option value="5">Pesquisador</option>
      <option value="6">Professor</option>
      <option value="7">Técnico</option>
      <option value="8">Outro</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label" for="inputdept">Departamento</label>
    <input type="text" class="form-control" id="inputdept" name='inputdept'>
  </div>
  <div class="mb-3">
    <label class="form-label" for="inputuniaddr">Endereço institucional</label>
    <input type="text" class="form-control" id="inputuniaddr" name='inputuniaddr'>
  </div>
  <div class="mb-3">
    <label class="form-label" for="inputpostal">Cód. Postal</label>
    <input type="text" class="form-control" id="inputpostal" name='inputpostal'>
  </div>
  <div class="mb-3">
    <label class="form-label" for="inputcity">Cidade</label>
    <input type="text" class="form-control" id="inputcity" name='inputcity'>
  </div>
  <div class="mb-3">
    <label class="form-label" for="inputstate">Estado</label>
    <input type="text" class="form-control" id="inputstate" name='inputstate'>
  </div>
  <div class="mb-3">
    <label class="form-label" for="inputcountry">País</label>
    <input type="text" class="form-control" id="inputcountry" name='inputcountry'>
  </div>
  <div class="mb-3">
    <label class="form-label" for="inputprojecttitle">Título do projeto</label>
    <input type="text" class="form-control" id="inputprojecttitle" name='inputprojecttitle'>
  </div>

  <div class="mb-3">
    <label class="form-label" for="inputcoord">Coordenador do projeto</label>
    <input type="text" class="form-control" id="inputcoord" name='inputcoord'>
  </div>
  <div class="mb-3">
    <label class="form-label" for="inputlattes">Lattes ID</label>
    <input type="text" class="form-control" id="inputlattes" name='inputlattes'>
  </div>
  <div class="mb-3">
    <label class="form-label" for="inputcoordemail">Email institucional do coordenador</label>
    <input type="email" class="form-control" id="inputcoordemail" name='inputcoordemail'>
  </div>
  <div class="mb-3">
    <label class="form-label" for="inputdescription">Descrição resumida</label>
    <input type="text" class="form-control" id="inputdescription" name='inputdescription'>
  </div>
  <div class="mb-3">
    <label class="form-label" for="inputcountry">Palavras-chave</label>
    <input type="text" class="form-control" id="inputcountry" name='inputcountry'>
  </div>
  <div class="mb-3">
    <label class="form-label" for="inputfinance">Financiador</label>
    <input type="text" class="form-control" id="inputfinance" name='inputfinance'>
  </div>
  <button type="submit" class="btn btn-primary">Submeter</button>
  <button type="submit" class="btn btn-primary">Limpar</button>
</form>

<div class="modal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true" id="messageModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Aviso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="messageModalBody">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
