<div class="container">
	<h1>Museum Collection Infromation</h1>
	<a class="btn btn-success" data-toggle="modal" data-target="#create">Create Collection</a>
	<hr>
</div>
<div class="container">
	<div class="container">
		<table border="1" width="600px">
			<tr>
				<th>No</th>
				<th width="400px">Judul</th>
				<th>Action</th>
			</tr>
			<?php
			$no = 1;
			foreach ($users as $u) {
			?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $u->name ?></td>
					<td>
						<a href="<?= base_url() ?>collection/edit/<?= $u->id ?>" class="btn btn-info" role="button">Detail</a>
						<a href="<?= base_url() ?>collection/deletedata/<?= $u->id ?>/<?= $u->foto ?>" class="btn btn-danger" role="button">Hapus</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</div>
<div class="container">
	<?php
	echo $this->pagination->create_links();
	?>
</div>

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<div class="container">
					<h2>Add collection</h2>
					<div class="row">
						<form action="<?= base_url() ?>collection/insertdata" method="post" enctype="multipart/form-data">
							<label>Name collection</label><br>
							<input type="text" name="name" value=""><br><br>
							<label>foto</label><br>
							<input type="file" name="fotopost"><br><br>

							<input type="submit" name="submit" value="Submit" class="btn btn-success">
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
