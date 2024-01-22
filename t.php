<?php


$con = new mysqli("localhost", "id21630455_root", "Dds1234@56A$", "id21630455_whrp", "3306");

$rs = $con->query("SELECT * FROM `admin`;");

echo $rs->num_rows;