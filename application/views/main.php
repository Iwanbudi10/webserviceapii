<!DOCTYPE html>
<html>
<head>
	<title>Tugas Rest API</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<style type="text/css">
		.container {
		  padding: 2rem 0rem;
		}

		h4 {
		  margin: 2rem 0rem 1rem;
		}

		.table-image {
		  td, th {
		    vertical-align: middle;
			border:10px;
		  }
		}
	</style>
</head>
<body>
	<div class="container">
  
	
		
		<table class="table table-bordered">
	
    <tr><th>NIM</th><th>NAMA</th><th>ID JURUSAN</th><th>ALAMAT</th><th>AKSI</th></tr>
	<div class="col-md-12" >
				<a class="btn btn-primary" href="<?php echo base_url() ?>main/create">Tambah</a>
			</div>
	<?php foreach($mahasiswa as $row) { ?>
					<tr>
						<td><?php echo $row->nim ?></td>
						<td><?php echo $row->nama ?></td>
						<td><?php echo $row->nama_jurusan ?></td>
						<td><?php echo $row->alamat ?></td>
						<td>
							<a class="btn btn-info" href="<?php echo base_url() ?>main/edit/<?php echo $row->nim ?>"><i class="fas fa-edit"></i></a>
							<a class="btn btn-danger" href="<?php echo base_url() ?>main/delete/<?php echo $row->nim ?>"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>
					<?php } ?>
</div>
</body>
</html>