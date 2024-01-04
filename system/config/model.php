<?php
if(isset($nin)){
$var_saldo = mysql_query($conn, "SELECT SUM(total) AS totalsaldo FROM setor WHERE nin='".$nin."'");
$var_tarik = mysql_query($conn, "SELECT SUM(jumlah_tarik) AS totaltarik FROM tarik WHERE nin='".$nin."'");
$tot_saldo = mysql_fetch_array($var_saldo); $tot_tarik = mysql_fetch_array($var_tarik);
$tot_saldo_total=$tot_saldo['totalsaldo']-$tot_tarik['totaltarik'];
}