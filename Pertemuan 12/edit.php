<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php 
    include 'navbar.php';
    include_once("config.php");
    if(!isset($_GET['id'])){
        header("Location: index.php");
        exit();
    }

    $id = $_GET['id'];

    if (isset($_POST['update'])){
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
        
        $check = mysqli_query($conn, "SELECT nim FROM mahasiswa WHERE nim='$nim' AND id!=$id");
        if (mysqli_num_rows($check) > 0) {
            $errors[] = "NIM sudah terdaftar";
        }

        if (empty($errors)){
            $result = mysqli_query($conn, "UPDATE mahasiswa SET nim='$nim', nama='$nama', jalur='$jalur', asal='$asal' WHERE id=$id");

            if ($result){
                echo "<script>
                    alert('Data berhasil diperbarui');
                    window.location.href='index.php';
                </script>";
            } else {
                echo "Errors: " . mysqli_error($conn);
            }
        } else {
            echo "<div>";
            echo "<ul>";
            foreach ($errors as $error){
                echo "<li>$error</li>";
            }
            echo "</ul>";
            echo "</div>";
        }
    }

    $result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");

    if (mysqli_num_rows($result) < 1){
        header("Location: index.php");
        exit();
    }

    $rows = mysqli_fetch_assoc($result);
    $nim = $rows['nim'];
    $nama = $rows['nama'];
    $jalur = $rows['jalur'];
    $asal = $rows['asal'];
    ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-light shadow-sm mt-4 p-3">
                    <header>
                        <h4 class="fw-bold ">Edit Data Mahasiswa</h4>
                    </header>
                    <form action="edit.php?id=<?php echo $id;?>" method="POST">
                        <div  class="my-3">
                            <label for="nim" class="form-label fw-semibold">NIM</label>
                            <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" class="form-control" value="<?php echo $nim;?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="nama"  class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" class="form-control" value="<?php echo $nama;?>" required>
                        </div>

                        <div class="mb-3">
                            <label type="jalur" class="form-label fw-semibold">Jalur Masuk</label>
                            <select name="jalur" id="jalur" class="form-select" value="<?php echo $jalur;?>" required>
                                <option value="" disabled hidden>-- Pilih Jalur --</option>
                                <option value="SNBP" <?= ($jalur == 'SNBP')? 'selected':'';?>>SNBP</option>
                                <option value="SNBT" <?= ($jalur == 'SNBT')? 'selected':'';?>>SNBT</option>
                                <option value="Ujian Mandiri" <?= ($jalur == 'Ujian Mandiri')? 'selected':'';?>>Ujian Mandiri</option>
                                <option value="IUP" <?= ($jalur == 'IUP')? 'selected':'';?>>IUP</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="asal" class="form-label fw-semibold">Asal Daerah (Kota/Kabupaten)</label>
                            <input type="text" id="asal" name="asal" placeholder="Contoh: Yogyakarta" class="form-control" value="<?php echo $asal;?>" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="index.php" class="btn btn-light border px-4">Batal</a>
                            <button type="submit" class="btn btn-primary px-4" name="update">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>