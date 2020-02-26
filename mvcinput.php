<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>すごろく</title>
</head>
<body>
<div class="maincontainer">
    <div class="titlecontainer">
        <h1>すごろくゲーム</h1>
        <img class="dice" src="397499.jpg" width="100" height="80">
    </div>
    <!-- ルール記述する -->
    <form action="mvcinputAction.php" method="post">
        Taroのサイコロ<input class="Tinput" type="radio" name="num" value="1" /><br>
        Jiroのサイコロ<input class=Jinput type="radio" name="num" value="2" /><br>
        <input class="submitdice" type="submit" name="submit" value="サイコロを振る">
    </form>
</div>
</body>
</html>