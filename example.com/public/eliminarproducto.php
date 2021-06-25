<?php
require("../includes/constants.php");
require("../includes/functions.php");

//$query="DELETE FROM usuarios WHERE id='$pan'";
$eliminar=query("DELETE FROM `electronicos` WHERE `electronicos`.`ID` = ?", $_GET['nombre']);
redirect();

?>