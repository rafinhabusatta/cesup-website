<?php

function getConnection() {
  $host = 'localhost';
  $dbname = 'postgres';
  $user = 'postgres';
  $password = 'admin';

  try {
      $pdo = new PDO("pgsql:host=$host;port=5433;dbname=$dbname", $user, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
  } catch (PDOException $e) {
      die("Erro ao conectar ao banco de dados: " . $e->getMessage());
  }
}
?>
