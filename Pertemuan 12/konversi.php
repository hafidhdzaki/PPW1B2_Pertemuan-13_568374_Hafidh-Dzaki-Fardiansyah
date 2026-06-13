<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Konversi Nilai</title>
</head>
<body class="bg-light">
    <?php include 'navbar.php';?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-5">
                <div class="card border-light shadow-sm mt-5 p-4 text-center">
                    <header>
                        <h4 class="fw-bold">Konversi Nilai</h4>
                        <p class="text-secondary small">Masukkan nilai akhir (0-100) untuk mengetahui Grade.</p>
                    </header>
                    <main>
                        <form method="POST">
                            <div class="input-group mb-3">
                                <input type="number" name="nilai" min="0" max="100" placeholder="Contoh: 85" class="form-control" required>
                                <button type="submit" class="btn btn-primary" name="konversi">Konversi</button>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['konversi'])) {
                            $nilai = $_POST['nilai'];
                            if ($nilai >= 85){
                                echo "<div class='card alert alert-success align-text-center'>";
                                echo "<h1 class='display-3 fw-bold'>A</h1>";
                                echo "<p class='mb-0 fw-semibold'>Sangat Baik</p>";
                                echo "<hr class='m-2'>";
                                echo "<p class='small m-0'>Nilai angka: <span class='fw-bold'>".$nilai."</span></p>";
                                echo "</div>";
                            } else if ($nilai >= 75){
                                echo "<div class='card alert alert-primary align-text-center'>";
                                echo "<h1 class='display-3 fw-bold'>B</h1>";
                                echo "<p class='mb-0 fw-semibold'>Baik</p>";
                                echo "<hr class='m-2'>";
                                echo "<p class='small m-0'>Nilai angka: <span class='fw-bold'>".$nilai."</span></p>";
                                echo "</div>";
                            } else if ($nilai >= 60){
                                echo "<div class='card alert alert-warning align-text-center'>";
                                echo "<h1 class='display-3 fw-bold'>C</h1>";
                                echo "<p class='mb-0 fw-semibold'>Cukup</p>";
                                echo "<hr class='m-2'>";
                                echo "<p class='small m-0'>Nilai angka: <span class='fw-bold'>".$nilai."</span></p>";
                                echo "</div>";
                            } else if ($nilai >= 45){
                                echo "<div class='card alert alert-secondary align-text-center'>";
                                echo "<h1 class='display-3 fw-bold'>D</h1>";
                                echo "<p class='mb-0 fw-semibold'>Kurang</p>";
                                echo "<hr class='m-2'>";
                                echo "<p class='small m-0'>Nilai angka: <span class='fw-bold'>".$nilai."</span></p>";
                                echo "</div>"; 
                            } else if ($nilai >= 0){
                                echo "<div class='card alert alert-danger align-text-center'>";
                                echo "<h1 class='display-3 fw-bold'>E</h1>";
                                echo "<p class='mb-0 fw-semibold'>Sangat Kurang</p>";
                                echo "<hr class='m-2'>";
                                echo "<p class='small m-0'>Nilai angka: <span class='fw-bold'>".$nilai."</span></p>";
                                echo "</div>";
                            }
                        }
                        ?>
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>
</html>