<?php
$db= pg_connect("host=localhost port=5432 dbname=BOSS user=postgres password=1234");
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
