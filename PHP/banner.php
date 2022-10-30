<?php
mt_srand(time());
$pic1 = mt_rand(1, 6);
$pic2 = mt_rand(1, 6);

$img1 = $pic1 . ".jpg";
$img2 = $pic2 . ".jpg";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body class="bg">
  <h1>動態網頁具有廣告Bar，每次瀏覽時會隨機挑選兩張不一樣的廣告圖片。</h1>
  <hr />
  <table>
    <td>
      <img src="upload/<?= $img1 ?>">
    </td>
    <td>
      <img src="upload/<?= $img2 ?>">
    </td>
  </table>
</body>

</html>
<style>
  .bg {
    background-color: #cdff90;
    color: darkblue;
  }
</style>
