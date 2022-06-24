<div class="container">

	<div class="card">
		<div class="card-header">Edit Information</div>
		<div class="card-body">
			<?php
			if (validation_errors() != false) {
			?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
			<?php
			}
			?>
			<form method="post" action="<?php echo base_url(); ?>information/update">
				<input type="hidden" name="id" id="id" value="<?php echo $siswa->id; ?>" />
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" value="<?php echo $siswa->nama; ?>" class="form-control" id="nama" name="nama">
				</div>
				<div class="form-group">
					<label for="isi_post">Alamat</label>
					<textarea class="form-control" name="isi_post" id="isi_post" rows="10" cols="30"><?php echo $siswa->isi_post; ?></textarea>
				</div>

				<button type="submit" class="btn btn-primary">Update</button>
				<a href="<?php echo base_url(); ?>information" class="btn btn-success">Back</a>
			</form>
		</div>
	</div>
</div>
