<?php 
	include_once('../header.php');
 ?>

<div class="box">
	<h1>Pasien</h1>
	<h4>
		<small>Data Pasien</small>
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Pasien</a>
		</div>
	</h4>
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nomor Identitas</th>
					<th>Nama Pasien</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th>No. Telpon</th>
					<th><i class="glyphicon glyphicon-cog"></i></th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<?php 
	include_once('../footer.php');
 ?>