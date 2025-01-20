<?php include 'header.php';
  session_start();
  $token = bin2hex(random_bytes(32));
  $_SESSION['csrf_token'] = $token;
  include 'db_connection.php';
  $pdo = getConnection();
?>
<h1>Contato</h1>
<div class="row">
  <div class="col-12 col-lg-6 m-auto">
    <form action="form.php" method="post" id="userform">
      <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
      <!-- User data -->
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <h2>Dados do Usuário</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-9">
              <div class="mb-3">
                <label for="inputname" class="form-label">Nome completo</label>
                <input type="text" class="form-control" id="inputname" name="inputname">
              </div>
            </div>
            <div class="col-12 col-lg-3 d-lg-flex align-items-end">
              <div class="mb-3">
                <?php 
                  $table = 'funcao';
                  $columntable = 'funcao';
                  $categorySelect = 'Função';
                  $nameSelect = 'inputfunction';
                  include 'selection_db.php'; 
                ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="mb-3">
                <label label class="form-label" for="inputemail" aria-describedby="emailHelp">Email</label>
                <input type="email" class="form-control" id="inputemail" name='inputemail' aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Nós nunca informaremos seu email a ninguém.</div>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="mb-3">
                <label class="form-label" for="inputnumber">Telefone</label>
                <input type="tel" class="form-control" id="inputnumber" name='inputnumber'>
              </div>
            </div>
          </div> 
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="mb-3">
                <label class="form-label" for="inputusername">Nome de usuário</label>
                <input type="tel" class="form-control" id="inputusername" name='inputusername' aria-describedby="usernameHelp">
                <div id="usernameHelp">Entre 5 e 8 caracteres</div>
              </div>
            </div>
            <div class="col-12 col-lg-3 d-lg-flex align-items-center">
              <div class="mb-3">
                <?php 
                  $table = 'aplicacao';
                  $columntable = 'app';
                  $categorySelect = 'Aplicação/API';
                  $nameSelect = 'inputapplication';
                  include 'selection_db.php'; 
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Institution data -->
      <div class="row my-4">
        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <h2>Dados da Instituição</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-9">
              <div class="mb-3">
                <label class="form-label" for="inputuni">Instituição de Ensino (digite para pesquisar)</label>
                <input type="text" class="form-control" id="inputuni" name='inputuni'>
              </div>
            </div>
            <div class="col-12 col-lg-3 d-lg-flex align-items-end">
              <div class="mb-3">
                <?php 
                  $table = 'categoriausuario';
                  $columntable = 'categoria';
                  $categorySelect = 'Categoria';
                  $nameSelect = 'inputcategory';
                  include 'selection_db.php'; 
                ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="mb-3">
                <label class="form-label" for="inputdept">Departamento</label>
                <input type="text" class="form-control" id="inputdept" name='inputdept'>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="mb-3">
                <label class="form-label" for="inputuniaddr">Endereço institucional</label>
                <input type="text" class="form-control" id="inputuniaddr" name='inputuniaddr'>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-3">
              <div class="mb-3">
                <label class="form-label" for="inputpostal">Cód. Postal</label>
                <input type="text" class="form-control" id="inputpostal" name='inputpostal'>
              </div>
            </div>
            <div class="col-12 col-lg-3">
              <div class="mb-3">
                <label class="form-label" for="inputcity">Cidade</label>
                <input type="text" class="form-control" id="inputcity" name='inputcity'>
              </div>
            </div>
            <div class="col-12 col-lg-3">
              <div class="mb-3">
                <label class="form-label" for="inputstate">Estado</label>
                <input type="text" class="form-control" id="inputstate" name='inputstate'>
              </div>
            </div>
            <div class="col-12 col-lg-3">
              <div class="mb-3">
                <label class="form-label" for="inputcountry">País</label>
                <input type="text" class="form-control" id="inputcountry" name='inputcountry'>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Project data -->
      <div class="row my-4">
        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <h2>Dados do Projeto</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-9">
              <div class="mb-3">
                <label class="form-label" for="inputprojecttitle">Título do projeto</label>
                <input type="text" class="form-control" id="inputprojecttitle" name='inputprojecttitle'>
              </div>
            </div>
            <div class="col-12 col-lg-3 d-lg-flex align-items-end">
              <div class="mb-3">
                <?php 
                  $table = 'areaprojeto';
                  $columntable = 'area';
                  $categorySelect = 'Área';
                  $nameSelect = 'inputfield';
                  include 'selection_db.php'; 
                ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="mb-3">
                <label class="form-label" for="inputcoord">Coordenador do projeto</label>
                <input type="text" class="form-control" id="inputcoord" name='inputcoord'>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="mb-3">
                <label class="form-label" for="inputlattes">Lattes ID</label>
                <input type="text" class="form-control" id="inputlattes" name='inputlattes'>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="mb-3">
                <label class="form-label" for="inputcoordemail">Email institucional do coordenador</label>
                <input type="email" class="form-control" id="inputcoordemail" name='inputcoordemail'>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-3">
                <label class="form-label" for="inputdescription">Descrição resumida</label>
                <textarea class="form-control" id="inputdescription" name='inputdescription' rows="3"></textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-3">
                <label for="detaileddescription" class="form-label">Descrição Detalhada</label>
                <input class="form-control" type="file" id="detaileddescription" name="detaileddescription">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-9">
              <div class="mb-3">
                <label class="form-label" for="inputkeywords">Palavras-chave</label>
                <input type="text" class="form-control" id="inputkeywords" name='inputkeywords'>
              </div>
            </div>
            <div class="col-12 col-lg-3 d-lg-flex align-items-end">
              <div class="mb-3">
                <?php 
                  $table = 'financiadorprojeto';
                  $columntable = 'financiador';
                  $categorySelect = 'Financiador';
                  $nameSelect = 'inputfinancer';
                  include 'selection_db.php'; 
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submeter</button>
      <button type="submit" class="btn btn-primary">Limpar</button>
    </form>
  </div>
</div>

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