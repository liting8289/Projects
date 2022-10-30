<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color: rgb(257, 255, 214)">
  <?php
  include "DB_connection.php";
  $sql = "select *from SalaryDB";

  $stmt = $dbh->query($sql);
  echo "<h1>寫一Salary.php程式,讀取SalaryDB資料表的內容</h1> <hr />";

  echo "<table border=1>";
  while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['salary'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  $dbh = null;
  ?>
  <h1>CRUD 操作表 [1110731018]</h1>
  <a href=" insert.php">新增</a>
  <a href="update.php">修改</a>
  <a href="delete.php">刪除</a>

</body>

</html>