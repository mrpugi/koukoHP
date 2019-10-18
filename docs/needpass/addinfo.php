<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>特設ページ編集ページ</h1>
  <h1>更新者は必ず一読すること：<a href="instructions.html">こちらを参照</a></h1>
  <h2>特設ページ投稿</h2>
  <form action="postinfo.php" method="post" enctype="multipart/form-data">
    <p>題名<input type="text" name="namae"></p>
    <p>画像<input type="file" name="image" accept="image/jpeg" capture="camera"></p>
    <p>内容</p>
    <textarea name="nakami" id="" cols="30" rows="10"></textarea>
    <input type="submit">
  </form>
  <?php
  $list_json=file_get_contents("../infolist.json");
  $list_decoded=json_decode($list_json,true);
  ?>
  <h2>特設ページ投稿内容の編集</h2>
  <form action="changeinfo.php" method="post" enctype="multipart/form-data">
    <select name="editno">
      <?php
        foreach ($list_decoded as $key => $value){
          echo "<option value=\"{$key}\">{$value}</option>";
        }
      ?>
    </select>
    <input type="submit">
  </form>
  <h2>特設ページ投稿の削除</h2>
  <form action="consentinfo.php" method="post" enctype="multipart/form-data">
    <select name="delno">
      <?php
        foreach ($list_decoded as $key => $value){
          echo "<option value=\"{$key}\">{$value}</option>";
        }
      ?>
    </select>
    <input type="submit">
  </form>
  <h2>活動報告更新は<a href="index.php">こちら</a></h2>
  <a href="../index.html">トップページヘ</a><br>
  <p>広告回避</p>
  <p>広告回避</p>
  <p>広告回避</p>
</body>
</html>
