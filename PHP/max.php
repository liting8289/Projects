<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color: rgb(224, 237, 252);">
  <div class="title">
    <a style="font-size: 40px;">輸入兩個整數 a、b﹐並印出較大者</a>
  </div>

  <hr />
  <?php
  $num1 = $_REQUEST['num1'];
  $num2 = $_REQUEST['num2'];
  if ($num1 > $num2) {
    echo $num1;
  } elseif ($num1 < $num2) {
    echo $num2;
  }

  ?>
</body>

</html>
