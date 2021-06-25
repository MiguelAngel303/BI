<?php
require("../includes/constants.php");
require("../includes/functions.php");
$nombre=$_POST["Nombre"];
$precio=$_POST["Precio"];
$imagen=$_POST["Imagen"];
$color=$_POST["Descripcion"];
$editar=query("UPDATE `electronicos` SET `Nombre` = ?, `Precio` = ?,`Imagen` = ?, `Descripcion`  = ? WHERE `electronicos`.`ID` = ?;",$nombre,$precio,$imagen,$color,$_GET['id']);
redirect();
?>