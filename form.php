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
        <form action="input_perjalanan.php" method="post">
            <div class="form-group">
            <label>Tanggal</label>
            <input name="tanggal" type="date" required class="form-control" placeholder="Masukan Tanggal">
            </div>
        <div class="form-group">
            <label>Jam</label>
            <input name="waktu" type="time" required class="form-control" placeholder="Masukan Jam">
        </div>
        <div class="form-group">
            <label>Lokasi</label>
            <input name="lokasi" type="text" required class="form-control" placeholder="Masukan Lokasi">
        </div>
        <div class="form-group">
            <label>Suhu</label>
            <input name="suhu" type="text" required class="form-control" placeholder="Masukan Suhu">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="submit" class="btn btn-warning">Hapus</button>
        <div>
    </form>
    </div>
</div>