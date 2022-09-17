<?php
include "config.php";

if ( isset($_GET['id']) ){
    // ambil id dari query string
    $id = $_GET['id'];

    // query untuk hapus data
    $sql = "DELETE FROM tbl_karyawan WHERE id=$id";
    $hasil = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if ($hasil){
        header('Location: index.php');
    } else {
        die("Gagal Hapus..");
    }
}
?>