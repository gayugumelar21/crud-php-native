<h2>FORM INPUT</h2>

<form action="create.php" method="post">

NAMA KARYAWAN<br>
<INPUT name="nama_karyawan"/> <br>
ALAMAT <br>
<textarea name="alamat"></textarea><br>
JENIS KELAMIN <br>
<label><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</label>
<label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label> <br>
JABATAN <br>
<select name="jabatan">
    <option value="Staff Gudang">Staff Gudang</option>
    <option value="Staff Admin">Staff Admin</option>
    <option value="Staff IT">Staff IT</option>
    <option value="Kepala Gudang">Kepala Gudang</option>
</select>
<br>
<button type="submit"> Simpan </button>
</form>