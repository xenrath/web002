<?php 
	require_once "../config/config.php";
    require "../assets/libs/vendor/autoload.php";

    use Ramsey\Uuid\Uuid;
	use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

	if (isset($_POST['add'])) {
		$uuid4 = Uuid::uuid4()->toString();
		$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
		$ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
		mysqli_query($con, "INSERT INTO tb_obat (id_obat, nama_obat, ket_obat) VALUES ('$uuid', '$nama', '$ket')") or die (mysqli_error($con));
		echo "<script>window.location='data.php';</script>";
	}else if (isset($_POST['edit'])) {
		
	}
 ?>