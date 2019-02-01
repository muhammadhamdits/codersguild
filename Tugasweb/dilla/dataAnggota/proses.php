<?php  

require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;


if(isset($_POST['add'])) {
	$id        = Uuid::uuid4()->toString();
	$nim       = htmlspecialchars($_POST['nim']);
	$nama      = htmlspecialchars($_POST['nama']);
	$email     = htmlspecialchars($_POST['email']);
	$jekel     = htmlspecialchars($_POST['jekel']);
	$tmp_lahir = htmlspecialchars($_POST['tmp_lahir']);
	$tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);
	$agama     = htmlspecialchars($_POST['agama']);
	$goldar    = htmlspecialchars($_POST['goldar']);
	$sma       = htmlspecialchars($_POST['sma']);
	$alamat    = htmlspecialchars($_POST['alamat']);
	$no_hp     = htmlspecialchars($_POST['no_hp']);
	$hobi      = htmlspecialchars($_POST['hobi']);
	$prestasi  = htmlspecialchars($_POST['prestasi']);
	$skill     = htmlspecialchars($_POST['skill']);
	$motto     = htmlspecialchars($_POST['motto']);
	
	$foto = upload();
	if( !$foto ) {
		return false;
	}

	$query = "INSERT INTO tb_anggota (id_anggota, nim, nama, email, jekel, tmp_lahir, tgl_lahir, agama, goldar, sma, alamat, no_hp, hobi, prestasi, skill, motto, foto) VALUES ('$id', '$nim', '$nama', '$email', '$jekel', '$tmp_lahir', '$tgl_lahir', '$agama', '$goldar', '$sma', '$alamat', '$no_hp', '$hobi', '$prestasi', '$skill', '$motto', '$foto')";

	mysqli_query($conn, $query) or die (mysqli_error($conn));
	echo "<script>alert('Data Berhasil disimpan!')</script>";
	echo "<script>window.location='data.php';</script>"; 

} else if(isset($_POST['edit'])) {
	$id = $_POST['id'];
	$nim       = htmlspecialchars($_POST['nim']);
	$nama      = htmlspecialchars($_POST['nama']);
	$email     = htmlspecialchars($_POST['email']);
	$jekel     = htmlspecialchars($_POST['jekel']);
	$tmp_lahir = htmlspecialchars($_POST['tmp_lahir']);
	$tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);
	$agama     = htmlspecialchars($_POST['agama']);
	$goldar    = htmlspecialchars($_POST['goldar']);
	$sma       = htmlspecialchars($_POST['sma']);
	$alamat    = htmlspecialchars($_POST['alamat']);
	$no_hp     = htmlspecialchars($_POST['no_hp']);
	$hobi      = htmlspecialchars($_POST['hobi']);
	$prestasi  = htmlspecialchars($_POST['prestasi']);
	$skill     = htmlspecialchars($_POST['skill']);
	$motto     = htmlspecialchars($_POST['motto']);
	$oldFoto      = $_POST['oldFoto'];

	if( $_FILES["foto"]["error"] === 4 ) {
		$newFoto = $oldFoto;
	} else {
		$newFoto = upload();
	}

	$query = "UPDATE tb_anggota SET 
				nim = '$nim', 
				nama = '$nama',
				email = '$email',
				jekel = '$jekel',
				tmp_lahir = '$tmp_lahir',
				tgl_lahir = '$tgl_lahir',
				agama = '$agama',
				goldar = '$goldar',
				sma = '$sma',
				alamat = '$alamat',
				no_hp = '$no_hp',
				hobi = '$hobi',
				prestasi = '$prestasi',
				skill = '$skill',
				motto = '$motto',
				foto = '$newFoto'
			  WHERE id_anggota = '$id'";

	mysqli_query($conn, $query) or die (mysqli_error($conn));
	echo "<script>alert('Data Berhasil diupdate!')</script>";
	echo "<script>window.location='data.php';</script>"; 
}


function upload() {
	$namaFile   = $_FILES['foto']['name'];
	$ukuranFile = $_FILES['foto']['size'];
	$error      = $_FILES['foto']['error'];
	$tmpName    = $_FILES['foto']['tmp_name'];

	if( $error === 4 ) {
		echo "
			<script>
				alert('Pilih gambar terlebih dahulu!');
			</script>
		";
		echo "<script>window.location='add.php';</script>";
		return false;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "
			<script>
				alert('File yang anda upload bukan gambar!');
			</script>
		";
		echo "<script>window.location='add.php';</script>";
		return false;

	}

	if( $ukuranFile > 1000000 ) {
		echo "
			<script>
				alert('Ukuran gambar terlalu besar!');
			</script>
		";
		echo "<script>window.location='add.php';</script>";
		return false;
	}

			$namaFileBaru = uniqid();
			$namaFileBaru .= '.';
			$namaFileBaru .= $ekstensiGambar;

		move_uploaded_file($tmpName, 'upload/' . $namaFileBaru);

	return $namaFileBaru;
}

?>