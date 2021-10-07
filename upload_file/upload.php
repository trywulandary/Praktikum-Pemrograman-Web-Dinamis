<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
$deskripsi = $_POST['deskripsi'];

$direktori = "c:/Xampp/htdocs/PWD1/upload_file/$nama_file";

if (move_uploaded_file($lokasi_file, $direktori)) {
    echo "Nama File : <b>$nama_file</b> berhasil diupload <br>";
    echo "Deskripsi File : <br>$deskripsi";
} else {
    echo "File gagal diupload";
}