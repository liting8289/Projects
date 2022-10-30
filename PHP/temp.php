<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color: rgb(224, 237, 252)">
  <div>
    <div class=" title">
      <a style="font-size: 40px;">攝氏溫度轉換為華氏溫度</a>
    </div>

    <hr />
    <?php
    $tempC = $_REQUEST['tempC'];
    $tempF = ($tempC / 5) * 9 + 32;
    echo $tempF;
    ?>
</body>

</html>
