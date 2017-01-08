<div class=clenove_menu>
<?if($_GET['clen']=="harker") {?><img src='images/harker1.gif' alt='' width="67" height="21" border='0'><?} else {?><a href="index.php?page=clenove&clen=harker"><img src="images/harker0.gif" alt='' border="0" width="67" height="21" onmouseover="this.src=harker1.src" onmouseout="this.src = 'images/harker0.gif'"></a><?}?>
<?if($_GET['clen']=="dao") {?><img src='images/dao1.gif' alt='' width="66" height="21" border='0'><?} else {?><a href="index.php?page=clenove&clen=dao"><img src="images/dao0.gif" alt='' border="0" width="66" height="21" onmouseover="this.src=dao1.src" onmouseout="this.src = 'images/dao0.gif'"></a><?}?>
<?if($_GET['clen']=="adolini") {?><img src='images/adolini1.gif' alt='' width="64" height="21" border='0'><?} else {?><a href="index.php?page=clenove&clen=adolini"><img src="images/adolini0.gif" alt='' border="0" width="64" height="21" onmouseover="this.src=adolini1.src" onmouseout="this.src = 'images/adolini0.gif'"></a><?}?>
<?if($_GET['clen']=="swofford") {?><img src='images/swofford1.gif' alt='' width="66" height="21" border='0'><?} else {?><a href="index.php?page=clenove&clen=swofford"><img src="images/swofford0.gif" alt='' border="0" width="66" height="21" onmouseover="this.src=swofford1.src" onmouseout="this.src = 'images/swofford0.gif'"></a><?}?>
<?if($_GET['clen']=="nichols") {?><img src='images/nichols1.gif' alt='' width="106" height="21" border='0'><?} else {?><a href="index.php?page=clenove&clen=nichols"><img src="images/nichols0.gif" alt='' border="0" width="106" height="21" onmouseover="this.src=nichols1.src" onmouseout="this.src = 'images/nichols0.gif'"></a><?}?>
<img src='images/free0.gif' alt='' width="101" height="21" border='0'>
</div>

<div class=clenove_karta>
<?if($_GET['clen']!="") include "clenove/".$_GET['clen'].".php"?>
</div>
