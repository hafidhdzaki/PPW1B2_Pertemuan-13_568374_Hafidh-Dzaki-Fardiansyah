<?php
session_start();

if (isset($_POST['kirim'])) {
    $_SESSION['nama'] = htmlspecialchars($_POST['nama']);
    $_SESSION['nim'] = htmlspecialchars($_POST['nim']);
    $_SESSION['prodi'] = htmlspecialchars($_POST['prodi']);
    $_SESSION['ipk'] = htmlspecialchars($_POST['ipk']);
    $_SESSION['semester'] = htmlspecialchars($_POST['semester']);
    if ($_SESSION['ipk'] >= 3.51) {
        $_SESSION['predikat'] = "Cumlaude";
    } else if ($_SESSION['ipk'] >= 3.01) {
        $_SESSION['predikat'] = "Sangat Memuaskan";
    } else if ($_SESSION['ipk'] >= 2.76) {
        $_SESSION['predikat'] = "Memuaskan";
    } else {
        $_SESSION['predikat'] = "Belum dinyatakan Lulus";
    }

    $_SESSION['tersubmit'] = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php
    include 'navbar.php';
    ?>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm border-light">
                    <h4 class="fw-bold">Form Registrasi</h4>
                    <form method="POST">
                        <div class="py-2 small">
                            <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" class="form-control" <?= $_SESSION['tersubmit'] == true? "value= '".$_SESSION['nama']."'":""; ?> required>
                        </div>

                        <div class="py-2 small">
                            <label for="nim" class="form-label fw-bold">NIM</label>
                            <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" class="form-control" <?= $_SESSION['tersubmit'] == true? "value= ".$_SESSION['nim']:""; ?> required>
                        </div>

                        <div class="py-2 small">
                            <label for="prodi" class="form-label fw-bold">Program Studi</label>
                            <select id="prodi" name="prodi" class="form-select" required>
                                <option value="" disabled hidden <?= $_SESSION['tersubmit'] == true? "":"selected";?>>-- Pilih Program Studi --</option>
                                <option value="Teknologi Rekayasa Perangkat Lunak (TRPL)" <?= ($_SESSION['tersubmit'] == true) && ($_SESSION['prodi'] == "Teknologi Rekayasa Perangkat Lunak (TRPL)")? "selected":"";?>>Teknologi Rekayasa Perangkat Lunak (TRPL)</option>
                                <option value="Teknologi Rekayasa Elektro (TRE)" <?= ($_SESSION['tersubmit'] == true) && ($_SESSION['prodi'] == "Teknologi Rekayasa Elektro (TRE)")? "selected":"";?>>Teknologi Rekayasa Elektro (TRE)</option>
                                <option value="Teknologi Rekayasa Internet (TRI)" <?= ($_SESSION['tersubmit'] == true) && ($_SESSION['prodi'] == "Teknologi Rekayasa Internet (TRI)")? "selected":"";?>>Teknologi Rekayasa Internet (TRI)</option>
                                <option value="Teknologi Rekayasa Instrumentasi Kontrol (TRIK)" <?= ($_SESSION['tersubmit'] == true) && ($_SESSION['prodi'] == "Teknologi Rekayasa Instrumentasi Kontrol (TRIK)")? "selected":"";?>>Teknologi Rekayasa Instrumentasi Kontrol (TRIK)</option>
                            </select>
                        </div>

                        <div class="d-flex flex-col gap-3 justify-content-between">
                            <div class="py-2 small w-100">
                                <label for="ipk" class="form-label fw-bold">IPK</label>
                                <input type="number" id="ipk" name="ipk" step="0.01" min="0" max="4.00" placeholder="Masukkan IPK" class="form-control" <?= $_SESSION['tersubmit'] == true? "value= '".$_SESSION['ipk']."'":""; ?> required>
                            </div>
                            <div class="py-2 small w-100">
                                <label for="semester" class="form-label fw-bold">Semester</label>
                                <input type="text" id="semester" name="semester" placeholder="Masukkan Semester" class="form-control" <?= $_SESSION['tersubmit'] == true? "value= ".$_SESSION['semester']:""; ?> required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark rounded-pill px-4 my-3 w-100" name="kirim">Validasi dan Tampilkan</button>
                    </form>
                </div>
            </div>
            <div class=col-md-6>
                <div class="card p-4 shadow-sm border-light">
                    <h4 class="fw-bold mb-3">Hasil Output Sistem</h4>
                    <?php
                    if (isset($_SESSION['tersubmit']) && $_SESSION['tersubmit'] == true){
                        echo "<table class='table border'>";
                            echo "<tbody>";
                                echo "<tr>";
                                    echo "<th class='table-light border small'>Nama</th>";
                                    echo "<td>".$_SESSION['nama']."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th class='table-light border small'>NIM</th>";
                                    echo "<td>".$_SESSION['nim']."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th class='table-light border small'>Prodi</th>";
                                    echo "<td>".$_SESSION['prodi']."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th class='table-light border small'>IPK</th>";
                                    echo "<td>".$_SESSION['ipk']."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th class='table-light border small'>Predikat</th>";
                                    echo "<td>".$_SESSION['predikat']."</td>";
                                echo "</tr>";
                            echo "</tbody>";
                        echo "</table>";
                    } else {
                        echo "<p class='text-center'>Belum ada data yang dikirim</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>