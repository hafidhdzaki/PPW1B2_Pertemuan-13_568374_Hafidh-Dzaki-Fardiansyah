<?php
$nama = "Hafidh Dzaki";
$nim = "25/568374/SV/27446";
$prodi = "TRPL";
$askot = "Yogyakarta";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profil Mahasiswa</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            font-family: sans-serif;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }
        th {
            background-color: #f2f2f2;
            width: 30%;
        }
    </style>
</head>
<body>
    <h2>Data Profil Mahasiswa</h2>
    <table>
        <tr>
            <th>Nama Lengkap</th>
            <td><?php echo $nama ?></td>
        </tr>
        <tr>
            <th>NIM</th>
            <td><?php echo $nim ?></td>
        </tr>
        <tr>
            <th>Program Studi</th>
            <td><?php echo $prodi ?></td>
        </tr>
        <tr>
            <th>Asal Kota</th>
            <td><?php echo $askot ?></td>
        </tr>
    </table>
</body>
</html>