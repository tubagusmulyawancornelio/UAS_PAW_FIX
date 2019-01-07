<?php 
//panggil file session-guru.php untuk menentukan apakah guru atau bukan
include('system/inc/session-guru.php');
//panggil file conn.php untuk menghubung ke server
include('system/config/conn.php');
//panggil file header.php untuk menghubungkan konten bagian atas
include('system/inc/header.php');
//memberi judul halaman
echo '<title>Tentang - Absen Kit</title>';
//panggil file css.php untuk desain atau tema
include('system/inc/css.php');
//panggil file navi-guru.php untuk menghubungkan navigasi guru ke konten
include('system/inc/nav-guru.php');
?>

	<div class="page-content">
		<div class="container-fluid">
			<div class="box-typical box-typical-padding documentation">
				<header class="documentation-header">
					<h5 align="center" class="with-border m-t-lg"><strong>Tentang Aplikasi AbsenKit (Absensi Siswa Berbasis Web) </strong></h5>
					<div class="documentation-header-by">
						Ditulis  Oleh :
						<div class="avatar-preview avatar-preview-24">
						<img src="system/images/husni.jpg" alt="">
						</div>
						<a href="">ubagus Mulyawan (1157050169) dan Rifki Mustaid Haqqi (1157050144)</a>, UAS PEMROGRAMAN APLIKASI WEB
					</div>
					</div>
				</header>
			  
				<div class="text-block text-block-typical">
					<p>Aplikasi ini bernama AbsenKit atau absensi siswa berbasis web.  Sengaja dibuat oleh ubagus Mulyawan (1157050169) dan Rifki Mustaid Haqqi (1157050144).</p>
				 	<p>Fungsi dari AbsenKit ini adalah menyimpan data absensi siswa kemudian disimpan ke database. Aplikasi ini juga dapat menampilkan data absensi siswa yang sebelumnya telah dibuat. </p>
					<p>Kelebihan dari aplikasi ini adalah kita bisa menghemat biaya untuk membeli kertas, karena aplikasi AbsenKit ini lebih efisien dan dapat mudah diakses diperangkat mana saja, asalkan ada sedikit koneksi internet. </p>
				</div>
			</div><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

<?php 
//panggil file footer.php untuk menghubungkan konten bagian bawah
include('system/inc/footer.php');
?>

