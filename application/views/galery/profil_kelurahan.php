<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
			<?php if ($this->session->flashdata('success') == TRUE) : ?>
			<div class="alert alert-success">
				<span><?= $this->session->flashdata('success'); ?></span>
			</div>
			<?php endif; ?>
				<div class="card">
					<div class="card-header card-header-icon" data-background-color="purple">
						<i class="material-icons">people</i>
					</div>
					<div class="card-content">
						<h4 class="card-title">Profil Darma Wanita</h4>
						<h5 class="text-justify"><?= $profil[0]['profile']?></h5>
						<a href="<?= base_url('galery/edit_profil/')?><?= $profil[0]['id']?>"
							class="btn btn-finish pull-right">Edit</a>
					</div>
					<!-- end content-->
				</div>
				<!--  end card  -->
			</div>
			<!-- end col-md-12 -->
		</div>
		<!-- end row -->
	</div>
</div>
