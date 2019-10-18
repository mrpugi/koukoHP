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
    $list_json=file_get_contents("../titlelist.json");
    $list_decoded=json_decode($list_json,true);
    unset($list_decoded[$_POST["delno"]]);
    $output_list=json_encode($list_decoded);
    $fp=fopen("../titlelist.json","w");
    fwrite($fp,$output_list);
    fclose($fp);
  ?>
  <p>削除しました。</p>
  <a href="../index.html">トップページヘ</a><br>
  <a href="index.php">部員専用ページへ</a>
</body>
</html>
