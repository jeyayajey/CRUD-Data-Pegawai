<?php
if ($_POST) {
    $nik = $_POST['nik'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_tlp = $_POST['no_tlp'];
    $password = $_POST['password'];
    $jabatan = $_POST['jabatan'];

    if (empty($nama_pegawai)) {
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='register.php';</script>";
    } elseif (empty($nik)) {
        echo "<script>alert('NIK tidak boleh kosong');location.href='register.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO `tabel_pegawai` (`nik`, `nama_pegawai`, `alamat`, `jenis_kelamin`, `no_tlp`, `password`, `jabatan`) VALUES ('$nik', '$nama_pegawai', '$alamat', '$jenis_kelamin', '$no_tlp', '".md5($password)."', '$jabatan');") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan Pegawai');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Pegawai');location.href='login.php';</script>";
        }
    }
}

?>