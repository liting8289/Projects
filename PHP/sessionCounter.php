<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color: #C1CADA;">
  <h1>試寫一程式設計具session 功能的網站訪客計數器。</h1>
  <hr />
  <img src="upload/images.jpg">
  <br />
  <?php
  session_start();
  $n = file_get_contents("count.txt");
  if (!isset($_SESSION['visited'])) {
    $_SESSION['visited'] = true;
    $n++;
    file_put_contents("count.txt", $n);
    echo "您是第" . $n . "位訪客";
  } else {
    echo  "您是第" . $n . "位訪客";
  }
  ?>
</body>

</html>