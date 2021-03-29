<?php
include "koneksi.php"
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="container">
<h2>Form Pendaftaran Siswa</h2>
    <form action="simpan.php" method="post">
        <div class="form-group">
            <label>NIS:</label>
            <input type="number" name="nis" class="form-control" placeholder="Masukan nis" />
        </div>
	<div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
        </div>
    <div class="form-group">
            <label>Jenis Kelamin:</label>
            <input type="text" name="jns_kelamin" class="form-control" placeholder="Masukan data Jenis Kelamin" />
        </div>
    <div class="form-group">
            <label>TTL:</label>
            <input type="text" name="tmpt_lahir" class="form-control" placeholder="Masukan dat Tempat,tanggal lahir" />
        </div>
	<div class="form-group">
	     <label>Alamat:</label>
	     <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" ></textarea>
	</div> 
	<div class="form-group">
            <label>Asal Sekolah:</label>
            <input type="text" name="asal_sekolah" class="form-control" placeholder="Masukan data Asal Sekolah anda" />
        </div>
	<div class="form-group">
            <label>Kelas :</label>
            <input type="text" name="kelas" class="form-control" placeholder="Masukan kelas" />
        </div>
	<div class="form-group">
            <label>Jurusan :</label>
            <input type="text" name="jurusan" class="form-control" placeholder="Masukan data jurusan" />
        </div>

        <button type="submit" name="submit" class="btn btn-primary" >Submit</button>

    </form>
</div>
</body>
</html>