<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>すごろく</title>
</head>
<body>
<p><?=$_SESSION["num"]?>の目が出ました。</p>
<div class="titlecontainer">
        <h1>ゴール！</h1>
        <img class="imggoal" src="1413394.jpg" width="160" height="130">
    </div>
<form action="mvcrezultAction.php" method="post">
    <input type="submit" name="continue" value="もう一回">
</form>
</body>
</html>