<?php
$conn = mysqli_connect("localhost","root","","tugascg") ;
function query($query) {
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
var_dump($query);

}
return $rows;
}
function tambah($data) {
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$jeka = $data["jeka"];
	$agama = htmlspecialchars($data["agama"]);
	$email = htmlspecialchars($data["email"]);
	$tanggal =$data["tanggal"];
    $tanggal = date('Y-m-d', strtotime($tanggal));
    $tempat = htmlspecialchars($data["tempat"]);
    $hp=htmlspecialchars($data["hp"]);
    $alamat=htmlspecialchars($data["alamat"]);
    $hobi=htmlspecialchars($data["hobi"]);
	$query = "INSERT INTO tes VALUES 
			  ('','$nama','$jeka','$agama','$email','$tanggal','$tempat','$hp','$alamat','$hobi')";
	mysqli_query($conn,$query);



	return mysqli_affected_rows($conn);
}
function hapus($id) {
	global $conn;
	mysqli_query($conn,"DELETE FROM tes WHERE id = $id");
	return mysqli_affected_rows($conn);

}