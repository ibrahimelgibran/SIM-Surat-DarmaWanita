 <!-- Masthead-->
 <header class="masthead">
 	<div class="container">
 		<div class="masthead-subheading">Selamat Datang!</div>
 		<div class="masthead-heading text-uppercase">DHARMA WANITA</div>
 		<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" style="border-radius: 50px;" href="#profil">Lihat Profil</a>
 	</div>
 </header>

 <!-- profil-->
 <section class="page-section" id="profil">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Profil</h2>
 			<h3 class="section-subheading text-muted">Tentang Kami</h3>
 		</div>
 		<div class="row text-justify pl-5 pr-5">
 			<p><?= $profil[0]['profile'] ?></p>
 		</div>
 	</div>
 </section>

 <!-- struktur -->
 <section class="page-section bg-light" id="struktur">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">INFORMASI</h2>
 			<h3 class="section-subheading text-muted">Informasi Terupdate</h3>
 		</div>
 		<div class="row">
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#skelurahan">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/');
														echo $profil[0]['s_kelurahan'] ?>"
 							alt="struktur-kelurahan" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Surat</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#slpm">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/');
														echo $profil[0]['s_lpm'] ?>"
 							alt="struktur-LPM" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Surat</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#slinmas">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/');
														echo $profil[0]['s_linmas'] ?>"
 							alt="struktur-linmas" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Surat</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#spemuda">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/');
														echo $profil[0]['s_pemuda'] ?>"
 							alt="struktur-pemuda" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Surat</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#rtrw">
 						<div class="portfolio-hover">
 							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/');
														echo $profil[0]['k_rtrw'] ?>"
 							alt="struktur-rtrw" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Kosong</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>

 <section class="page-section" id="profil">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Info Pengajuan Surat Online</h2>
 			<h3 class="section-subheading text-muted">Tutorial Langkah Pengajuan Surat</h3>
 		</div>
 		<div class="row text-justify pl-5 pr-5">
 			<p>Diberitahukan untuk melakukan Pengajuan Surat Online dimohon untuk melengkapi data dengan benar dan
 				berkas persyaratan untuk Pengajuan Surat Online di Upload. Jika terdapat permasalahan dalam mengisi
 				form Pengajuan Surat Online dimohon kepada pengaju untuk datang langsung ke Kanto,
 				atas perhatiannya terimakasih.</p>
 		</div>
 	</div>
 </section>

 <section class="page-section bg-light" id="struktur">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Collaborasi</h2>
 			<h3 class="section-subheading text-muted">Partner and Sponsor by</h3>
 		</div>
 		<div class="logo-container mt-4">
 			<div class="logo">
 				<img src="<?php echo base_url('collab/iegcode.png'); ?>" alt="IEG Code" />
 				<img src="<?php echo base_url('collab/amikom.png'); ?>" alt="SOIM" />
 				<img src="<?php echo base_url('collab/abadi.png'); ?>" alt="NST" />
 				<img src="<?php echo base_url('collab/gmt.png'); ?>" alt="Buyr" />
 				<img src="<?php echo base_url('collab/cleanee.png'); ?>" alt="Cleanee" />

 			</div>

 		</div>
 	</div>
 </section>

 <style>
 	.logo-container {
 		overflow: hidden;
 		display: flex;
 		align-items: center;
 		position: relative;
 		height: 5rem;
 	}

 	.logo {
 		display: flex;
 		flex-shrink: 0;
 		gap: 3rem;
 		padding: 1rem;
 		animation: infinite-scroll 10s linear infinite;
 	}

 	.logo img {
 		height: 3rem;
 		object-fit: contain;
 	}

 	@keyframes infinite-scroll {
 		from {
 			transform: translateX(0);
 		}

 		to {
 			transform: translateX(-100%);
 		}
 	}

 	@media (max-width: 768px) {
 		.logo-container {
 			height: 4rem;
 		}

 		.logo img {
 			height: 2.5rem;
 		}

 		.logo {
 			gap: 2rem;
 		}
 	}
 </style>

 <script>
 	// Duplicate the logo row for smooth infinite scrolling
 	const logo = document.querySelector(".logo").cloneNode(true);
 	document.querySelector(".logo-container").appendChild(logo);
 </script>