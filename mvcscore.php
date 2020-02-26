<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>すごろく</title>
</head>
<body>
<h1>すごろく途中結果</h1>
<!-- 　現在の値をだす。 -->
<p><?=$_SESSION["num"]?>の目が出ました。</p>
<form action="mvcscoreAction.php" method="post">
    <?php  if(isset($_SESSION["Taro"])){?>
        <div class="scoreTaro">Taroの途中結果:<?=$_SESSION["Taro"]?></div>
    <?php }?>
    <?php if(isset($_SESSION["Jiro"])){?>
        Jiroの途中結果:<?=$_SESSION["Jiro"]?><br>
    <? } ?>
    <input class="submitdice" type="submit" name="back" value="戻る">
</form>
</body>
</html>