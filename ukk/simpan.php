<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nis=$_POST["nis"];
$nama=$_POST["nama"];
$jns_kelamin=$_POST["jns_kelamin"];
$tmpt_lahir=$_POST["tmpt_lahir"];
$alamat=$_POST["alamat"];
$asal_sekolah=$_POST["asal_sekolah"];
$kelas=$_POST["kelas"];
$jurusan=$_POST["jurusan"];



//Query input menginput data kedalam tabel anggota
  $sql="insert into siswa (nis,nama,jns_kelamin,tmpt_lahir,alamat,asal_sekolah,kelas,jurusan) values
		('$nis','$nama','$jns_kelamin','$tmpt_lahir','$alamat','$asal_sekolah','$kelas','$jurusan')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data Siswa";
	exit;
  }
else {
	echo "Gagal simpan data Siswa";
	exit;
}  

?>