<?php
include_once 'config.php';
if (isset($_GET['id'])){
    $id = (int)$_GET['id'];
    $result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    header("Location: index.php");
} else {
    header("Location: index.php");
}
?>