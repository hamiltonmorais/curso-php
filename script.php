<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
  echo 'O nome não pode ser vazio!';
  return;
}

if (strlen($nome) < 4) {
  echo 'O nome deve conter mais que 3 caracteres.';
  return;
}

if (strlen($nome) > 40) {
  echo ('O nome é muito extenso');
  return;
}

if (empty($idade)) {
  echo 'A idade não pode ser vazia!';
  return;
}

if (!is_numeric($idade)) {
  echo ('Informe um número para a idade');
  return;
}


if ($idade >= 6 && $idade <= 12) {

  for ($i = 0; $i < count($categorias); $i++) {
    if ($categorias[$i] == 'Infantil') {
      echo 'O nadador ' . $nome . ' compete na categoria Infantil';
    }
  }
} else if ($idade > 12 && $idade < 18) {
  for ($i = 0; $i < count($categorias); $i++) {
    if ($categorias[$i] == 'Adolescente') {
      echo 'O nadador ' . $nome . ' compete na categoria Adolescente';
    }
  }
} else if ($idade >= 18  && $idade < 60) {
  for ($i = 0; $i < count($categorias); $i++) {
    if ($categorias[$i] == 'Adulto') {
      echo 'O nadador ' . $nome . ' compete na categoria Adulto';
    }
  }
} else {
  if ($categorias[$i] == 'Idoso') {
    echo 'O nadador ' . $nome . ' compete na categoria Idoso';
  }
}
