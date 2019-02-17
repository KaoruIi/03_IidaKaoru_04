<?php
//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM kadai_table ORDER BY indate DESC");
$status = $stmt->execute();//降順


//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){

    $enc_img = base64_encode($result["upfile"]);
		try {
			//ここの@マークはエラーを出さないおまじないみたいなものなので一旦気にしないでください！
			$imginfo = @getimagesize('data:application/octet-stream;base64,' . $enc_img);
		} catch(Exception $e) {
			$imginfo = false;
		}

    $sql = "SELECT * FROM `kadai_table` ORDER BY `id` DESC";

    $view .= '<div class="result">';

    $view .= '<div class="box-shop">';
    $view .= '<span class="box-title">'.$result["indate"].'</span>';
    $view .= '<p class="shop-title">';
    $view .= '<span id="box-space">'.$result["name"].'</span>'; 
    $view .= $result["place"];
    $view .= '</p>';
    $view .= "<p>";
    if($imginfo){
      $view .= '<img id="food-img" src="data:' . $imginfo['mime'] . ';base64,'.$enc_img.'">';
		}
    $view .= "</p>";
    $view .= "</div>";
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Food Diary</title>
<link href="style.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Top</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] $view-->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="kadai.js"></script>

</body>
</html>
