<?php
session_start();
?>
<?php
echo"Favcolor is".$_SESSION["favcolor"].".<br>";
echo"Favcolor animal is".$_SESSION["favanimal"].".";
?>

<?php
session_start();
?>
<?php
print_r($_SESSION);
?>