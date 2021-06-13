<?php
include_once 'conn.php';

class data {
    var $id;
    var $nama;
    var $tempat;
    var $tanggal;
    var $nisn;
    var $gender;
    var $kontaksiswa;
    var $alamat;
    var $wali;
    var $kontakwali;
 }

$result = pg_query($dbconn,"SELECT * FROM siswa");
if($result){
    while ($row = pg_fetch_assoc($result)){

        $data = new data();
        $data -> id = $row['id_siswa'];
        $data -> nama = $row['nama'];
        $data -> tempat = $row['tempat'];
        $data -> tanggal = $row['tanggal_lahir'];
        $data -> nisn = $row['nisn'];
        $data -> gender = $row['gender'];
        $data -> kontaksiswa = $row['kontak_siswa'];
        $data -> alamat = $row['alamat'];
        $data -> wali = $row['wali'];
        $data -> kontakwali = $row['kontak_wali'];

        $array[] = $data;
    }
    echo json_encode(array(
        'status' => 'ok',
        'data' => $array
    ));
} else {
    echo json_encode(array(
        'status' => 'error'
    ));
}
?>