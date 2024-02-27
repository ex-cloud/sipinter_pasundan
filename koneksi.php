<?php
$host = "localhost";
$user = "sipinter_sipinter";
$pass = "r=(Q5MSxdjO&";
$db = "sipinter_db_skrining";
$koneksi = mysqli_connect($host, $user, $pass, $db);


if (mysqli_connect_errno()) {
    echo "Koneksi Database Gagal : " . mysqli_connect_error();
}