<?php
if ($_POST) {
    $id_pegawai = $_POST['id_pegawai'];
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
        echo "<script>alert('nik tidak boleh kosong');location.href='register.php';</script>";
    } else {
        include "koneksi.php";
        if (empty($password)) {
            $update = mysqli_query($conn, "UPDATE `tabel_pegawai` SET `nik`='$nik',`nama_pegawai`='$nama_pegawai',`alamat`='$alamat',`jenis_kelamin`='$jenis_kelamin',`no_tlp`='$no_tlp',`jabatan`='$jabatan' WHERE `id_pegawai`= '$id_pegawai'") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id_pegawai=" . $id_pegawai . "';</script>";
            }
        } else {
            $update = mysqli_query($conn, "UPDATE `tabel_pegawai` SET `nik`='$nik',`nama_pegawai`='$nama_pegawai',`alamat`='$alamat',`jenis_kelamin`='$jenis_kelamin',`no_tlp`='$no_tlp',`password`='$password',`jabatan`='$jabatan' WHERE `id_pegawai`= '$id_pegawai'") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id_pegawai=" . $id_pegawai . "';</script>";
            }
        }

    }
}
?>