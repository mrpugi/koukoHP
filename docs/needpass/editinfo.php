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
    $no=$_POST["no"];
    $fp=fopen("../article/info{$no}.html","w");
    $articlehtml="<h2>{$_POST['namae']}</h2>";
    $textarea=$_POST["nakami"];
    $cr=array("\r\n","\r");
    $textarea=trim($textarea);
    $textarea=str_replace($cr,"\n",$textarea);
    $nakami_split=explode("\n",$textarea);
    foreach ($nakami_split as $line){
      $articlehtml.="\n<p>{$line}</p>";
    }
    if($_FILES["image"]["tmp_name"]){
      move_uploaded_file($_FILES["image"]["tmp_name"],"../images/info{$no}.jpg");
    }
    if(file_exists("../images/ingo{$no}.jpg")){
      $articlehtml.="\n<img src=\"../images/info{$no}.jpg\" alt=\"画像\">";
    }
    fputs($fp,$articlehtml);
    fclose($fp);

    $list_json=file_get_contents("../infolist.json");
    $list_decoded=json_decode($list_json,true);
    $list_decoded[$no]=$_POST["namae"];
    $output_list=json_encode($list_decoded);
    $fp=fopen("../infolist.json","w");
    fwrite($fp,$output_list);
    fclose($fp);
  ?>
  <p>更新しました。</p>
  <a href="../index.html">トップページヘ</a><br>
  <a href="index.php">部員専用ページへ</a>
</body>
</html>
