<?php

$dbhost = "localhost";
$dbname = "dbmusicplayer";
$dbuser = "root";
$dbpass =  "";

$koneksi = new PDO ("mysql:host=" . $dbhost . "; dbname=" . $dbname . "" , $dbuser , $dbpass);
