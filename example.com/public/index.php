<?php
	require("../includes/constants.php");
	require("../includes/functions.php");


if(isset($_GET['q'])){
	$productos = query("SELECT * FROM electronicos WHERE Nombre LIKE ?", '%'.$_GET['q'].'%');
}else{
	$productos = query("SELECT * FROM electronicos");
}

require("../templates/Header.php");
require("../templates/index.php");
?>