<?php
include "config.php";

// cek apakah tombol simpan sudah diklik atau belum?
if (isset($_POST['simpan'])){
    // ambil data dari form edit
    $id = $_POST['id'];
    $namakaryawan = $_POST['nama_karyawan'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $jabatan = $_POST['jabatan'];

    // query untuk update
    $sql = "UPDATE tbl_karyawan SET nama_karyawan='$namakaryawan', alamat='$alamat', jenis_kelamin='$jk', jabatan='$jabatan' WHERE id=$id";
    $hasil = mysqli_query($koneksi, $sql);

    if($hasil)
    {
        // kalau berhasil alihkan ke halaman index.php dengan status sukses
        header('Location: index.php');
    }
    else
    {
        // kalau gagal alihkan ke halaman index.php dengan status gagal
        header('Location: index.php');
    }
}
?>