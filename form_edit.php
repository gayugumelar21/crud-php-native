<?php
include "config.php";

// kalau tidak ada id di query string
if(!isset($_GET['id'])){
    header('Location: index.php');
}

// ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM tbl_karyawan WHERE id=$id";
$hasil = mysqli_query($koneksi, $sql);
$karyawan = mysqli_fetch_assoc($hasil);

// jika data yang di edit tidak di temukan
if (mysqli_num_rows($hasil) < 1){
    die("Data tidak ada..");
}
?>
<!-- ================================================================== -->
<h2>FORM EDIT</h2>
<form action="update.php" method="POST">
<fieldset>
    <input type="hidden" name="id" value="<?php echo $karyawan['id'] ?>"/>

    NAMA KARYAWAN<br>
    <INPUT name="nama_karyawan" value="<?php echo $karyawan['nama_karyawan']?>" /> <br>
    ALAMAT <br>
    <textarea name="alamat"><?php echo $karyawan['alamat']?></textarea><br>
    JENIS KELAMIN <br>
    <?php $jk = $karyawan['jenis_kelamin']; ?>
    <label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk=='Laki-laki'? "checked":"") ?>>Laki-laki</label>
    <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk=='Perempuan'? "checked":"") ?>>Perempuan</label> <br>
    JABATAN <br>
    <?php $jabatan = $karyawan['jabatan']; ?>
    <select name="jabatan">
        <option <?php echo ($jabatan == 'Staff Gudang')? "selected":"" ?>>Staff Gudang</option>
        <option <?php echo ($jabatan == 'Staff Admin')? "selected":"" ?>>Staff Admin</option>
        <option <?php echo ($jabatan == 'Staff IT')? "selected":"" ?>>Staff IT</option>
        <option <?php echo ($jabatan == 'Kepala Gudang')? "selected":"" ?>>Kepala Gudang</option>
    </select>
    <br>
    <input type="submit" value="simpan" name="simpan">
</fieldset>
</form>