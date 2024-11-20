<?php

require('dump.php');

function getData($teachers) {
  if (isset($_POST["id"])) {
    return $teachers[$_POST["id"]];
  }

  return null; 
}

function getPersonData($teacher) {
  $name = isset($teacher["name"]) 
    ? $teacher["name"] 
    : 'Имя отсутствует';

  $surname = isset($teacher["surname"]) 
    ? $teacher["surname"] 
    : 'Фамилия отсутствует';

  $category = isset($teacher["catigory"]) 
    ? $teacher["catigory"] 
    : 'Категория отсутствует';

  return "
    <h1>$name $surname</h1>
    <h2>$category</h2>
  ";
}

