<?php

$nama = $_POST['nama_karyawan'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$jabatan = $_POST['jabatan'];

//minta akses
include "config.php";

$sql ="INSERT INTO tbl_karyawan(nama_karyawan,alamat,jenis_kelamin,jabatan) values('$nama','$alamat','$jk','$jabatan')";

$hasil = mysqli_query($koneksi,$sql);

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


?>