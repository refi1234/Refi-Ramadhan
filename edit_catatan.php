<?php
$id_catatan = $_GET['id_catatan'];
include'koneksi.php';
$sql = "SELECT*FROM catatan WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);
$value = mysqli_fetch_array($query);
?>

<link href="css/form.css" rel="stylesheet">

<div class="card">
    <div class="card-header">
    <a href="user.php" class="btn btn-primary btn-icon-split">
       <span class="icon text-white-50">
          <i class="fas fa-arrow-left"></i>
            </span>
               <span class="text">Back</span>
   </a>
    </div>
    <div class="card-body">
        <form action="input_edit_perjalanan.php" method="post">
            <input type="hidden" name="id_catatan" value="<?= $id_catatan ?>">
            <div class="form-group">
            <label>Tanggal</label>
            <input value="<?= $value['tanggal'] ?>" name="tanggal" type="date" required class="form-control" placeholder="Masukan Tanggal">
            </div>
        <div class="form-group">
            <label>Jam</label>
            <input value="<?= $value['waktu'] ?>" name="waktu" type="time" required class="form-control" placeholder="Masukan Jam">
        </div>
        <div class="form-group">
            <label>Lokasi</label>
            <input name="lokasi" value="<?= $value['lokasi'] ?>" type="text" required class="form-control" placeholder="Masukan Lokasi">
        </div>
        <div class="form-group">
            <label>Suhu</label>
            <input name="suhu" value="<?= $value['suhu'] ?>" type="text" required class="form-control" placeholder="Masukan Suhu">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="submit" class="btn btn-warning">Hapus</button>
        <div>
    </form>
    </div>
</div>