<?php 
// session_start();
// if (!isset($_SESSION["login"])) {
// header("Location: loginadmin.php");
// exit;
// } 
require 'functions2.php';

$id = $_GET["id"];

if(hapus($id)>0)
{
			echo "
		<script>
		alert('data berhasil dihapus');
		document.location.href = 'tes.php';
		</script>
		";
	} else 
	{
		echo "
		<script>
		alert('data gagal dihapus');
		document.location.href = 'tes.php';
		</script>
		";

	}

 ?>