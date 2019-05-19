<?php
$sqlserver = 'php.gb';
$sqluser = 'root';
$sqlpass = '';
$sqlbase = 'Lesson6';

$connection = mysqli_connect($sqlserver, $sqluser, $sqlpass, $sqlbase);

if (!$connection) {
    echo "Нет соединения";
    exit;
}
?>