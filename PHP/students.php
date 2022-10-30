<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>0518</title>
    <!-- <link rel="stylesheet" href="phpstyle.css"> -->
</head>

<body style="background-color: rgb(124, 225, 242)">
    <h1>查詢結果</h1>
    <hr>
    <h1>
        <?php
        $SID = $_REQUEST['SID'];
        include "DB_stu_Connection.php";
        $sql = "select * from students";
        $stmt = $dbh->query($sql);
        $i = 0;

        while ($row = $stmt->fetch()) {
            if ($row['SID'] == $SID) {
                $i = $i + 1;
                $Name = $row['Name'];
                $Chinese = $row['Chinese'];
                $English = $row['English'];
                $Math = $row['Math'];
                break;
            }
        }
        if ($i == 0) {
            echo "查無此人";
        } elseif ($i != 0) {
            echo "<table border=1>";
            echo "<tr><td>學號</td><td>姓名</td><td>國文</td><td>英文</td><td>數學</td></tr>";
            echo "<tr>";
            echo "<td>" . $SID . "</td>";
            echo "<td>" . $Name . "</td>";
            echo "<td>" . $Chinese . "</td>";
            echo "<td>" . $English . "</td>";
            echo "<td>" . $Math . "</td>";
            echo "</tr>";
            echo "</table>";
        }
        $dbh = null;
        ?>
    </h1>
</body>

</html>