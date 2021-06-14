<?php
include_once 'conn.php';

class data {
    var $id;
    var $nama;
    var $kelas;
    var $gender;
    var $kontak;
    var $alamat;
 }

$result = pg_query($dbconn,"SELECT * FROM guru");
if($result){
    while ($row = pg_fetch_assoc($result)){

        $data = new data();
        $data -> id = $row['id_guru'];
        $data -> nama = $row['nama'];
        $data -> kelas = $row['kelas'];
        $data -> gender = $row['gender'];
        $data -> kontak = $row['kontak'];
        $data -> alamat = $row['alamat'];

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