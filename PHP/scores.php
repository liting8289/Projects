<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color: rgb(124, 225, 242)">
  <?php
  include "DB_stu_Connection.php";
  if ($_POST['sID'] != "") {
    $sID = $_REQUEST['sID'];
    $sql = "SELECT * from students Where SID='" . $sID . "'";
  }
  $stmt = $dbh->query($sql);

  echo "<h1>查詢結果</h1> <hr />";
  echo "<table border=1>";
  $count = $dbh->exec($sql);
  while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>學號</td>";
    echo "<td>姓名</td>";
    echo "<td>國文</td>";
    echo "<td>英文</td>";
    echo "<td>數學</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>" . $row['SID'] . "</td>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Chinese'] . "</td>";
    echo "<td>" . $row['English'] . "</td>";
    echo "<td>" . $row['Math'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  ?>

</body>

</html>