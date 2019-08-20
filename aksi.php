<?php
include 'koneksi.php';

/* cek koneksi */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$nama_siswa           = $_POST['nama_siswa'];
$nilai_pengetahuan    = $_POST['nilai_pengetahuan'];
$nilai_praktik        = $_POST['nilai_praktik'];
$minat_kuliah         = $_POST['minat_kuliah'];
$penghasilan_ortu     = $_POST['penghasilan_ortu'];
$absensi              = $_POST['absensi'];
$merokok              = $_POST['merokok'];
$disiplin             = $_POST['disiplin'];

$query  = "INSERT INTO data_uji (nama_siswa, nilai_pengetahuan, nilai_praktik, minat_kuliah, penghasilan_ortu, absensi, merokok, disiplin) VALUES ('$nama_siswa','$nilai_pengetahuan','$nilai_praktik','$minat_kuliah','$penghasilan_ortu','$absensi','$merokok','$disiplin');";
mysqli_query($koneksi, $query);

header("location:index.php");
?>