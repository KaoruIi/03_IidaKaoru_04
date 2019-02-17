<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Diary</title>
  <link href="style.css" rel="stylesheet">
  <style>div{padding: 5px;font-size:25px;}</style>
</head>
<body>


<!-- Head[Start] -->
<header>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここでinsert.phpにデータを送っている -->
<form method="post" action="insert.php" enctype="multipart/form-data">
  <div class="record">
   <form>

    <h1 class="test">Food Diary</h1>

     <p class="placeholder"><input type="text" name="name" placeholder="Shop Name"></p>
     <p class="placeholder"><input  class="datepicker" type="date" name="indate" id="date"></p>
     <p class="placeholder"><input type="text" name="place" placeholder="Place"></p>

     <label>
     <span class="filelabel" title="ファイルを選択">
         <img src="photo-icon.png" width="15%" alt="photo-icon">
      </span>      
     <input class="filebtn" type="file" name="upfile" onChange="imgPreView(event)">
     <div class="box-preview">
       <p>-preview-</p>
        <div id="preview"></div>
       </div>    
     </label>

     <p class="submit"><input id="submitbtn" type="submit" value="＊Upload＊"></p>

    </form>
  </div>
</form>

<nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">Date List</a></div>
    </div>
</nav>

<!-- Main[End] -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="kadai.js"></script>

</body>
</html>
