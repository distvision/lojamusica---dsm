<?php

$host = "localhost";
$username = "fred999";
$password = "0999";
$database = "lojademusica";

// coneccao a base de dados
$con = mysqli_connect($host, $username, $password, $database);

// verificar conneccao
if (!$con) {
  die("Conecção falhou: " . mysqli_connect_error());
} else {
  echo "Conectado com sucesso";
}
