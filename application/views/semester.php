<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?php

			echo "Semester";
			?>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>index.php/dashboard/index"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"><?php echo 'Semester'; ?></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<!-- /.box-header -->
					<div class="box-body">
						<button type="button" class="btn btn-primary tambah_lelang" data-toggle="modal" data-target="#tambah_semester"><i class="fa fa-plus"></i> Create Semester</button> <br><br>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Semester</th>
									<th>Tipe Semester</th>


								</tr>
							</thead>
							<tbody id="semua_semester">
								<?php
								$i = 1;
								$semua_semester = $this->M_Semester->semua_semester();
								foreach ($semua_semester as $b) {
									echo '<tr>
					  <td> ' . $i . '</td>
					  <td>' . $b->nama_semester . '</td>
					  <td>' . $b->tipe_semester . '</td>
					  <td>
					  <button type="button" id="' . $b->kode . '"class="btn btn-info edit" data-toggle="modal" data-target="#edit_semester" ><i class="fa fa-edit"></i> Update</button> 
					  <button type="button" id="' . $b->kode . '" class="btn btn-danger hapus" data-toggle="modal" data-target="#hapus_semester" ><i class="fa fa-ban"></i> Delete</button>
					  </td>
					  
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


<div class="modal fade" id="tambah_semester">
	<div class="modal-dialog-tambah">
		<div class="modal-content-tambah">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Create Semester</h4>
			</div>
			<div class="modal-body">
				<div class="box-body">
					<form id="simpan_semester">
						<!-- text input -->

						<div class="form-group">
							<label>Nama Semester</label>
							<input type="text" name="nama" class="form-control" placeholder="Nama Semester">
						</div>
						<div class="form-group">
							<label>Semester Tipe</label>
							<select id="semester_tipe" name="semester_tipe" role="menu" class="form-control">
								<li>
									<option value="1">GANJIL</option>
								</li>
								<li>
									<option value="2">GENAP</option>
								</li>
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


<div class="modal fade" id="edit_semester">
	<div class="modal-dialog">
		<div class="modal-content" id="form_edit">

		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>


<div class="modal fade" id="hapus_semester">
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
				url: '<?php echo base_url('index.php/semester/detail_semester'); ?>',
				data: {
					id: id
				},
				async: false,
				dataType: 'json',
				success: function(data) {
					var html = '';
					var i;
					for (i = 0; i < data.length; i++) {
						if (data[i].semester_tipe == '1') {
							var nama_semester = 'GANJIL';
							var nama_semester2 = 'GENAP';
						} else {
							var semester = '2';
							var nama_semester = 'GENAP';
							var nama_semester2 = 'GANJIL';
						}

						html = '<form class="userregisterModal" id="simpan_edit">' +
							'<div class="modal-header">' +
							'<button type="button" class="close" data-dismiss="modal" aria-label="Close">' +
							'<span aria-hidden="true">&times;</span>' +
							'</button>' +
							'<h4 class="modal-title">Update Semester</h4>' +
							'</div>' +
							'<div class="modal-body">' +
							'<div class="box-body" >' +

							'<div class="form-group">' +
							'<label>Nama Semester</label>' +
							'<input type="text" name="nama" value="' + data[i].nama_semester + '"class="form-control" placeholder="Nama Semester">' +
							'</div>' +
							'<div class="form-group">' +
							'<label>Semester</label>' +
							'<select id = "semester_tipe" name="semester_tipe" role="menu" class="form-control" >' +
							'<li><option value="' + data[i].semester_tipe + '">' + nama_semester + '</option></li>' +
							'<li><option value="' + semester + '">' + nama_semester2 + '</option></li>' +
							'</select>' +
							'</div>' +
							'</div>' +
							'</div>' +
							'<div class="modal-footer">' +
							'<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>' +
							'<button type="submit" class="btn btn-primary" >Save</button>' +
							'</div>' +
							'</form>';
					}
					$('#form_edit').html(html);
				},
				error: function() {
					alert('Could not get Data from Database');
				}
			});

			$('#simpan_edit').submit(function(e) {
				e.preventDefault();
				var formData = new FormData(this);
				$.ajax({
					url: '<?php echo base_url(); ?>index.php/semester/cek_semester',
					type: 'post',
					data: formData,
					dataType: 'json',
					processData: false,
					contentType: false,
					cache: false,
					async: false,
					success: function(data) {
						if (data.success) {
							alert("Semester Sudah ada.");
							$('#simpan_edit')[0].reset();
						} else {
							$.ajax({
								url: '<?php echo base_url(); ?>index.php/semester/simpan_edit/' + id,
								type: 'post',
								data: formData,
								dataType: 'json',
								processData: false,
								contentType: false,
								cache: false,
								async: false,
								success: function(data) {
									if (data == true) {
										alert("Berhasil Mengedit Semester");
										document.location.reload(true);
									} else {
										alert('Gagal mengedit Semester');
									}
									$('#edit_semester').modal('hide');
									$('#simpan_edit')[0].reset();

								},
								error: function() {
									alert('Could not get Data from Database');

								}
							});
						}
						$('#tambah_semester').modal('hide');
						$('#simpan_semester')[0].reset();

					},
					error: function() {
						alert('Could not get Data from Database');

					}
				});

			});
		});

		$('#simpan_semester').submit(function(e) {
			e.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: '<?php echo base_url(); ?>index.php/semester/cek_semester',
				type: 'post',
				data: formData,
				dataType: 'json',
				processData: false,
				contentType: false,
				cache: false,
				async: false,
				success: function(data) {
					if (data.success) {
						alert("Semester Sudah ada.");
						$('#simpan_semester')[0].reset();
					} else {
						$.ajax({
							url: '<?php echo base_url(); ?>index.php/semester/simpan_semester',
							type: 'post',
							data: formData,
							dataType: 'json',
							processData: false,
							contentType: false,
							cache: false,
							async: false,
							success: function(data) {
								if (data == true) {
									alert("Berhasil Menambahkan Semester.");
									$('#tambah_semester').modal('hide');
									$('#simpan_semester')[0].reset();
									document.location.reload(true);
								} else {
									alert('Gagal Menambahkan Semester');
								}
								$('#tambah_semester').modal('hide');
								$('#simpan_semester')[0].reset();

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
		$('.hapus').on("click", function() {
			var id = this.id;
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url('index.php/semester/detail_semester'); ?>',
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
							'<h4 class="modal-title">Delete Semester ' + data[i].nama_semester + ' ?</h4>' +
							'</div>' +

							'<div class="modal-footer">' +
							'<button type="button" class="btn btn-success pull-left" data-dismiss="modal">Csncel</button>' +
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
					url: '<?php echo base_url(); ?>index.php/semester/hapus_semester/' + id,
					dataType: 'json',
					processData: false,
					contentType: false,
					cache: false,
					async: false,
					success: function(data) {
						if (data == true) {
							alert("Berhasil Menghapus Semester.");
							document.location.reload(true);
						} else {
							alert('Gagal menghapus Semester');
						}
						$('#hapus_semester').modal('hide');

					},
					error: function() {
						alert('Could not get Data from Database');

					}
				});


			});

		});


	});
</script>