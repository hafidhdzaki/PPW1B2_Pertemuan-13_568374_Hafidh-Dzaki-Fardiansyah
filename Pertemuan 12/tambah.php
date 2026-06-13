<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php include 'navbar.php';?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-light shadow-sm mt-4 p-3">
                    <header>
                        <h4 class="fw-bold ">Tambah Mahasiswa Baru</h4>
                    </header>
                    <form action="tambah.php" method="POST">
                        <?php include_once("config.php");
                        if (isset($_POST['submit'])){
                            $nim = mysqli_real_escape_string($conn, $_POST['nim']);
                            $nama = mysqli_real_escape_string($conn, $_POST['nama']);
                            $jalur = mysqli_real_escape_string($conn, $_POST['jalur']);
                            $asal = mysqli_real_escape_string($conn, $_POST['asal']);

                            $errors = array();

                            if (empty($nim)){
                                $errors[] = "NIM tidak boleh kosong";
                            }
                            
                            if (empty($nama)){
                                $errors[] = "Nama tidak boleh kosong";
                            }
                            
                            if (empty($jalur)){
                                $errors[] = "Jalur masuk harus dipilih";
                            }
                            
                            if (empty($asal)){
                                $errors[] = "Asal daerah tidak boleh kosong";
                            }
                            
                            $check = mysqli_query($conn, "SELECT nim FROM mahasiswa WHERE nim='$nim'");
                            if (mysqli_num_rows($check) > 0) {
                                $errors[] = "NIM sudah terdaftar";
                            }

                            if (empty($errors)){
                                $result = mysqli_query($conn, "INSERT INTO mahasiswa(nim, nama, jalur, asal) VALUES('$nim', '$nama', '$jalur', '$asal')");

                                if ($result){
                                    echo "<script>
                                        alert('Data berhasil ditambahkan');
                                        window.location.href='index.php';
                                    </script>";
                                } else {
                                    echo "Errors: " . mysqli_error($conn);
                                }
                            } else {
                                echo "<div class='alert alert-danger mb-3'>";
                                echo "<ul class='mb-0'>";
                                foreach ($errors as $error){
                                    echo "<li>$error</li>";
                                }
                                echo "</ul>";
                                echo "</div>";
                            }
                        }
                        ?>
                        <div  class="my-3">
                            <label for="nim" class="form-label fw-semibold">NIM</label>
                            <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="nama"  class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="jalur" class="form-label fw-semibold">Jalur Masuk</label>
                            <select name="jalur" id="jalur" class="form-select" required>
                                <option value="" disabled selected hidden>-- Pilih Jalur --</option>
                                <option value="SNBP">SNBP</option>
                                <option value="SNBT">SNBT</option>
                                <option value="Ujian Mandiri">Ujian Mandiri</option>
                                <option value="IUP">IUP</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="asal" class="form-label fw-semibold">Asal Daerah (Kota/Kabupaten)</label>
                            <input type="text" id="asal" name="asal" placeholder="Contoh: Yogyakarta" class="form-control" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="index.php" class="btn btn-light border px-4">Batal</a>
                            <button type="submit" class="btn btn-primary px-4" name="submit">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>