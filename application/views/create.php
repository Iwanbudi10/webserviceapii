<!DOCTYPE html>
<html>
<head>
	<title>Tugas kuliah web service</title>
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
		  }
		}
	</style>
</head>
<body>
	<div class="container">
  
 		<div class="row">
			<div class="col-md-12">
				<h3>Tambah Data</h3>
			</div>
		</div>
		<div class="row">
			<div >
				<?php echo form_open('main/create');?>
				<table class="table table-bordered">
				    <tr><td>NIM</td><td><?php echo form_input('nim','',' required');?></td></tr>
				    <tr><td>NAMA</td><td><?php echo form_input('nama','',' required');?></td></tr>
				    <tr><td>JURUSAN</td><td>
				            <select name="jurusan" >
				            <?php
				            foreach ($jurusan as $j){
				                echo "<option value='$j->id_jurusan'>$j->nama_jurusan</option>";
				            }
				            ?>
				            </select>
				        </td></tr>
				    <tr><td>ALAMAT</td><td><?php echo form_input('alamat','','required');?></td></tr>
		
				</table>
				<?php echo form_submit('submit','Simpan','class="btn btn-success"');?>
				        <?php echo anchor('main','Kembali','class="btn btn-warning"');?>
				<?php
				echo form_close();
				?>
			</div>
		</div>
	</div>
</body>
</html>
