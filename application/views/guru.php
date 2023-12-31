<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?php

			echo "Dosen";
			?>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>index.php/dashboard/index"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"><?php echo 'Dosen'; ?></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<!-- /.box-header -->
					<div class="box-body">
						<a href="<?php echo base_url(); ?>index.php/status/index"><button id="hapus_jadwal" class="btn btn-success pull-right"><i class="icon-plus"></i> Status</button></a>
						<button type="button" class="btn btn-primary tambah_lelang" data-toggle="modal" data-target="#tambah_guru"><i class="fa fa-plus"></i> Create Dosen</button> <br><br>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>NIP</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Telepon</th>
									<th>Status</th>

									<th></th>

								</tr>
							</thead>
							<tbody id="semua_guru">
								<?php
								$i = 1;
								$semua_guru = $this->M_Guru->semua_guru();
								foreach ($semua_guru as $b) {
									echo '<tr>
					  <td> ' . $i . '</td>
					  <td>' . $b->nip . '</td>
					  <td>' . $b->nama . '</td>
					  <td> ' . $b->alamat . '</td>
					  <td> ' . $b->telp . '</td>
					  <td> ' . $b->status . '</td>
					  <td><button type="button" id="' . $b->kode . '"class="btn btn-info edit" data-toggle="modal" data-target="#edit_guru" ><i class="fa fa-edit"></i> Update</button> <button type="button" id="' . $b->kode . '" class="btn btn-danger hapus" data-toggle="modal" data-target="#hapus_guru" ><i class="fa fa-ban"></i> Delete</button></td>
					  
					</tr>';
									$i++;
								}

								?>

							</tbody>
							<tfoot>
								<tr>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>


<div class="modal fade" id="tambah_guru">
	<div class="modal-dialog-tambah">
		<div class="modal-content-tambah">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Create Dosen</h4>
			</div>
			<div class="modal-body">
				<div class="box-body">
					<form id="simpan_guru">
						<!-- text input -->
						<div class="form-group">
							<label>Nama Dosen</label>
							<input type="text" name="nama" class="form-control" placeholder="Nama">
						</div>
						<div class="form-group">
							<label>NIP</label>
							<input type="text" name="nip" class="form-control" placeholder="NIP">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" class="form-control" placeholder="Alamat">
						</div>
						<div class="form-group">
							<label>Telepon</label>
							<input type="text" name="telepon" class="form-control" placeholder="Telepon">
						</div>
						<div class="form-group">
							<label>Status Dosen</label>
							<select name="status" class="form-control" role="menu">
								<?php
								$status = $this->M_Guru->semua_status();
								foreach ($status as $g) {
									echo '
						<li><option value="' . $g->kode . '">' . $g->status . '</option></li>
						';
								}
								?>
							</select>
						</div>

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>


<div class="modal fade" id="edit_guru">
	<div class="modal-dialog">
		<div class="modal-content" id="form_edit">

		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>


<div class="modal fade" id="hapus_guru">
	<div class="modal-dialog">
		<div class="modal-content" id="form_hapus">

		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<script type='text/javascript'>
	$(document).ready(function() {

		$('.edit').on("click", function() {
			var id = this.id;
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url('index.php/guru/detail_guru'); ?>',
				data: {
					id: id
				},
				async: false,
				dataType: 'json',
				success: function(data) {
					var html = '';
					var i;
					for (i = 0; i < data.length; i++) {

						html = '<form class="userregisterModal" id="simpan_edit">' +
							'<div class="modal-header">' +
							'<button type="button" class="close" data-dismiss="modal" aria-label="Close">' +
							'<span aria-hidden="true">&times;</span>' +
							'</button>' +
							'<h4 class="modal-title">Update Dosen</h4>' +
							'</div>' +
							'<div class="modal-body">' +
							'<div class="box-body" >' +

							'<div class="form-group">' +
							'<label>Nama Guru</label>' +
							'<input type="text" name="nama" value="' + data[i].nama + '"class="form-control" placeholder="Nama">' +
							'</div>' +
							'<div class="form-group">' +
							'<label>NIP</label>' +
							'<input type="text" name="nip"  value="' + data[i].nip + '" class="form-control" placeholder="NIP">' +
							'</div>' +
							'<div class="form-group">' +
							'<label>Alamat</label>' +
							'<input type="text" name="alamat"  value="' + data[i].alamat + '" class="form-control" placeholder="Alamat">' +
							'</div>' +
							'<div class="form-group">' +
							'<label>Telepon</label>' +
							'<input type="text" name="telepon"  value="' + data[i].telp + '" class="form-control" placeholder="Telepon">' +
							'</div>' +
							'<div class="form-group">' +
							'<label>Status Dosen</label>' +
							'<select id="status_edit" name="status" role="menu" class="form-control"  >' +
							'<option value="' + data[i].kode_status + '">' + data[i].status + '</option>' +
							'</select>' +
							'</div>' +
							'</div>' +
							'</div>' +
							'<div class="modal-footer">' +
							'<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>' +
							'<button type="submit" class="btn btn-primary" >Save</button>' +
							'</div>' +
							'</form>';

						$('#form_edit').html(html);
						$.ajax({
							type: 'ajax',
							method: 'get',
							url: '<?php echo base_url('index.php/status/semua_status'); ?>',
							async: false,
							dataType: 'json',
							success: function(data) {
								var html = '';
								var j;
								for (j = 0; j < data.length; j++) {
									html += '<option value="' + data[j].kode + '">' + data[j].status + '</option>';
								}
								$('#status_edit').append(html);
							},
							error: function() {
								alert('Could not get Data from Database');
							}
						});
					}
				},
				error: function() {
					alert('Could not get Data from Database');
				}
			});

			$('#simpan_edit').submit(function(e) {
				e.preventDefault();
				var formData = new FormData(this);
				$.ajax({
					url: '<?php echo base_url(); ?>index.php/guru/cek_guru/' + id,
					type: 'post',
					data: formData,
					dataType: 'json',
					processData: false,
					contentType: false,
					cache: false,
					async: false,
					success: function(data) {
						if (data.success) {
							alert("Guru Sudah ada.");
							$('#simpan_edit')[0].reset();
						} else {
							$.ajax({
								url: '<?php echo base_url(); ?>index.php/guru/simpan_edit/' + id,
								type: 'post',
								data: formData,
								dataType: 'json',
								processData: false,
								contentType: false,
								cache: false,
								async: false,
								success: function(data) {
									if (data == true) {
										alert("Berhasil Mengedit Dosen.");
										$('#edit_guru').modal('hide');
										$('#simpan_edit')[0].reset();
										document.location.reload(true);
									} else {
										alert('Gagal mengedit Dosen');
									}
									$('#edit_guru').modal('hide');
									$('#simpan_edit')[0].reset();

								},
								error: function() {
									alert('Could not get Data from Database');

								}
							});
						}

					},
					error: function() {
						alert('Could not get Data from Database');

					}
				});


			});
		});

		$('#simpan_guru').submit(function(e) {
			e.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: '<?php echo base_url(); ?>index.php/guru/cek_guru_awal',
				type: 'post',
				data: formData,
				dataType: 'json',
				processData: false,
				contentType: false,
				cache: false,
				async: false,
				success: function(data) {
					if (data.success) {
						alert("Guru Sudah ada.");
						document.location.reload(true);
					} else {
						$.ajax({
							url: '<?php echo base_url(); ?>index.php/guru/simpan_guru',
							type: 'post',
							data: formData,
							dataType: 'json',
							processData: false,
							contentType: false,
							cache: false,
							async: false,
							success: function(data) {
								if (data == true) {
									alert("Berhasil Menambahkan Dosen.");
									document.location.reload(true);
								} else {
									alert('Gagal Menambahkan Dosen');
								}
								$('#tambah_guru').modal('hide');
								$('#simpan_guru')[0].reset();

							},
							error: function() {
								alert('Could not get Data from Database');

							}
						});
					}
					$('#tambah_guru').modal('hide');
					$('#simpan_guru')[0].reset();

				},
				error: function() {
					alert('Could not get Data from Database');

				}
			});



		});
		$('.hapus').on("click", function() {
			var id = this.id;
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url('index.php/guru/detail_guru'); ?>',
				data: {
					id: id
				},
				async: false,
				dataType: 'json',
				success: function(data) {
					var html = '';
					var i;
					for (i = 0; i < data.length; i++) {

						html = '<form class="userregisterModal" id="delete">' +
							'<div class="modal-header">' +
							'<button type="button" class="close" data-dismiss="modal" aria-label="Close">' +
							'<span aria-hidden="true">&times;</span>' +
							'</button>' +
							'<h4 class="modal-title">Delete Dosen ' + data[i].nama + ' ?</h4>' +
							'</div>' +

							'<div class="modal-footer">' +
							'<button type="button" class="btn btn-success pull-left" data-dismiss="modal">Batal</button>' +
							'<button type="submit" class="btn btn-danger" >Delete</button>' +
							'</div>' +
							'</form>';
					}
					$('#form_hapus').html(html);
				},
				error: function() {
					alert('Could not get Data from Database');
				}
			});
			$('#delete').submit(function() {

				$.ajax({
					url: '<?php echo base_url(); ?>index.php/guru/hapus_guru/' + id,
					dataType: 'json',
					processData: false,
					contentType: false,
					cache: false,
					async: false,
					success: function(data) {
						if (data == true) {
							alert("Berhasil Menghapus Dosen.");
							document.location.reload(true);
						} else {
							alert('Gagal menghapus Dosen');
						}
						$('#hapus_guru').modal('hide');

					},
					error: function() {
						alert('Could not get Data from Database');

					}
				});


			});

		});


	});
</script>