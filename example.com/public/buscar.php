<?php
	require("../includes/constants.php");
	require("../includes/functions.php");


  $y=query("SELECT * FROM electronicos WHERE ID=?",$_GET['nombre'])[0];

require("../templates/Header.php");
require("../templates/buscar.php");
?>