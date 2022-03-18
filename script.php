<?php

session_start();

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
  $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio! Por favor, preencha novamente.';
  header('location:index.php');
  return;
} else if (strlen($nome) < 4) {
  $_SESSION['mensagem-de-erro'] = 'Nome não pode ser menos que 4 caracteres';
  header('location:index.php');
  return;
} else if (strlen($nome) > 40) {
  $_SESSION['mensagem-de-erro'] = 'Nome com muitos caracteres.';
  header('location:index.php');
  return;
} else if (empty($idade)) {
  $_SESSION['mensagem-de-erro'] = 'Idade não pode ser vazio! Por favor preencha novamente.';
  header('location:index.php');
  return;
} else if (!is_numeric($idade)) {
  $_SESSION['mensagem-de-erro'] = 'Informe um número para idade.';
  header('location:index.php');
  return;
}

for ($i = 0; $i < count($categorias); $i++) {
  if ($idade >= 6 && $idade <= 12) {
    if ($categorias[$i] == 'Infantil') {
      $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . ' compete na categoria Infantil';
      header('location:index.php');
      return;
    }
  } else if ($idade > 12 && $idade < 18) {
    if ($categorias[$i] == 'Adolescente') {
      $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . ' compete na categoria Adolescente';
      header('location:index.php');
      return;
    }
  } else if ($idade >= 18  && $idade < 60) {
    if ($categorias[$i] == 'Adulto') {
      $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . ' compete na categoria Adulto';
      header('location:index.php');
      return;
    }
  } else if ($idade >= 60) {
    if ($categorias[$i] == 'Idoso') {
      $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . ' compete na categoria Idoso';;
      header('location:index.php');
      return;
    }
  }
}
