<?php
error_reporting(0);
session_start();
$nama =$_SESSION['nama'];
$nik =$_SESSION['nik'];
$tanggal =$_POST['tanggal'];
$waktu =$_POST['waktu'];
$lokasi =$_POST['lokasi'];
$suhu =$_POST['suhu'];

include'koneksi.php';
$sql = "INSERT INTO catatan(nik,tanggal,waktu,lokasi,suhu) VALUES('$nik','$tanggal','$waktu','$lokasi','$suhu')";
$query = mysqli_query($koneksi, $sql);

if($query){ ?>
    <script>
        alert("Data Catatan Sudah Tersimpan.");
        window.location.assign("user.php?url=catatan_perjalanan");
      </script>
    <?php
}
else{?>
    <script>
        alert("!!! Data Catatan Gagal Tersimpan.");
        window.location.assign("user.php?url=form");
      </script>
    <?php

}
