<?php 
	// setting default timezone
	date_default_timezone_set('Asia/Jakarta');
	session_start();

	// koneksi
	$con = mysqli_connect('localhost', 'root', '', 'web002');
	if (mysqli_connect_error()) {
		echo mysqli_connect_error();
	}

	// fungsi base url
	function base_url($url = null)
	{
		$base_url = "http://localhost/web002";
		if ($url != null) {
			return $base_url."/".$url;
		}else{
			return $base_url;
		}
	}
 ?>