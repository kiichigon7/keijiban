<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<img src="4eachblog_logo.jpg">
    
<header>
 <ul>
    <li>プロフィール</li>
    <li>4eachについて</li>
    <li>登録フォーム</li>
    <li>問合わせ</li>
    <li>その他</li>
 </ul>
</header>

<main>
<h1 class="a">プログラミングに役立つ掲示板</h1>
<div class="left">
     

 <form method="post" action="insert.php">
　<h3>入力フォーム</h3>
  <div>
     <label>ハンドルネーム</label>
     <br>
     <input type="text" class="text" size="35" name="handlename">
  </div>
     
  <div>
     <label>タイトル</label>
     <br>
     <input type="text" class="text" size="35" name="title">
  </div>

  <div>
     <label>コメント</label>
     <br>
     <textarea cols="35" rows="7" name="comments">
      </textarea>
  </div>
     
  <div>
     <input type="submit" class="submit" value="送信する">
  </div>

</form>

   

  <?php
    mb_internal_encoding("utf8");
    $pdo= new PDO("mysql:dbname=lesson01_nk;hostlocal;","root","mysql");
    $stmt= $pdo->query("select * from 4each_keijiban");
      
  ?>
 
 <?php
    
   while($row= $stmt->fetch()){
       echo"<div class='kiji'>";
       echo"<h3>".$row['title']."</h3>";
       echo"<div class='comments'>";
       echo $row['comments'];
       echo"<div class='handlename'>posted by".$row['handlename']."</div>";
       echo"</div>";
       echo"</div>";
   }
   
 ?>
 </div>   

<div class="right">
 <h3><strong>人気の記事</strong></h3>
 <ul>
  <li>PHP オススメ本</li>
  <li>PHP MyAdminの使い方</li>
  <li>今人気のエディタTop5</li>
  <li>HTMLの基礎</li></ul>
 <h3><strong>オススメリンク</strong></h3>
 <ul>
  <li>インターノウス株式会社</li>
  <li>XAMPPのダウンロード</li>
  <li>Eclipseのダウンロード</li>
  <li>Bracketsのダウンロード</li></ul>
 <h3><strong>カテゴリ</strong></h3>
 <ul>
  <li>HTML</li>
  <li>PHP</li>
  <li>MySQL</li>
  <li>JavaScript</li></ul>
</div>
</main>   

    
<footer>copyright internous| 4each blog is the one wich provides A toZ about programming
</footer>  
    
    
</body>
</html>