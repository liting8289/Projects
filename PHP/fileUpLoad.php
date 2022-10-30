<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color: rgb(72, 64, 164); color: aliceblue;">
  <h1>設計檔案上傳(upload a file)的網頁和程式。</h1>
  <hr />
  <?php
  // $upload=$_REQUEST['upload'];
  if ($_FILES['upload']['error'] === UPLOAD_ERR_OK) {
    echo '檔案名稱: ' . $_FILES['upload']['name'] . '<br/>';
    echo '檔案類型: ' . $_FILES['upload']['type'] . '<br/>';
    echo '檔案大小: ' . ($_FILES['upload']['size'] / 1024) . ' KB<br/>';
    // 暫存檔的位置記錄
    echo '暫存名稱: ' . $_FILES['upload']['tmp_name'] . '<br/>';

    # 檢查檔案是否已經存在
    if (file_exists('upload/' . $_FILES['upload']['name'])) {
      echo '檔案已存在。<br/>';
    } else {
      $file = $_FILES['upload']['tmp_name'];
      $dest = 'upload/' . $_FILES['upload']['name'];

      # 將檔案移至指定位置
      move_uploaded_file($file, $dest);
    }
  } else {
    echo '錯誤代碼：' . $_FILES['upload']['error'] . '<br/>';
  }
  ?>
</body>

</html>
