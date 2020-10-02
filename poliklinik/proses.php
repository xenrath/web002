<?php 
	require_once "../config/config.php";
    require "../assets/libs/vendor/autoload.php";

    use Ramsey\Uuid\Uuid;
	use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

	if (isset($_POST['add'])) {
		$total = $_POST['total'];
		for ($i=1; $i <= $total ; $i++) { 
			$uuid = Uuid::uuid4()->toString();
			$nama = trim(mysqli_real_escape_string($con, $_POST['nama-'.$i]));
			$gedung = trim(mysqli_real_escape_string($con, $_POST['gedung-'.$i]));	
			$sql = mysqli_query($con, "INSERT INTO tb_poliklinik (id_poli, nama_poli, gedung) VALUES ('$uuid', '$nama', '$gedung')") or die (mysqli_error($con));
		}

		if ($sql) {
			echo "<script>alert('".$total." data berhasil ditambahkan'); window.location='data.php';</script>";
		}else{
			echo "<script>alert('Gagal tambah data coba lagi'); window.location='generate.php';</script>";			
		}
	}else if (isset($_POST['edit'])) {
		$id = $_POST['id'];
		$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
		$ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
		mysqli_query($con, "UPDATE tb_obat SET nama_obat = '$nama', ket_obat = '$ket' WHERE id_obat = '$id'") or die (mysqli_error($con));
		echo "<script>window.location='data.php';</script>";
	}
 ?>