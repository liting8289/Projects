<?php class_exists('Blade') or exit; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: rgb(89, 185, 192)">
    <form action="GuestBookController.php/add" method="post">
        <h1 align="center">留言板【1110731018】</h1><hr />
        <h3>
        <a>姓名：</a><input type="text" name="name" />
        <a>性別：</a><select name="gender">
                        <option value="男">男</option>
                        <option value="女">女</option>
                    </select><br />
        <a>主旨：</a><input type="text" name="subject" /><br /><br />
        <textarea name="comments" cols="70" rows="8" placeholder="留言"></textarea><br>
        <input type="submit" value="送出留言" id="a"/>
        <input type="reset" value="清除內容" id="b">
        <input  type="button" value="查看留言" id="c" onclick="location.href='GuestBookController.php/list'">
        </h3>
    </form>

</body>
</html>