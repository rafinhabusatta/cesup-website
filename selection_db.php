<select class="form-select" aria-label="<?php echo $categorySelect ?>" id="<?php echo $nameSelect ?>" name="<?php echo $nameSelect ?>">
  <option selected><?php echo $categorySelect ?></option>
  <?php
    $query = $pdo->query("SELECT * FROM $table");
    $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($resultados as $linha) {
  ?>
      <option value="<?php echo $linha[$columntable] ?>">
        <?php
          echo $linha[$columntable];
        ?>
      </option>
    <?php
    }
      ?>
</select>