<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    $list_json=file_get_contents("../infolist.json");
    $list_decoded=json_decode($list_json,true);
    echo $list_decoded[$_POST["delno"]];
    echo "を削除してよろしいですか？";
  ?>
  <form action="deleteinfo.php" method="post">
    <input type="hidden" name="delno" value=<?php echo "\"{$_POST["delno"]}\""?>>
    <input type="submit">
  </form>
</body>
</html>
