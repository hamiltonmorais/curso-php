<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

//print_r($categorias);

$nome = 'Eduardo';
$idade = 19;

//var_dump($nome);
//var_dump($idade);

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
