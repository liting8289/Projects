<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查詢結果</title>
    <style>
        tr:nth-child(odd){
            background: #6699A1;
            color: whitesmoke;
        }
        tr:first-child{
            background:#255359 ;
        }
        
        tr:nth-child(even){
            background: #A5DEE4	;
        }
    </style>
</head>
<body style="background-color:#78C2C4">
    <?php
    include_once 'PS_Pagination.php';
    include_once 'DB_connection.php';

    $sql='SELECT * FROM students';
    $perpage=5;
    $links=5;
    $pager=new PS_Pagination($dbh, $sql, $perpage, $links, "paraml=valu1&param2=value2");
    $pager-> setDebug(true);

    $stmt=$pager->paginate();
    if(!$stmt)exit($dbh->errorInfo());

    echo "<center><h1>學生成績管理系統--分頁操作[111731018：黃莉婷]</h1><hr>";
    echo "<table width=800px height=300px border='1'><h1>";
    echo "<tr><td align=center valign=middle>學號</td>";
    echo "<td align=center valign=middle>姓名</td>";
    echo "<td align=center valign=middle>國文</td>";
    echo "<td align=center valign=middle>英文</td>";
    echo "<td align=center valign=middle>數學</td></tr></h1>";
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><h2>";
        echo '<td  align=center valign=middle width="10%">'.$row["sno"]."</td>";
        echo '<td  align=center valign=middle width="10%">'.$row["name"]."</td>";
        echo '<td  align=center valign=middle width="10%">'.$row["chi"]."</td>";
        echo '<td  align=center valign=middle width="10%">'.$row["eng"]."</td>";
        echo '<td  align=center valign=middle width="10%">'.$row["math"]."</td>";
        echo "</tr>";
    }
    echo "</h2></table><br>";
    echo $pager->renderFullNav();
?>
</body>
</html>
