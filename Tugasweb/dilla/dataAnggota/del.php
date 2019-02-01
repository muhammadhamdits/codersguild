<?php  

require_once "../_config/config.php";

mysqli_query($conn, "DELETE FROM tb_anggota WHERE id_anggota = '$_GET[id]'") or die (mysqli_error($conn));

echo "<script>alert('Data Berhasil dihapus!')</script>";
echo "<script>window.location='data.php';</script>"; 

?>