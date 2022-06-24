<div class="container-fluid">

	<!-- Page Heading -->
	<div class="container">
		<div class="row justify">
			<div class="col col-lg-6">
				<h3>Product Form:</h3>
				<form class="informasi_hotspot" method="post" action="<?= base_url('information/save'); ?>">
					<div class="form-group">
						<label for="hotspot_id">Category</label>
						<select class="form-control form-control-informasi_hotspot" name="hotspot_id" id="hotspot_id" required>
							<option value="">No Selected</option>
							<?php foreach ($category as $row) : ?>
								<option value="<?php echo $row->id; ?>"><?php echo $row->nama; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="nama">judul</label>
						<input type="text" class="form-control form-control-informasi_hotspot" id="nama" name="nama">
					</div>
					<div class="form-group">
						<label for="isi_post">informasi</label>
						<textarea type="text" class="form-control form-control-informasi_hotspot" id="isi_post" name="isi_post" rows="10" cols="30"></textarea>
					</div>
					<button type="submit" class="btn btn-primary btn-user">
						Upload
					</button>

					<a href="<?php echo base_url(); ?>information" class="btn btn-success">Back</a>
				</form>
			</div>
		</div>

	</div>

</div>
