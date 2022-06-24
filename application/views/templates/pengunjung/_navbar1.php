<div class="site-mobile-menu site-navbar-target">
	<div class="site-mobile-menu-header">
		<div class="site-mobile-menu-close mt-3">
			<span class="icon-close2 js-menu-toggle"></span>
		</div>
	</div>
	<div class="site-mobile-menu-body"></div>
</div>



<header class="site-navbar site-navbar-target py-4" role="banner">

	<div class="col-100">
		<div class="row align-items-center position-relative">

			<div class="col-3 ml-auto text-right order-2">
				<div class="site-logo">
					<img width="75px" heigth="75px" src="<?= base_url('assets/img/profile/undiksha.png') ?>">
					<img width="75px" heigth="75px" src="<?= base_url('assets/img/profile/pti.jpg') ?>">
				</div>
			</div>

			<div class="col-9 ml-auto text-right order-2">

			</div>

			<div class="col-9 order-1 text-left mr-auto">
				<span class=""><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h1 text-dark"></span></a></span>
				<nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
					<ul class="site-menu main-menu js-clone-nav ml-auto ">
						<li><a class="nav-link" data-toggle="modal" data-target="#profil"> Profil</a></li>
						<li><a class="nav-link" data-toggle="modal" data-target="#location">location</a></li>
						<li><a class="nav-link" data-toggle="modal" data-target="#site_plane">Site Plane</a></li>
						<!-- <li><a class="nav-link dark text" data-toggle="modal" data-target="#tag" id="nav_museum">Tag Informasi</a></li> -->
						<li><a class="nav-link" data-toggle="modal" data-target="#museum_col">Museum Collection</a></li>
						<li><a class="nav-link" data-toggle="modal" data-target="#Panorama">Panorama List</a></li>
						<li><a class="nav-link" data-toggle="modal" data-target="#info">Petunjuk</a></li>
						<li><a class="nav-link" data-toggle="modal" data-target="#audio">Audio</a></li>
						<li><a class="nav-link" data-toggle="modal" data-target="#about">Pengembang</a></li>
						<br>
						<br><br><br>
						<li><a class="nav_link" href="<?= base_url('auth'); ?>">Login</a></li>

					</ul>
				</nav>
			</div>


		</div>
	</div>

</header>

<!-- Modal -->
<div class="modal fade" id="about" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 style="text-align:center" class="modal-title" id="exampleModalLabel">Pengembang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card mb-3" width="770" height="460">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="<?= base_url('assets/img/profile/herry.jpeg'); ?>" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<table>
									<tr>
										<td class="text-dark">Nama </td>
										<td class="text-dark">: I Komang Herry Susariantha Sandjaya</td>
									</tr>
									<tr>
										<td class="text-dark">Nim </td>
										<td class="text-dark">: 1815051109</td>
									</tr>
									<tr>
										<td class="text-dark">Program Studi </td>
										<td class="text-dark">: Pendidikan Teknik Informatika</td>
									</tr>
									<tr>
										<td class="text-dark">Jurusan </td>
										<td class="text-dark">: Teknik Informatika</td>
									</tr>
									<tr>
										<td class="text-dark">Universitas </td>
										<td class="text-dark">: Universitas Pendidikan Ganesha</td>
									</tr>
									<tr>
										<td class="text-dark">Email </td>
										<td class="text-dark">: herrysusariantha17@gmail.com</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 style="text-align:center" class="modal-title" id="exampleModalLabel">Penggunaan Virtual Tour</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table>
					<tr>
						<td class="text-dark"><img src="<?= base_url('assets/img/profile/arah.PNG'); ?>" width="100" height="100" class="img-fluid rounded-start" alt="..."> </td>
						<td class="text-dark">Pada icon tanda panah pengunjung akan di arahkan ke lokasi berikutnya. Cara penggunaan icon tersebut pengguna hanya perlu untuk mengeklik, selanjutnya pengguna akan di arahkan ke panorama berikutnya.</td>
					</tr>

					<tr>
						<td class="text-dark"><img src="<?= base_url('assets/img/profile/info.PNG'); ?>" width="100" height="100" class="img-fluid rounded-start" alt="..."> </td>
						<td class="text-dark">Pada icon tanda infromasi sistem akan menunjukkan sebuah informasi. Cara penggunaan icon tersebut pengguna hanya perlu untuk mengeklik, selanjutnya sistem akan menampilkan sebuah informasi yang terdapat pada tag informasi</td>
					</tr>
					<tr>
						<td class="text-dark"><img src="<?= base_url('assets/img/profile/hand.PNG'); ?>" width="100" height="100" class="img-fluid rounded-start" alt="..."> </td>
						<td class="text-dark">Pada krusor penguna hanya perlu mengklik dan menahan untuk menggesekan panorama ke arah yng diinginkna.</td>
					</tr>
					<tr>
						<td class="text-dark"><img src="<?= base_url('assets/img/profile/play.PNG'); ?>" width="100" height="100" class="img-fluid rounded-start" alt="..."></td>
						<td class="text-dark">Pada icon play pengguna dapat menghidupkan audio dan mematikan audio yang terdapat dalam sub menu pada virtual tour.</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="Panorama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 style="text-align:center" class="modal-title" id="exampleModalLabel">Informasi Panorama</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table class="table table-bordered table-hover">
					<div class="row">
						<div class="d-flex flex-wrap justify">
							<?php
							$user = $this->ajaxmodal_model->userGet();
							foreach ($user as $key => $value) {
							?>
								<div class="p-2">
									<div class="card text-center" style="width: 22rem;">
										<img src="<?= base_url() ?>assets/images/<?= $value['gambar'] ?>" class="card-img-top" alt="" width="200px alt=" foto>
										<div class="card-body">
											<h5><?php echo $value['nama'] ?></h5>
										</div>
									</div>
								</div>

							<?php } ?>

						</div>
					</div>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="audio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 style="text-align:center" class="modal-title" id="exampleModalLabel">Pengaturan Audio</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<center>
						<audio controls autoplay>
							<source src="<?= base_url("assets/sound/sekar jepun.mp3") ?>" type="audio/mp3">
						</audio>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="profil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 style="text-align:center" class="modal-title" id="exampleModalLabel">Profil Museum Subak</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card-deck">
					<!-- <div class="card">
						<img class="card-img-top" src="<?= base_url('assets/img/profile/foto.png') ?>" alt="Card image cap">
					</div> -->
					<div class="card">
						<div data-spy="scroll" class="card-body">
							Sejak adanya usaha pertanian di Bali, sistem
							pengaturan air telah dilaksanakan oleh para petani yang
							tergabung dalam lembaga tradisional Subak, yang tumbuh
							berkembang secara swadaya berdasarkan jiwa kekeluargaan
							dan gotong royong yang murni. Dalam perkembangan
							selanjutnya subak yang mandiri mempunyai peranan yang
							sangat berarti dalam mensukseskan program pembangunan
							terutama dalam usaha meningkatkan produksi pangan
							dan pelestarian lingkungan serta sumber-sumber air. Oleh
							karena itu kehidupan dan keberadaan subak sebagai
							warisan budaya bangsa perlu dilestarikan. Pada tanggal 17
							Agustus 1975, I Gusti Ketut Kaler, pakar adat dan agama
							dari Kanwil Departemen Agama Propinsi Bali, mencetuskan
							gagasan melestarikan lembaga adat subak sebagai warisan
							budaya bangsa yang luhur.
							Subak yang ada sejak zaman dahulu (Abad XI)
							dan berkembang hingga kini, masih menempatkan jati diri
							dengan ciri khas kemandirian atas landasan dari subak yaitu
							"Paras-Paros Sarpa Naya Selulung Subayan Taka" (saling
							memberi dan menerima / berat sama dipikul ringan sama
							dijinjing) dan "Tri Hita Karana", tiga penyebab kebahagiaan
							(Tuhan, manusia, dan alamnya).
							Dengan berkembang pesatnya ilmu dan teknologi, tidak
							dipungkiri perkembangan itu berpengaruh pula terhadap
							kehidupan subak baik secara fisik maupun sosialnya. Bila
							hal ini terjadi, dalam waktu singkat berbagai peralatan
							tradisional berganti, dan akan sulit dilacak dan dihimpun
							kembali peralatan yang berjasa dalam kehidupan subak itu,
							karena telah berganti dengan alat-alat modern.
							Atas dasar itulah muncul gagasan untuk
							mempertahankan salah satu wilayah subak yang masih asri lestari untuk dijadikan semacam cagar budaya. Di
							samping dipertahankan sebagai cagar budaya, di tempat
							itu dibangun pula tempat penyimpanan alat atau peralatan
							dan benda-benda yang ada kaitannya dengan usaha tani
							serta kehidupan subak, termasuk di dalamnya dibangun
							rumah tradisional petani yang mengikuti segala aturan asta
							bumi dan asta kosala-kosali, serta tata ruang dan tata letak
							menurut tradisi masyarakat di Bali. Gagasan itu disebut
							"Cagar Budaya Museum Subak", yang selanjutnya bernama
							"MUSEUM SUBAK".
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="location" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header ">
				<h5 class="modal-title justify-content-center" id="exampleModalLabel">Location Museum Subak</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15782.104247577307!2d115.1380888!3d-8.5453051!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23a52875eff3f%3A0x85e1a14c34a27a3b!2sMuseum%20Subak!5e0!3m2!1sid!2sid!4v1651169632417!5m2!1sid!2sid" width="1100" height="460" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
				</iframe>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="site_plane" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Site Plane</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" width="770" height="460">
				<img src="<?= base_url('assets/img/profile/denah.PNG'); ?>" class="img-fluid rounded-start" alt="...">
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="tag" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tag Information</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<center>
					<div class="d-flex flex-wrap" id="_museum">
					</div>
				</center>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="museum_col" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Museum Collection</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body modal-center">
				<table class="table table-bordered table-hover">
					<div class="row">
						<div class="d-flex flex-wrap justify">
							<?php
							$user = $this->ajaxmodal_model->userGetAll();
							foreach ($user as $key => $value) {
							?>
								<div class="p-2">
									<div class="card text-center" style="width: 22rem;">
										<img src="<?= base_url() ?>assets/picture/<?= $value['foto'] ?>" class="card-img-top" alt="" width="200px alt=" foto>
										<div class="card-body">
											<h5><?php echo $value['name'] ?></h5>
										</div>
									</div>
								</div>

							<?php } ?>

						</div>
					</div>
				</table>
			</div>
		</div>
	</div>
</div>
