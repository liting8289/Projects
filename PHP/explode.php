<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color: rgb(255, 241, 220);">
  <h1>讀取若干個數值，將資料依反順序分行列出。</h1>
  <hr />
  <?php
  $string = $_REQUEST['string'];
  $array = explode(",", $string);
  for ($i = count($array)-1; $i >=0 ; $i--) {
    echo $array[$i] . "<br />";
  }
  ?>
</body>

</html>
