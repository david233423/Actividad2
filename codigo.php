<?php
$host='localhost';
$bd='ACTIVIDAD2';
$user='postgres';
$pass='1234';

$conexion=pg_connect("host=$host dbname=$bd user=$user password=$pass");

$añadir=(INSERT INTO datos (primernombre, segundonombre, primerapellido, segundoapellido, cuidad, edad)
VALUES)