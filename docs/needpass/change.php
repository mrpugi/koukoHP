<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="edit.php" method="post" enctype="multipart/form-data">
    <p>題名:<?php
      $list_json=file_get_contents("../titlelist.json");
      $list_decoded=json_decode($list_json,true);
      $no=$_POST["editno"];
      $title=$list_decoded[$no];
      echo "<input type=\"text\" name=\"namae\" value=\"{$title}\">";
    ?></p>
    <p>画像<input type="file" name="image"></p>
    <textarea name="nakami" cols="30" rows="10"><?php
      $nakami=file("../article/{$no}.html");
      $nakami_slice=array_slice($nakami,1,-1);
      foreach ($nakami_slice as $line){
        echo str_replace(array("<p>","</p>"),"",$line);
      }
    ?></textarea>
    <input type="hidden" name="no" value=<?php echo "\"{$no}\""?>>
    <input type="submit">
  </form>
</body>
</html>
