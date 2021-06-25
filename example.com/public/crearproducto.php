<?php
require("../includes/constants.php");
require("../includes/functions.php");

$nombre=$_POST["Nombre"];
$precio=$_POST["Precio"];
$imagen=$_POST["Imagen"];
$color=$_POST["Descripcion"];
$inserccion=query("INSERT INTO `electronicos` ( `ID`, `Nombre`, `Precio`, `Imagen`,`Descripcion`) VALUES (NULL,?,?,?,?)",$nombre,$precio,$imagen,$color);
redirect();
?>