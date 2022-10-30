<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    <?php include 'ex03.css'; ?>
  </style>
  <title>Document</title>
</head>

<body>
  <div class="wrape">
    <div class="title">
      <h1>
        確認頁
      </h1>
      <hr />
    </div>

    <div class="infoContainer">
      <div class="infoData">
      <?php
      $studentId = $_REQUEST['studentId'];
      $name = $_REQUEST['name'];
      $gender = $_REQUEST['gender'];
      $phoneNumber = $_REQUEST['phoneNumber'];
      $sport = $_REQUEST['sport'];
      $mail = $_REQUEST['mail'];


      echo "學號 :" . $studentId . "<br />";
      echo "姓名:" . $name . "<br />";
      echo "性別:" . $gender . "<br />";
      echo "手機:" . $phoneNumber . "<br />";
      echo "擅長運動:" .
        $myallsport = implode(",", $sport) . "<br />";
      echo "郵件:" . $mail . "<br />";
      ?>

      </div>
    </div>

    </div>
</body>

</html>
