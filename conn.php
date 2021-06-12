<?php

$host = "ec2-3-233-7-12.compute-1.amazonaws.com";
$port = "5432";
$dbname = "dbqtng4kf1r8ke";
$user = "regmhxjlvciaoc";
$pass = "25f0e2f18d8135840d766b608491ae982fb6267447b0a4d603d62fbc3964ef1e";

$conn = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";
$dbconn = pg_connect($conn);

// if($dbconn){
//     echo "KONEKSI BERHASIL";
// } else {
//     echo "KONEKSI GAGAL";
// }

// echo "<hr />";
?>