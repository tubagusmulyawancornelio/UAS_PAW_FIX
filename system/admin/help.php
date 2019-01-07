<?php 
//panggil file session-admin.php untuk menentukan apakah admin atau bukan
include('system/inc/session-admin.php');
//panggil file conn.php untuk menghubung ke server
include('system/config/conn.php');
//panggil file header.php untuk menghubungkan konten bagian atas
include('system/inc/header.php');
//memberi judul halaman
echo '<title>Bantuan - Absen Kit</title>';
//panggil file css.php untuk desain atau tema
include('system/inc/css.php');
//panggil file navi-admin.php untuk menghubungkan navigasi admin ke konten
include('system/inc/nav-admin.php');
?>

	<div class="page-content">
		<div class="container-fluid">
		
			<div class="box-typical box-typical-padding documentation">
			  	<header class="documentation-header">
					<h5 align="center" class="with-border m-t-lg"><strong>Cara Menggunakan AbsenKit (Absensi Siswa Berbasis Web) </strong></h5>
					<div class="documentation-header-by">
						Ditulis  Oleh :
						<div class="avatar-preview avatar-preview-24">
							<img src="system/images/husni.jpg" alt="">
						</div>
						<a href="">Tubagus Mulyawan (1157050169) dan Rifki Mustaid Haqqi (1157050144)</a>, UAS PEMROGRAMAN APLIKASI WEB
					</div>
					</div>
				</header>
			  
				<div class="text-block text-block-typical">
					<p>Setiap user baik Guru diperbolehkan untuk mengedit nama, username, maupun password yang sudah ada.</p>
				    <p> Untuk sekretaris, anda bertugas untuk mengabsen siswa menurut kelasnya masing-mansing. </p>
					<p>Untuk Guru Piket, anda dapat melihat siapa siswa yang tidak hadir hari ini, dengan catatan siswa tersebut telah trabsen oleh sekretaris. </p>
				</div>
			</div><!--.box-typical-->
			
		</div><!--.container-fluid-->
	</div><!--.page-content-->

<?php 
//panggil file footer.php untuk menghubungkan konten bagian bawah
include('system/inc/footer.php');
?>
