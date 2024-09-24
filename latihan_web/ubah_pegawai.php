<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>UBAH PEGAWAI</title>
</head>

<body>
    <?php
    include "koneksi.php";
    $qry_get_pegawai = mysqli_query($conn, "select * from tabel_pegawai where id_pegawai = '" . $_GET['id_pegawai'] . "'");
    $dt_pegawai = mysqli_fetch_array($qry_get_pegawai);
    ?>
    <h3>Tambah Pegawai</h3>
    <form action="proses_ubah_pegawai.php" method="post">
        <input type="hidden" name="id_pegawai" value="<?= $dt_pegawai['id_pegawai'] ?>" />
        nik :
        <input type="int" name="nik" value="<?= $dt_pegawai['nik'] ?>" class="form-control">
        nama pegawai :
        <input type="varchar" name="nama_pegawai" value="<?= $dt_pegawai['nama_pegawai'] ?>" class="form-control">
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"><?= $dt_pegawai['alamat'] ?></textarea>
        Jenis Kelamin :
        <?php
        $arr_jenis_kelamin = array('L' => 'Laki-laki', 'P' => 'Perempuan');
        ?>
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <?php foreach ($arr_jenis_kelamin as $key_jenis_kelamin => $val_jenis_kelamin):
                if ($key_jenis_kelamin == $dt_pegawai['jenis_kelamin']) {
                    $selek = "selected";
                } else {
                    $selek = "";
                }
                ?>
                <option value="<?= $key_jenis_kelamin ?>" <?= $selek ?>><?= $val_jenis_kelamin ?></option>
            <?php endforeach ?>
        </select>
        no telf :
        <input type="int" name="no_tlp" value="<?= $dt_pegawai['no_tlp'] ?>" class="form-control">
        Jabatan :
        <?php
        $arr_jabatan = array('1' => 'CEO', '2' => 'Pegawai');
        ?>
        <select name="jabatan" class="form-control">
            <option></option>
            <?php foreach ($arr_jabatan as $key_jabatan => $val_jabatan):
                if ($key_jabatan == $dt_pegawai['jabatan']) {
                    $selek = "selected";
                } else {
                    $selek = "";
                }
                ?>
                <option value="<?= $key_jabatan ?>" <?= $selek ?>><?= $val_jabatan ?></option>
            <?php endforeach ?>
        </select>
        Password :
        <input type="password" name="password" value="" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Ubah Pegawai" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>