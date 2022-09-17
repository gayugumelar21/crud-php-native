<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan Koding</title>
</head>
<body>
    <h3>Perusahaan Koding</h3>
    <nav>
        <a href="form_input.php">[+] Tambah Baru</a> <br>
    </nav>
    <br>
    <table border="1">
    <thead>
        <tr>
            <th>Nama Karyawan</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tbl_karyawan";
        $hasil = mysqli_query($koneksi, $sql);

        while($karyawan = mysqli_fetch_array($hasil)){
            echo "<tr>";

            echo "<td>".$karyawan['nama_karyawan']."</td>";
            echo "<td>".$karyawan['alamat']."</td>";
            echo "<td>".$karyawan['jenis_kelamin']."</td>";
            echo "<td>".$karyawan['jabatan']."</td>";

            echo "<td>";
            echo "<a href='form_edit.php?id=".$karyawan['id']."'>Edit</a> | ";
            echo "<a href='delete.php?id=".$karyawan['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
    </table>

    <p>Total data : <?php echo mysqli_num_rows($hasil) ?></p>

</body>
</html>