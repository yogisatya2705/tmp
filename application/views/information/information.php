<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="container">

		<a href="<?php echo base_url(); ?>information/add" class="btn btn-success">Create Information</a>

		<div class="card-body">
			<table class="table table-bordered">
				<tr>
					<th width="5%">No</th>
					<th>Nama</th>
					<th>Informasi</th>
					<th>Action</th>
				</tr>
				<?php
				$no = 1;
				foreach ($user as $row) {
				?>
					<tr>
						<td widtd="5%"><?php echo $no++; ?></td>
						<td><?php echo $row->nama; ?></td>
						<td><?php echo $row->isi_post; ?></td>
						<td>
							<a href="<?php echo base_url(); ?>information/edit/<?php echo $row->id; ?>" class="btn btn-warning">Edit</a>
						</td>
					</tr>
				<?php
				}
				?>
			</table>
			<?php
			echo $this->pagination->create_links();
			?>
		</div>



	</div>

</div>
<!-- /.container-fluid -->
