<?php
  require('functions.php');
  
  function createSelect($data) {
    $layout = "";

    foreach($data as $item) {
      $fullName = "{$item["name"]} {$item["surname"]}";
      $layout .= "
        <option value='{$item["id"]}'>$fullName</option>
      ";
    }

    return "
      <select name='id'>
        $layout
      </select>
    ";
  }

  $teacher = getData($teachers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="functions" method="post">
    <?php echo createSelect($teachers)?>
    <button>Отправить</button>
  </form>

  <?php echo getPersonData($teacher) ?>
</body>
</html>