<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?= base_url() ?>/assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?= $title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<!-- Bootstrap core CSS     -->
	<link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
	<!--  Material Dashboard CSS    -->
	<link href="<?= base_url() ?>/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="<?= base_url() ?>/assets/css/demo.css" rel="stylesheet" />
	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.css">

</head>

<body>
	<div class="wrapper">
		<div class="sidebar" data-active-color="orange" data-background-color="black" data-image="<?= base_url() ?>/assets/img/sidebar-1.jpg">
			<!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
			<div class="logo">
				<a href="" class="simple-text logo-mini">
					M
				</a>
				<a href="" class="simple-text logo-normal">
					DARMA WANITA
				</a>
			</div>
			<div class="sidebar-wrapper">
				<?php if ($this->session->userdata('id_user') == TRUE) : ?>
					<div class="user">
						<div class="photo">
							<img src="<?= base_url() ?>/assets/img/default-avatar.png" />
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" class="collapsed">
								<span>
									<?php

									$data = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

									?>
									<?= ucfirst($data['username']); ?>
									
								</span>
							</a>
							
							
						</div>
					</div>
				<?php endif; ?>

				<ul class="nav">
					<li class="<?php if ($title == 'Dashboard') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>
						">
						<a href="<?= base_url('dashboard') ?>">
							<i class="material-icons">dashboard</i>
							<p>Dashboard</p>
						</a>
					</li>

							
							<!-- Dashboard Bendahara -->
					<?php if ($this->session->userdata('level') == 'bendahara') : ?>

<li class="
	<?php if ($title == 'Management Surat') : ?>
		<?= 'active'; ?>
	<?php endif; ?>
	">
	<a data-toggle="collapse" href="#pagesExamples">
		<i class="material-icons">email</i>
		<p>Bendahara
			<b class="caret"></b>
		</p>
	</a>
	<div class="
	<?php if ($title == 'Management Surat') : ?>
		<?= 'collapse in'; ?>
	<?php else : ?>
		<?= 'collapse'; ?>
	<?php endif; ?>
	" id="pagesExamples">
		<ul class="nav">
		<li class="
			<?php if ($sub_title == 'Data Buku Bank') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
			
			<a href="<?= base_url() ?>BukuBank/index">
					<!-- <i class="material-icons">book</i> -->
					<p>Buku Bank</p>
				</a>
			</li>

			
			<li class="
			<?php if ($sub_title == 'Data Uang Muka') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>UangMuka/form">
					<!-- <i class="material-icons">book</i> -->
					<p>Buku UYHD</p>
				</a>
			</li>
		</ul>
	
		<?php endif; ?>

		<!-- Dashboard sekretaris -->
		<?php if ($this->session->userdata('level') == 'sekretaris') : ?>

		<li class="
	<?php if ($title == 'Management Surat') : ?>
		<?= 'active'; ?>
	<?php endif; ?>
	">
	<a data-toggle="collapse" href="#pagesExamples">
		<i class="material-icons">email</i>
		<p>Sekretaris
			<b class="caret"></b>
		</p>
	</a>
			<div class="
	<?php if ($title == 'Management Surat') : ?>
		<?= 'collapse in'; ?>
	<?php else : ?>
		<?= 'collapse'; ?>
	<?php endif; ?>
	" id="pagesExamples">
		<ul class="nav">
			<li class="
			<?php if ($sub_title == 'Data kegiatan') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>Kegiatan/index">
					<span class="sidebar-mini">BK</span>
					<span class="sidebar-normal">Buku Kegiatan</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Permasalahan') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>Permasalahan/index">
					<span class="sidebar-mini">BRPI</span>
					<span class="sidebar-normal">Buku Rapat Pengurus Inti</span>
				</a>
			</li>

			<li class="
			<?php if ($sub_title == 'Data Uang Muka') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>UangMuka/form">
					<!-- <i class="material-icons">book</i> -->
					<p>Buku UYHD</p>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Data Inventaris') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>Inventaris/index">
					<!-- <span class="sidebar-mini">BI</span> -->
					<span class="sidebar-normal">Buku Inventaris</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Data Buku Harian') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>BukuHarian/index">
					<!-- <span class="sidebar-mini">BH</span> -->
					<span class="sidebar-normal">Buku Harian</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Data Program Kerja') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>ProgramKerja/index">
					<!-- <span class="sidebar-mini">BPK</span> -->
					<span class="sidebar-normal">Buku Program Kerja</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Buku Pelaksanaan Program Kerja') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>Pelaksanaan/index">
					<!-- <span class="sidebar-mini">BPPK</span> -->
					<span class="sidebar-normal">Buku Pelaksaan Program Kerja</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Buku Bahan Rapat Pengurus Inti') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>Rapat/index">
					<!-- <span class="sidebar-mini">BBRPI</span> -->
					<span class="sidebar-normal">Buku Bahan Rapat Pengurus Inti</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Surat Masuk') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>surat/surat_masuk">
					<!-- <span class="sidebar-mini">M</span> -->
					<span class="sidebar-normal">Surat Masuk</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Surat Keluar') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>surat/surat_keluar">
					<!-- <span class="sidebar-mini">K</span> -->
					<span class="sidebar-normal">Surat Keluar</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Data Induk Anggota DWP') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>DataDwp/index">
					<!-- <span class="sidebar-mini">DWP</span> -->
					<span class="sidebar-normal">Data Induk Anggota DWP Tahun</span>
				</a>
			</li>

			</ul>
			<?php endif; ?>

		<!-- Dashboard Pendidikan -->
		<?php if ($this->session->userdata('level') == 'pendidikan') : ?>

			<li class="
	<?php if ($title == 'Management Surat') : ?>
		<?= 'active'; ?>
	<?php endif; ?>
	">
	<a data-toggle="collapse" href="#pagesExamples">
		<i class="material-icons">email</i>
		<p>Pendidikan
			<b class="caret"></b>
		</p>
	</a>
			<div class="
	<?php if ($title == 'Management Surat') : ?>
		<?= 'collapse in'; ?>
	<?php else : ?>
		<?= 'collapse'; ?>
	<?php endif; ?>
	" id="pagesExamples">
		<ul class="nav">
		<li class="
			<?php if ($sub_title == 'Buku Santunan Pendidikan') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>Santunan/index">
					<!-- <span class="sidebar-mini">BSP</span> -->
					<span class="sidebar-normal">Buku Santunan Pendidikan</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Data Program Kerja') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>ProgramKerja/index">
					<!-- <span class="sidebar-mini">BPK</span> -->
					<span class="sidebar-normal">Buku Program Kerja</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Buku Pelaksanaan Program Kerja') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>Pelaksanaan/index">
					<!-- <span class="sidebar-mini">BPPK</span> -->
					<span class="sidebar-normal">Buku Pelaksaan Program Kerja</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Data kegiatan') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>Kegiatan/index">
					<!-- <span class="sidebar-mini">BK</span> -->
					<span class="sidebar-normal">Buku Kegiatan</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Data Uang Muka') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>UangMuka/form">
					<!-- <i class="material-icons">book</i> -->
					<p>Buku UYHD</p>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Register Pelayanan KB') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>PelayananKB/index">
					<!-- <span class="sidebar-mini">BRKB</span> -->
					<span class="sidebar-normal">Buku Register KB</span>
				</a>
			</li>
			
			</ul>

			<?php endif; ?>

			<!-- Dashboard Ekonomi -->
		<?php if ($this->session->userdata('level') == 'ekonomi') : ?>

			<li class="
	<?php if ($title == 'Management Surat') : ?>
		<?= 'active'; ?>
	<?php endif; ?>
	">
	<a data-toggle="collapse" href="#pagesExamples">
		<i class="material-icons">email</i>
		<p>Ekonomi
			<b class="caret"></b>
		</p>
	</a>
			<div class="
	<?php if ($title == 'Management Surat') : ?>
		<?= 'collapse in'; ?>
	<?php else : ?>
		<?= 'collapse'; ?>
	<?php endif; ?>
	" id="pagesExamples">
		<ul class="nav">
		
			<li class="
			<?php if ($sub_title == 'Data Program Kerja') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>ProgramKerja/index">
					<!-- <span class="sidebar-mini">BPK</span> -->
					<span class="sidebar-normal">Buku Program Kerja</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Buku Pelaksanaan Program Kerja') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>Pelaksanaan/index">
					<!-- <span class="sidebar-mini">BPPK</span> -->
					<span class="sidebar-normal">Buku Pelaksaan Program Kerja</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Data Uang Muka') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>UangMuka/form">
					<!-- <i class="material-icons">book</i> -->
					<p>Buku UYHD</p>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Data kegiatan') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>Kegiatan/index">
					<!-- <span class="sidebar-mini">BK</span> -->
					<span class="sidebar-normal">Buku Kegiatan</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Buku Bahan Rapat Pengurus Inti') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>Rapat/index">
					<!-- <span class="sidebar-mini">BBRPI</span> -->
					<span class="sidebar-normal">Buku Bahan Rapat Pengurus Inti</span>
				</a>
			</li>

			</ul>
			<?php endif; ?>

			<!-- Dashboard SosialBudaya -->
		<?php if ($this->session->userdata('level') == 'sosialbudaya') : ?>
			<li class="
	<?php if ($title == 'Management Surat') : ?>
		<?= 'active'; ?>
	<?php endif; ?>
	">
	<a data-toggle="collapse" href="#pagesExamples">
		<i class="material-icons">email</i>
		<p>sosialbudaya
			<b class="caret"></b>
		</p>
	</a>
			<div class="
	<?php if ($title == 'Management Surat') : ?>
		<?= 'collapse in'; ?>
	<?php else : ?>
		<?= 'collapse'; ?>
	<?php endif; ?>
	" id="pagesExamples">
		<ul class="nav">
		<li class="
			<?php if ($sub_title == 'Data Program Kerja') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>ProgramKerja/index">
					<!-- <span class="sidebar-mini">BPK</span> -->
					<span class="sidebar-normal">Buku Program Kerja</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Buku Pelaksanaan Program Kerja') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>Pelaksanaan/index">
					<!-- <span class="sidebar-mini">BPPK</span> -->
					<span class="sidebar-normal">Buku Pelaksaan Program Kerja</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Buku Bahan Rapat Pengurus Inti') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>Rapat/index">
					<!-- <span class="sidebar-mini">BBRPI</span> -->
					<span class="sidebar-normal">Buku Bahan Rapat Pengurus Inti</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Data Buku Harian') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>BukuHarian/index">
					<!-- <span class="sidebar-mini">BH</span> -->
					<span class="sidebar-normal">Buku Harian</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Data kegiatan') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>Kegiatan/index">
					<!-- <span class="sidebar-mini">BK</span> -->
					<span class="sidebar-normal">Buku Kegiatan</span>
				</a>
			</li>
			<li class="
			<?php if ($sub_title == 'Data Uang Muka') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>UangMuka/form">
					<!-- <i class="material-icons">book</i> -->
					<p>Buku UYHD</p>
				</a>
			</li>

		</ul>
			<?php endif; ?>



							<!-- Dashboard Admin -->
							<?php if ($this->session->userdata('level') == 'administrator') : ?>
								

					<li class="
						<?php if ($title == 'Management Surat') : ?>
							<?= 'active'; ?>
						<?php endif; ?>
						">
						<a data-toggle="collapse" href="#pagesExamples">
							<i class="material-icons">email</i>
							<p>Management Surat
								<b class="caret"></b>
							</p>
						</a>
						<div class="
                        <?php if ($title == 'Management Surat') : ?>
                            <?= 'collapse in'; ?>
                        <?php else : ?>
                            <?= 'collapse'; ?>
                        <?php endif; ?>
                        " id="pagesExamples">
							<ul class="nav">
								<li class="
                                <?php if ($sub_title == 'Pengajuan Surat') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>surat/pengajuan">
										<!-- <span class="sidebar-mini">M</span> -->
										<span class="sidebar-normal">Pengajuan Surat</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Surat Masuk') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>surat/surat_masuk">
										<!-- <span class="sidebar-mini">M</span> -->
										<span class="sidebar-normal">Surat Masuk</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Surat Keluar') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>surat/surat_keluar">
										<!-- <span class="sidebar-mini">K</span> -->
										<span class="sidebar-normal">Surat Keluar</span>
									</a>
								</li>
								<li class="
			<?php if ($sub_title == 'Data Uang Muka') : ?>
				<?= 'active'; ?>
			<?php endif; ?>
			">
				<a href="<?= base_url() ?>UangMuka/form">
					<!-- <i class="material-icons">book</i> -->
					<p>Buku UYHD</p>
				</a>
			</li>
								<!-- <li>
									<a href="https://ieglink.my.id/bukubank">
										<span class="sidebar-mini">BB</span>
										<span class="sidebar-normal">Buku Bank</span>
									</a>
								</li>
								<li>
									<a href="https://ieglink.my.id/bukuuyhd">
										<span class="sidebar-mini">SU</span>
										<span class="sidebar-normal">Buku UYHD</span>
									</a>
								</li> -->
								<li class="
                                <?php if ($sub_title == 'Data kegiatan') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>Kegiatan/index">
										<!-- <span class="sidebar-mini">BK</span> -->
										<span class="sidebar-normal">Buku Kegiatan</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Permasalahan') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>Permasalahan/index">
										<!-- <span class="sidebar-mini">BRPI</span> -->
										<span class="sidebar-normal">Buku Rapat Pengurus Inti</span>
									</a>
								</li>
								<li class="
								<?php if ($sub_title == 'Data Buku Harian') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>BukuHarian/index">
										<!-- <span class="sidebar-mini">BH</span> -->
										<span class="sidebar-normal">Buku Harian</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Data Inventaris') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>Inventaris/index">
										<!-- <span class="sidebar-mini">BI</span> -->
										<span class="sidebar-normal">Buku Inventaris</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Data Program Kerja') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>ProgramKerja/index">
										<!-- <span class="sidebar-mini">BPK</span> -->
										<span class="sidebar-normal">Buku Program Kerja</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Buku Pelaksanaan Program Kerja') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>Pelaksanaan/index">
										<!-- <span class="sidebar-mini">BPPK</span> -->
										<span class="sidebar-normal">Buku Pelaksaan Program Kerja</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Buku Santunan Pendidikan') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>Santunan/index">
										<!-- <span class="sidebar-mini">BSP</span> -->
										<span class="sidebar-normal">Buku Santunan Pendidikan</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Buku Bahan Rapat Pengurus Inti') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>Rapat/index">
										<!-- <span class="sidebar-mini">BBRPI</span> -->
										<span class="sidebar-normal">Buku Bahan Rapat Pengurus Inti</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Register Pelayanan KB') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>PelayananKB/index">
										<!-- <span class="sidebar-mini">BRKB</span> -->
										<span class="sidebar-normal">Buku Register KB</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Data Induk Anggota DWP') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>DataDwp/index">
										<!-- <span class="sidebar-mini">DWP</span> -->
										<span class="sidebar-normal">Data Induk Anggota DWP Tahun</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Data Aktivitas Tahunan') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>Aktivitas/index">
										<!-- <span class="sidebar-mini">DK</span> -->
										<span class="sidebar-normal">Data Kegiatan Tahunan</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Surat Keterangan') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>surat/surat_keterangan">
										<!-- <span class="sidebar-mini">SK</span> -->
										<span class="sidebar-normal">Data Keterangan</span>
									</a>
								</li>
							</ul>
						</div>
					</li>

					<li class="<?php if ($title == 'Notulen') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>
						">
						<a href="<?= base_url('surat/pengajuan') ?>">
							<i class="material-icons">book</i>
							<p>Pengajuan Notulen</p>
						</a>
					</li>

					<li class="
						<?php if ($title == 'Galery') : ?>
							<?= 'active'; ?>
						<?php endif; ?>
						">
						<a data-toggle="collapse" href="#formsExamples">
							<i class="material-icons">image</i>
							<p>Galery
								<b class="caret"></b>
							</p>
						</a>
						<div class="
                        <?php if ($title == 'Galery') : ?>
                            <?= 'collapse in'; ?>
                        <?php else : ?>
                            <?= 'collapse'; ?>
                        <?php endif; ?>
                        " id="formsExamples">
							<ul class="nav">
								<li class="
                                <?php if ($sub_title == 'Profil Kelurahan') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/profil_kelurahan">
										<span class="sidebar-mini">RF</span>
										<span class="sidebar-normal">Profil Darma Wanita</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Struktur Kelurahan') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/s_kelurahan">
										<span class="sidebar-mini">EF</span>
										<span class="sidebar-normal">Surat 1</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Struktur LPM') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/s_lpm">
										<span class="sidebar-mini">VF</span>
										<span class="sidebar-normal">Surat 2</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Struktur Linmas') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/s_linmas">
										<span class="sidebar-mini">W</span>
										<span class="sidebar-normal">Surat 3</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Struktur Pemuda Kelurahan') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/s_pemuda">
										<span class="sidebar-mini">W</span>
										<span class="sidebar-normal">Surat 4</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Ketua RT & RW') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/rt_rw">
										<span class="sidebar-mini">W</span>
										<span class="sidebar-normal">Surat 5</span>
									</a>
								</li>
							</ul>
						</div>
					</li>

					<li class="<?php if ($title == 'Penduduk') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>
						">
						<a href="<?= base_url('penduduk') ?>">
							<i class="material-icons">assignment_ind</i>
							<p>Penduduk</p>
						</a>
					</li>

					<li class="
                        <?php if ($title == 'Management Pegawai') : ?>
                            <?= 'active'; ?>
                        <?php endif; ?>
                            ">
						<a href="<?= base_url() ?>pegawai">
							<i class="material-icons">supervised_user_circle</i>
							<p>Management Pegawai</p>
						</a>
					</li>

					<li class="
                        <?php if ($title == 'Management User') : ?>
                            <?= 'active'; ?>
                        <?php endif; ?>
                            ">
						<a href="<?= base_url() ?>user">
							<i class="material-icons">people</i>
							<p>Management User</p>
						</a>
					</li>

				<?php endif; ?>

				<?php if ($this->session->userdata('id_user') == TRUE) : ?>

					<li>
						<a href="<?= base_url() ?>logout">
							<i class="material-icons">logout</i>
							<p>Logout</p>
						</a>
					</li>

				<?php else : ?>

					<li>
						<a href="<?= base_url() ?>auth/login">
							<i class="material-icons">login</i>
							<p>Login</p>
						</a>
					</li>

				<?php endif; ?>



				</ul>
			</div>
		</div>
		<div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-minimize">
						<button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
							<i class="material-icons visible-on-sidebar-regular">more_vert</i>
							<i class="material-icons visible-on-sidebar-mini">view_list</i>
						</button>
					</div>
					<div class="navbar-header" style="text-align: center; margin: 20px;">
        <button 
            type="button" 
            class="navbar-toggle" 
            data-toggle="collapse" 
            style="
                background-color: #000; 
                border: 1px solid #000; 
                color: #fff; 
                padding: 8px 10px; 
                border-radius: 4px; 
                cursor: pointer;
            "
            onmouseover="this.style.backgroundColor='#333'; this.style.borderColor='#333';" 
            onmouseout="this.style.backgroundColor='#000'; this.style.borderColor='#000';">
            
            <span class="icon-bar" style="
                background-color: #fff; 
                display: block; 
                height: 2px; 
                margin: 4px 0; 
                width: 22px; 
                border-radius: 1px;">
            </span>
            
            <span class="icon-bar" style="
                background-color: #fff; 
                display: block; 
                height: 2px; 
                margin: 4px 0; 
                width: 22px; 
                border-radius: 1px;">
            </span>
            
            <span class="icon-bar" style="
                background-color: #fff; 
                display: block; 
                height: 2px; 
                margin: 4px 0; 
                width: 22px; 
                border-radius: 1px;">
            </span>
        </button>
						<a class="navbar-brand">  </a>
					</div>
					<!-- <div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">



							<li>
								<a href="<?= base_url() ?>auth/login" class="dropdown-toggle">
									<i class="material-icons">login</i>
									<p class="hidden-lg hidden-md">Login</p>
								</a>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">person</i>
									<p class="hidden-lg hidden-md">Profile</p>
								</a>
							</li>
							<li class="separator hidden-lg hidden-md"></li>
						</ul>
						<form class="navbar-form navbar-right" role="search">
							<div class="form-group form-search is-empty">
								<input type="text" class="form-control" placeholder="Search">
								<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i>
								<div class="ripple-container"></div>
							</button>
						</form>
					</div> -->
				</div>
			</nav>