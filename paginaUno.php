<?php
session_start();
setcookie("username", "maysa", time() +3600);
$_SESSION['username'] = "maysa";
($_SESSION['userpass'] == '123');
$_SESSION['ok'] = 1;
?>
<html>
    <head>
        <title> My Serie Site </title>
    </head>
    <form name="formulario" method="post" action="ejemploPost.php">
        Nombre: <input type="text" name="nombre" value="">
        Email: <input type="text" name="nombre" value="">
        <input type="submit"/>
    </form>
<body>
<?php
define("FAVSERIE", "Teen Wolf");
echo "My Serie FAV is ";
echo FAVSERIE;
echo '<br/>';
$serierate = 8;
echo "My serie rating for this serie is: ";
echo $serierate;
date_default_timezone_set('UTC');
echo '<br/>';
echo date('viernes');
echo '<br>';
$myfavserie = urlencode("Teen Wolf");
echo "<a href='PaginaDos.php?FAVSERIE=$myfavserie'>";
echo "Click here to see information about my favorite serie!"; 
echo "</a>";
?>
</body>
</html>
