<!DOCTYPE html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>D/75 Rangers</title>
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" type="text/css" href="font.css">
<meta name="keywords" content="airsoft, usti, orlici, D/75, Rangers, LRP, team">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
</head>
<body>

<script language="JavaScript1.2" type="text/javascript">
button_material1 = new Image();
button_material1.src = "images/button_material1.gif";
button_kalendar1 = new Image();
button_kalendar1.src = "images/button_kalendar1.gif";
button_diskuze1 = new Image();
button_diskuze1.src = "images/button_diskuze1.gif";
medal1 = new Image();
medal1.src = "images/medal1.gif";
z51 = new Image ();
z51.src = "images/z51.gif"
</script>

<div class=menu_up>
<div><a href="ltwatw.php?page=p_diskuze"><img src="images/button_diskuze0.gif" alt='' border="0" width="147" height="37" onmouseover="this.src=button_diskuze1.src" onmouseout="this.src = 'images/button_diskuze0.gif';"></a></div>
<div><a href="ltwatw.php?page=p_material"><img src="images/button_material0.gif" alt='' border="0" width="160" height="38" onmouseover="this.src=button_material1.src" onmouseout="this.src = 'images/button_material0.gif';"></a></div>
<div><a href="ltwatw.php?page=p_kalendar"><img src="images/button_kalendar0.gif" alt='' border="0" width="167" height="39" onmouseover="this.src=button_kalendar1.src" onmouseout="this.src = 'images/button_kalendar0.gif';"></a></div>
<div><a href="ltwatw.php?page=p_honored"><img src="images/medal0.gif" alt='' border="0" width="147" height="39" onmouseover="this.src=medal1.src" onmouseout="this.src = 'images/medal0.gif';"></a></div>
</div>

<div class=menu_down>
<div><a href="index.php"><img src="images/z50.gif" alt='Zpet' border="0" width="147" height="38"></a></div>
</div>

<?php

if (array_key_exists('page', $_GET)) {
    $page = $_GET['page'];
} else {
    $page = null;
}


if($page=="clenove") {?><div class=clenove><?}
elseif($page!="") {?><div class=text><div class=text2><?}
?>

<?if($page!="") include "./".$page.".php";?>

<?
if($page=="clenove") {?></div><?}
elseif($page!=""){?></div><div class=paticka></div></div><?}
?>

</body>
</html>


