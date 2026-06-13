<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jalur Masuk Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php include 'navbar.php'; ?>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card border-light shadow-sm mt-4">
                    <div class="d-flex justify-content-between p-4">
                        <h4 class="fw-bold">Data Mahasiswa</h4>
                        <a href="tambah.php">
                            <button class="btn btn-primary rounded-pill px-4">+ Tambah Data</button>
                        </a>
                    </div>
                    <div class="card mx-4 border-light">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Jalur Masuk</th>
                                        <th>Asal Daerah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $result = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id DESC");
                                    if (mysqli_num_rows($result) > 0){
                                        $no = 1;
                                        while ($row = mysqli_fetch_assoc($result)){
                                           echo "<tr>";
                                           echo "<td>".$no++."</td>";
                                           echo "<td>".$row['nim']."</td>";
                                           echo "<td>".$row['nama']."</td>";
                                           echo "<td>".$row['jalur']."</td>";
                                           echo "<td>".$row['asal']."</td>";
                                           echo "<td class='d-flex f-row justify-content-center'>";
                                           echo "<a href='edit.php?id=".$row['id']."'><button type='button' class='btn btn-outline-secondary rounded-pill mx-1 btn-sm px-3'>Edit</button></a>";
                                           echo "<a href='hapus.php?id=".$row['id']."'><button type='button' class='btn btn-outline-danger rounded-pill mx-1 btn-sm px-3' onclick='return confirm(\"Yakin ingin menghapus data?\")'>Hapus</button></a>";
                                           echo "</td>";
                                           echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='7' class='justify-content-center'>Tidak ada data</td></tr>";
                                    }
    
                                    mysqli_close($conn);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>