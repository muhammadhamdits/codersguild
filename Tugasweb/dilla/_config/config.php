<?php  
	// Setting default timezone
	date_default_timezone_set('Asia/Jakarta');

	session_start();

	// Koneksi
	$conn = mysqli_connect('Localhost', 'root', '', 'tugascg');
	if( mysqli_connect_errno() ) {
		echo mysqli_connect_errno();
	}

	// Fungsi base url
	function base_url( $url = null ) {
		$base_url = "http://localhost/tugasCG";
		if( $url != null ) {
			return $base_url."/".$url;
		} else {
			return $base_url;
		}
	}
?>