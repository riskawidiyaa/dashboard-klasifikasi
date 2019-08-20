<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Klasifikasi Algoritma C4.5 - Dashboard</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
	<!--/.navbar-->
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Data</span>Mining</a>
			</div>
		</div>
	</nav>
	<!--/.end-of-navbar-->
	<!--/.main-->	
	<div class="main">

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="large">
							<p align="center">Klasifikasi Kesiapan Siswa SMA Melanjutkan Pendidikan</p>
							<p align="center">ke Perguruan Tinggi Negeri</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3">
					<div class="panel panel-default">
						<div class="panel-body easypiechart-panel">
							<h4>Siswa</h4>
							<div class="easypiechart" id="easypiechart-orange" data-percent="100" ><span class="percent">141</span></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3">
					<div class="panel panel-default">
						<div class="panel-body easypiechart-panel">
							<h4>Kriteria</h4>
							<div class="easypiechart" id="easypiechart-red" data-percent="100" ><span class="percent">7</span></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3">
					<div class="panel panel-default">
						<div class="panel-body easypiechart-panel">
							<h4>Label</h4>
							<div class="easypiechart" id="easypiechart-teal" data-percent="100" ><span class="percent">2</span></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3">
					<div class="panel panel-default">
						<div class="panel-body easypiechart-panel">
							<h4>Algoritma</h4>
							<div class="easypiechart" id="easypiechart-blue" data-percent="100" ><span class="percent" style="color:#30a5ff;">C4.5</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-body">
					<h1 align="center">Input Data Siswa</h1><br>
						<form class="form-horizontal" action="aksi.php" method="post">
						<div class="form-group">
    						<label class="control-label col-sm-2">Nama Siswa:</label>
    							<div class="col-sm-10">
      								<input type="text" name="nama_siswa" class="form-control" placeholder="Nama Lengkap Siswa">
    							</div>
  						</div>
  						<div class="form-group">
    						<label class="control-label col-sm-2">Rata-rata Nilai Pengetahuan:</label>
    							<div class="col-sm-10">
									<label><input type="radio" name="nilai_pengetahuan" value="Amat Baik"> 86 - 100</label><br>
									<label><input type="radio" name="nilai_pengetahuan" value="Baik"> 76 - 85</label><br>
									<label><input type="radio" name="nilai_pengetahuan" value="Cukup"> 61 - 75</label><br>
									<label><input type="radio" name="nilai_pengetahuan" value="Kurang"> < 60 </label><br>
    							</div>
  						</div>
  						<div class="form-group">
    						<label class="control-label col-sm-2">Rata-rata Nilai Praktik:</label>
    							<div class="col-sm-10">
									<label><input type="radio" name="nilai_praktik" value="Amat Baik"> 86 - 100</label><br>
									<label><input type="radio" name="nilai_praktik" value="Baik"> 76 - 85</label><br>
									<label><input type="radio" name="nilai_praktik" value="Cukup"> 61 - 75</label><br>
									<label><input type="radio" name="nilai_praktik" value="Kurang"> < 60 </label><br>
    							</div>
  						</div>
  						<div class="form-group">
    						<label class="control-label col-sm-2">Mendaftar SNMPTN:</label>
    							<div class="col-sm-10">
									<label><input type="radio" name="minat_kuliah" value="Ya"> Ya</label><br>
									<label><input type="radio" name="minat_kuliah" value="Tidak"> Tidak</label><br>
    							</div>
  						</div>
  						<div class="form-group">
    						<label class="control-label col-sm-2">Penghasilan Orangtua:</label>
    							<div class="col-sm-10">
									<label><input type="radio" name="penghasilan_ortu" value="Rendah"> < Rp.500.000</label><br>
									<label><input type="radio" name="penghasilan_ortu" value="Tinggi"> > Rp.500.000</label><br>
    							</div>
							</div>
						<div class="form-group">
    						<label class="control-label col-sm-2">Catatan Absensi:</label>
    							<div class="col-sm-10">
									<label><input type="radio" name="absensi" value="Buruk"> Sering Bolos</label><br>
									<label><input type="radio" name="absensi" value="Baik"> Tidak Ada</label><br>
    							</div>
  						</div>
						<div class="form-group">
    						<label class="control-label col-sm-2">Catatan Merokok:</label>
    							<div class="col-sm-10">
									<label><input type="radio" name="merokok" value="Ya"> Sering Merokok</label><br>
									<label><input type="radio" name="merokok" value="Tidak"> Tidak Ada</label><br>
    							</div>
  						</div>
						<div class="form-group">
    						<label class="control-label col-sm-2">Catatan Kelengkapan Atribut:</label>
    							<div class="col-sm-10">
									<label><input type="radio" name="disiplin" value="Tidak"> Sering Terkena Razia</label><br>
									<label><input type="radio" name="disiplin" value="Ya"> Tidak Ada</label><br>
    							</div>
  						</div>
  						<div class="form-group">
    						<div class="col-sm-offset-2 col-sm-10">
      						<button type="submit" name="submit" class="btn btn-warning" >Submit</button>
    						</div>
  						</div>
							</form> 
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-body">
					<h1 align="center">Hasil Klasifikasi</h1>
						<div class="large">
						<br><br><br><br>
						<?php
							$conn = new mysqli("localhost", "root", "", "datmin");
							if ($conn->connect_errno) {
								echo "Failed to connect to MySQL: " . $conn->connect_error;
							}
								
							$res = $conn->query("SELECT nama_siswa, nilai_pengetahuan, nilai_praktik, minat_kuliah, penghasilan_ortu, absensi, merokok FROM data_uji ORDER BY id DESC LIMIT 1;");
							while($row = $res->fetch_assoc()){

								$nilai1 = $row['nilai_pengetahuan'];
								$nilai2 = $row['nilai_praktik'];
								$minkul = $row['minat_kuliah'];
								$po = $row['penghasilan_ortu'];
								$absen = $row['absensi'];
								$rokok = $row['merokok'];

								if ($po == "Tinggi") {	
									if ($absen == "Baik") {
										if ($rokok == "Ya") {
											echo '<p align="center">Hai <strong>'.$row['nama_siswa'].'</strong>, sepertinya kamu belum siap melanjutkan ke perguruan tinggi negeri yah.</p>';
										} else {
											echo '<p align="center">Hai <strong>'.$row['nama_siswa'].'</strong>, wah sepertinya kamu sudah siap melanjutkan ke perguruan tinggi negeri ya!</p>';
										}
									} else {
										echo '<p align="center">Hai <strong>'.$row['nama_siswa'].'</strong>, sepertinya kamu belum siap melanjutkan ke perguruan tinggi negeri yah.</p>';
									}
								} else {
									if ($minkul == "Tidak") {
										if ($nilai1 == "Baik") {
											if ($nilai2 == "Amat Baik") {
												echo '<p align="center">Hai <strong>'.$row['nama_siswa'].'</strong>, wah sepertinya kamu sudah siap melanjutkan ke perguruan tinggi negeri ya!</p>';
											} else {
												echo '<p align="center">Hai <strong>'.$row['nama_siswa'].'</strong>, sepertinya kamu belum siap melanjutkan ke perguruan tinggi negeri yah.</p>';
											} 
										} elseif ($nilai1 == "Cukup") {
											echo '<p align="center">Hai <strong>'.$row['nama_siswa'].'</strong>, sepertinya kamu belum siap melanjutkan ke perguruan tinggi negeri yah.</p>';
										} elseif ($nilai1 == "Kurang") {
											echo '<p align="center">Hai <strong>'.$row['nama_siswa'].'</strong>, sepertinya kamu belum siap melanjutkan ke perguruan tinggi negeri yah.</p>';
										} else {
											echo '<p align="center">Hai <strong>'.$row['nama_siswa'].'</strong>, wah sepertinya kamu sudah siap melanjutkan ke perguruan tinggi negeri ya!</p>';
										}
									} else {
										echo '<p align="center">Hai <strong>'.$row['nama_siswa'].'</strong>, wah sepertinya kamu sudah siap melanjutkan ke perguruan tinggi negeri ya!</p>';
									}
								}
								

							}
						?>
						<br><br><br><br><br>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>	<!--/.end-of-main-->
	
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	<script src="assets/js/custom.js"></script>
		
</body>
</html>