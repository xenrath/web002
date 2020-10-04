<?php 
	require_once "../config/config.php";
    require "../assets/libs/vendor/autoload.php";

    use Ramsey\Uuid\Uuid;
	use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

	if (isset($_POST['add'])) {
		$uuid = Uuid::uuid4()->toString();
		$identitas = trim(mysqli_real_escape_string($con, $_POST['identitas']));
		$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
		$jk = trim(mysqli_real_escape_string($con, $_POST['jk']));
		$alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
		$telp = trim(mysqli_real_escape_string($con, $_POST['telp']));
		$sql_cek_identitas = mysqli_query($con, "SELECT * FROM tb_pasien WHERE nomor_identitas = '$identitas'") or die (mysqli_error($con));
		if (mysqli_num_rows($sql_cek_identitas) > 0 ) {
			echo "<script>alert('Nomor identitas sudah ada !'); window.location='add.php';</script>";
		}else{
			mysqli_query($con, "INSERT INTO tb_pasien (id_pasien, nomor_identitas, nama_pasien, jenis_kelamin, alamat, no_telp) VALUES ('$uuid', '$identitas', '$nama', '$jk', '$alamat', '$telp')") or die (mysqli_error($con));
			echo "<script>window.location='data.php';</script>";
		}
	}else if (isset($_POST['edit'])) {
		$id = $_POST['id'];
		$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
		$spesialis = trim(mysqli_real_escape_string($con, $_POST['spesialis']));
		$alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
		$telp = trim(mysqli_real_escape_string($con, $_POST['telp']));
		mysqli_query($con, "UPDATE tb_dokter SET nama_dokter = '$nama', spesialis = '$spesialis', alamat = '$alamat', no_telp = '$telp' WHERE id_dokter = '$id'") or die (mysqli_error($con));
		echo "<script>window.location='data.php';</script>";
	}
 ?>