<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="container">
		<div class="row">
			<div id="panorama"></div>

			<div class="col-md-6">
				<form class="hotspot" method="post" action="<?= base_url('tag/lokasi_6'); ?>">
					<label for="">coordinate</label>
					<div class="form-row align-items-center">
						<div class="col-auto">
							<input type="text" class="form-control form-control-hotspot" id="pitch" name="pitch" placeholder="pitch...">
						</div>
						<div class="col-auto">
							<div class="input-group mb-2">
								<input type="text" class="form-control form-control-hotspot" id="yaw" name="yaw" placeholder="yaw...">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="lokasi">Informasi</label>
						<select type="text" class="form-control form-control-hotspot" id="type" name="type">
							<option value=""></option>
							<option value="informasi">informasi</option>
						</select>
					</div>
					<div class="form-group">
						<label for="lokasi">informasi</label>
						<input type="text" class="form-control form-control-hotspot" id="nama" name="nama" placeholder="type...">
					</div>
					<button type="submit" class="btn btn-primary btn-user">
						Upload
					</button>
				</form>
			</div>

		</div>
		<br />
		<div class="card">
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<th width="5%">No</th>
						<th>lokasi</th>
						<th>Nama</th>
					</tr>
					<?php
					$no = 1;
					foreach ($lokasi6 as $row) {
					?>
						<tr>
							<td widtd="5%"><?php echo $no++; ?></td>
							<td><?php echo $row->pitch; ?>/<?php echo $row->yaw; ?></td>
							<td><?php echo $row->nama; ?></td>
						</tr>
					<?php
					}
					?>
				</table>
			</div>
		</div>

	</div>
</div>


<!-- /.container-fluid -->
