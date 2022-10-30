<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color: rgb(236, 255, 214)">
  <form action="gcd.php" method="post">
    <div>
      <div class="title">
        <a style="font-size: 40px;">輸入兩個整數 a、b 印出最大公約數與最小公倍數。</a>
      </div>

      <hr />
      <?php
      $num1 = $_REQUEST['num1'];
      $num2 = $_REQUEST['num2'];

      if ($num1 > $num2) {
        $max = $num1;
        $min = $num2;
      } elseif ($num1 < $num2) {
        $max = $num2;
        $min = $num1;
      }
      for ($i = 1; $i <= $max; $i++) {
        if ($max % $i == 0 && $min % $i == 0) {
          $gcd = $i;
        }
      }
      

      $lcm = $max * $min / $gcd;

      echo "最大公因數:" . $gcd . "<br />". "最小公倍數:" . $lcm;
      ?>
</body>

</html>
