<center>
<table border=0 cellpadding="5">
<?
$loc = $_REQUEST['loc'];
$loc1 = $_REQUEST['loc1'];

$i=1;
do {
if ($i<=10)$y='0'.$i; else $y= $i;
$filename = 'galerie/'.$_REQUEST["loc"].'/'.$_REQUEST["loc1"].'_'.$y.'b.jpg';
?>
<?if (file_exists($filename)){?>    
    <tr><td>
    <a href="index.php?page=img&poradi=<?if ($i<=10)echo '0'.$i; else echo '$i';?>&loc=<?echo $loc?>&loc1=<?echo $loc1?>"><img src="galerie/<?echo $_REQUEST["loc"];?>/<?echo $_REQUEST["loc1"];?>_<?if ($i<=10)echo '0'.$i; else echo '$i';?>b.jpg" border="0"></a>
    </td><?}?>
<?
$i++;
if ($i<=10)$y='0'.$i; else $y= $i;
$filename = 'galerie/'.$_REQUEST["loc"].'/'.$_REQUEST["loc1"].'_'.$y.'b.jpg';
?>
<?if (file_exists($filename)){?>        
    <td>
   <a href="index.php?page=img&poradi=<?if ($i<=10)echo '0'.$i; else echo '$i';?>&loc=<?echo $loc?>&loc1=<?echo $loc1?>"><img src="galerie/<?echo $_REQUEST["loc"];?>/<?echo $_REQUEST["loc1"];?>_<?if ($i<=10)echo '0'.$i; else echo '$i';?>b.jpg" border="0"></a>
    </tr></td><?}?><?
$i++;
}while(file_exists($filename))


?>
  
 

</table>
</center>
