<?php

require('dump.php');

function getData($data) {
  if (isset($_POST["id"])) {
    return $data[$_POST["id"]];
  }

  return null; 
}

function getPersonData($data) {
  $name = isset($data["name"]) 
    ? $data["name"] 
    : 'Имя отсутствует';

  $surname = isset($data["surname"]) 
    ? $data["surname"] 
    : 'Фамилия отсутствует';

  $category = isset($data["catigory"]) 
    ? $data["catigory"] 
    : 'Категория отсутствует';

  return "
    <h1>$name $surname</h1>
    <h2>$category</h2>
  ";
}

