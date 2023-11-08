<?php
include('./config/dbconfig.php');

function getAll($table)
{
  global $con;
  $getgen_query = "SELECT * FROM $table";
  $getgen_query_run = mysqli_query($con, $getgen_query);
  return $getgen_query_run;
}

function getByID($table, $id)
{
  global $con;
  $query = "SELECT * FROM $table WHERE id='$id'";
  $query_run = mysqli_query($con, $query);
  return $query_run;
}

function getAllDisponiveis($table)
{
  global $con;
  $getgen_query = "SELECT * FROM $table";
  $getgen_query_run = mysqli_query($con, $getgen_query);
  return $getgen_query_run;
}

function redirect($url, $message)
{
  $_SESSION['message'] = $message;
  header('Location: ' . $url);
  exit();
}
