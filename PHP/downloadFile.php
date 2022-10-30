<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>檔案清單</title>
</head>

<body style="background-color: #73575c">
  <h1 style="color:aliceblue">檔案清單</h1>
  <hr />
  <h3 style="color:aliceblue">
    <?php
    $dir = "upload";
    $_FILES = scandir($dir);
    array_shift($_FILES);
    array_shift($_FILES);
    foreach ($_FILES as $fn) {
      echo ' <ul><li style="color:aliceblue"> <a  style="color:aliceblue" href = "upload/ ' . $fn . '"download>' . $fn . '</a> </li></ul>';
    }
    ?>
  </h3>
</body>

</html>