<?php
$file = basename($_SERVER['PHP_SELF']);
?>

<div class="bg-dark px-5 py-2 sticky-top">
    <header class="navbar navbar-dark">
        <h1 class="text-light fs-4">Pendataan Mahasiswa</h1>
        <nav>
            <ul class="navbar-nav d-flex flex-row gap-4 justify-content-between">
                <li class="nav-item"><a href="index.php" class="nav-link <?= in_array($file, ['index.php', 'tambah.php', 'edit.php']) ? 'active' : ''; ?>">Pendataan Jalur Masuk</a></li>
                <li class="nav-item"><a href="konversi.php" class="nav-link <?= ($file == 'konversi.php')? 'active':'';?>">Konversi Nilai</a></li>
                <li class="nav-item"><a href="reg_mhs.php" class="nav-link <?= ($file == 'reg_mhs.php')? 'active':'';?>">Pendataan Mahasiswa</a></li>
            </ul>
        </nav>
    </header>
</div>