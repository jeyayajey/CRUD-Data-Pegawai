<!DOCTYPE html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Register</title>

  <style>
    .card {
      background: rgba(255, 255, 255, 0.9);
      border-radius: 15px;
      box-shadow: 0px 0px 10px 0px #000;
    }

    .form-label {
      color: #2c3e50;
    }

    .btn-primary {
      background-color: #2c3e50;
      border-color: #2c3e50;
    }

    .btn-primary:hover {
      background-color: #1a252f;
      border-color: #1a252f;
    }
  </style>
</head>

<body>
  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <form action="proses_register.php" method="post" class="mx-1 mx-md-4">

                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="nik" name="nik" class="form-control" />
                        <label class="form-label" for="nik">nik</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" />
                        <label class="form-label" for="nama_pegawai">nama pegawai</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="alamat" name="alamat" class="form-control" />
                        <label class="form-label" for="alamat">alamat</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <select name="jenis_kelamin" class="form-control">
                          <option></option>
                          <option value="L">Laki Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                        <label class="form-label" for="jenis_kelamin">jenis kelamin</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="no_tlp" name="no_tlp" class="form-control" />
                        <label class="form-label" for="no_tlp">no tlp</label>
                      </div>
                    </div>

                    <?php
                    include "koneksi.php";
                    $query = "SELECT * FROM `jabatan`;";
                    $hasil = mysqli_query($conn, $query);
                    ?>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <select name="jabatan" class="form-control">
                          <option></option>
                          <?php
                          while ($data= mysqli_fetch_array($hasil)) {
                            echo '<option value="' . $data['id_jabatan'] . '">' . $data['nama_jabatan'] . '</option>';
                          }
                          ?>
                        </select>
                        <label class="form-label" for="jabatan">jabatan</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="password" name="password" class="form-control" />
                        <label class="form-label" for="password">Password</label>
                      </div>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <input type="submit" class="btn btn-primary btn-lg" value="Register">
                    </div>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>