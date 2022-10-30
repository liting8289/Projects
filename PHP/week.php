<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color: rgb(255, 245, 189);">
  <div class="title">
    <a style="font-size: 40px;">輸入之數字的對等星期英文字</a>
  </div>

  <hr />
  <?php
  $num = $_REQUEST['num'];
  if ($num == 1) {
    echo "Monday";
  } elseif ($num ==2) {
    echo "Tuesday";
  } elseif ($num == 3) {
    echo "Wednesday";
  } elseif ($num == 4) {
    echo "Thursday";
  } elseif ($num == 5) {
    echo "Friday";
  } elseif ($num == 6) {
    echo "Saturday";
  } elseif ($num == 7) {
    echo "Sunday";
  }
  ?>
  <!-- <button><a href="week.html">返回</a> </button> -->
</body>

</html>
