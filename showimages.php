<?php

include 'sqlconnect.php';

$sql = "SELECT id, filename, path, seen, opened FROM $sqltable ORDER BY opened DESC";
$sqlnewseen = "UPDATE $sqltable SET seen=seen+1 WHERE id=";
$result = mysql_query($connection, $sql);

if (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_assoc($result)) {
        $sqlres = mysql_query($connection, $sqlnewseen.row["id"]);
        $thumb = $row["path"].row["filename"];
        $fullimage = $row["path"].'images\\'.$row["filename"];
        $seen = $row["seen"];
        $opened = $row["opened"];
        echo '<div class= "imageinner">';
        echo '<div class="pic">';
        echo '<a href=/showidpic.php?id='.$row["id"].'&db='.$sqltable.' target="_blank">';
        echo '</div>';
    }
}