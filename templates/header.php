<?php
  include_once('../config/url.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Transações</title>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
  <!-- <link href="<?php echo $base_url(); ?>css/bootstrap.min.css" rel="stylesheet">  -->
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- CSS -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>./css/styles.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div>
        <div class="navbar-nav">
          <a class="nav-link active" href="<?= $BASE_URL ?>home.php">Home</a>
          <a class="nav-link active" href="<?= $BASE_URL ?>index.html">Registros Diários</a>
          <a class="nav-link active" href="<?= $BASE_URL ?>cadastro.php">Cadastrar Transação</a>
          <a class="nav-link active" href="<?= $BASE_URL ?>relatorios/balanco.html">Relatorios
            <a class="nav-link active" href="<?= $BASE_URL ?>relatorios/balanco.html">Balanco</a>
            <a class="nav-link active" href="<?= $BASE_URL ?>relatorios/balanco.html">Balancete</a>
          </a>
          <a class="nav-link active" href="<?= $BASE_URL ?>cadastro.php">Cadastro</a>
        </div>
      </div>
    </nav>
  </header>