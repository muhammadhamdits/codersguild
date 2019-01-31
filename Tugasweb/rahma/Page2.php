<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title>Pendaftaran Club</title>
	<style media="screen"></style>
	<style type="text/javascript"></style>
</head>
<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<?php
$koneksi=mysqli_connect("localhost","root","","tugasweb1") or die(mysqli_error()); ?>
<div class="p-3 mb-2 bg-info text-white">
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <span class="navbar-text">
    Wants to know us more? Go follow our social media!
    <a href="https://www.instagram.com/p/BqKFunyDuvo/?utm_source=ig_share_sheet&igshid=xyn2ctfoegqv"><img src="images.png" style = "width: 50px; " title="cghmsiua"></a>
  </span>
</nav>
<h1>Pendaftaran Club Coder's Guild HMSI</h1>
<?php function add($koneksi){
	if(isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$jk=$_POST['jk'];
	$jurusan=$_POST['jurusan'];
	$alamat=$_POST['alamat'];
	$nomor=$_POST['nomor'];
	$divisi=$_POST['divisi'];
	$pass=$_POST['pass'];

	if(!empty($nama) && !empty($nim) && !empty($jk) && !empty($jurusan) && !empty($alamat) && !empty($nomor) && !empty($divisi) && !empty($pass)){
            $sql = "INSERT INTO pendaftaran (nama,nim,jk,jurusan,alamat,nomor,divisi,pass) VALUES('$nama','$nim','$jk','$jurusan','$alamat','$nomor','$divisi','$pass')";
            $simpan = mysqli_query($koneksi, $sql);
            if($simpan && isset($_GET['aksi'])){
                if($_GET['aksi'] == 'create'){
                    header('location: Page2.php');
                }
            }
    } else {
            $pesan = 'Tidak dapat menyimpan, data belum lengkap!';
        }
}
}
?>
<fieldset>
<legend><h2>Daftar</h2></legend>
<form name="form1" action="" method="post">
<table>
		<tr><td>Nama</td><td><input type="text" name="nama" class="form-control"></td></tr>
		<tr><td>NIM</td><td><input type="text" name="nim" class="form-control"></td></tr>
		<tr><td>Jenis Kelamin</td><td><input type="radio" name="jk" value="Laki-laki">Laki-laki</td><td><input type="radio" name="jk" value="Perempuan">Perempuan</td></tr>
		<tr><td>Jurusan</td><td><input type="text" name="jurusan" class="form-control"></td></tr>
		<tr><td>Alamat</td><td><input type="text" name="alamat" class="form-control"></td></tr>
		<tr><td>No.HP</td><td><input type="text" name="nomor" class="form-control"></td></tr>
		<tr><td>Divisi</td><td><input type="radio" name="divisi" value="Mobile Programming">Mobile Programming</td><td><input type="radio" name="divisi" value="Web Programming">Web Programming</td></tr>
		<tr><td>Password</td><td><input type="password" name="pass" class="form-control"></td></tr>	
		<tr><td><input type="submit" name="submit" value="Simpan" class="btn btn-info"></td></tr>
		<tr><td><input type="reset" name="reset" value="Reset" class="btn btn-info" onclick="document.form1.reset();return false;"></td></tr>
</table>
</fieldset>
</form>
</div>
</div>
<?php
function show($koneksi){
	$sql="SELECT * FROM pendaftaran";
	$query=mysqli_query($koneksi,$sql);

	echo "<h1>Data Diri Anda</h1>
	<body>
	<div>
	<fieldset>
	<table border='1' cellpadding='12'class='table table-hover table-striped table-primary'>
	<thead>
		<th>Nama</th>
		<th>NIM</th>
		<th>Jenis Kelamin</th>
		<th>Jurusan</th>
		<th>Alamat</th>
		<th>No.HP</th>
		<th>Divisi</th>
		<th>Password</th>	
		<th>Aksi</th>
	</thead>";
	while($data=mysqli_fetch_array($query)){
?>  
	<tr>
    <td><?= $data["nama"]; ?></td>
    <td><?= $data["nim"]; ?></td>
    <td><?= $data["jk"]; ?></td>
    <td><?= $data["jurusan"]; ?></td>
    <td><?= $data["alamat"]; ?></td>
    <td><?= $data["nomor"]; ?></td>
    <td><?= $data["divisi"]; ?></td>
    <td><?= $data["pass"]; ?></td>
    <td>
    	<a href="Page2.php?aksi=update&nama=<?php echo $data['nama']; ?>&nim=<?php echo $data['nim']; ?>&jk=<?php echo $data['jk']; ?>&jurusan=<?php echo $data['jurusan']; ?>&alamat=<?php echo $data['alamat']; ?>&nomor=<?php echo $data['nomor']; ?>&divisi=<?php echo $data['divisi']; ?>&pass=<?php echo $data['pass']; ?>">Edit</a> |
		<a href="Page2.php?aksi=delete&nama=<?php echo $data['nama']; ?>">Delete</a>
    </td>
    </tr>
    <?php
	}
	echo "</table>
	</fieldset>
	</div>
    </body>";
}
?>
<?php
function ubah($koneksi){
    if(isset($_POST['btn_ubah'])){
    $nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$jk=$_POST['jk'];
	$jurusan=$_POST['jurusan'];
	$alamat=$_POST['alamat'];
	$nomor=$_POST['nomor'];
	$divisi=$_POST['divisi'];
	$pass=$_POST['pass'];
        
        if(!empty($nama) && !empty($nim) && !empty($jk) && !empty($jurusan) && !empty($alamat) && !empty($nomor) && !empty($divisi) && !empty($pass))
        {
            $sql_update = "UPDATE pendaftaran SET nama = '$nama',jk = '$jk', jurusan = '$jurusan', alamat = '$alamat', nomor = '$nomor', divisi = '$divisi', pass = '$pass' WHERE nim = '$nim'";
            $update = mysqli_query($koneksi, $sql_update);
        
        }
         else {
            
            $pesan = "Data tidak lengkap!";
        }
    }
}
    
    if(isset($_GET['nim'])){
        ?>
            <a href="Page2.php"> &laquo; Home</a> | 
            <a href="Page2.php?aksi=create"> (+) Add Data</a>
            <div class="p-3 mb-2 bg-info text-white">
            
            <form action="" method="POST">
            <fieldset>
                <table>
                <legend><h2>Update data</h2></legend>
                <input type="hidden" name="name" value="<?php echo $_GET['nama'] ?>"/>
                <tr><td>Nama</td><td><input type="text" name="nama" class="form-control" value="<?php echo $_GET['nama'] ?>"></td></tr>
                <tr><td>NIM</td><td><input type="text" name="nim" class="form-control" value="<?php echo $_GET['nim'] ?>"></td></tr>
                <tr><td>Jenis Kelamin</td><td><input type="radio" name="jk" value="Laki-laki">Laki-laki</td><td><input type="radio" name="jk" value="Perempuan">Perempuan</td></tr>
                <tr><td>Jurusan</td><td><input type="text" name="jurusan" class="form-control" value="<?php echo $_GET['jurusan'] ?>"></td></tr>
                <tr><td>Alamat</td><td><input type="text" name="alamat" class="form-control" value="<?php echo $_GET['alamat'] ?>"></td></tr>
                <tr><td>No.HP</td><td><input type="text" name="nomor" class="form-control" value="<?php echo $_GET['nomor'] ?>"></td></tr>
                <tr><td>Divisi</td><td><input type="radio" name="divisi"  value="Mobile Programming">Mobile Programming</td><td><input type="radio" name="divisi" value="Web Programming">Web Programming</td></tr>
                <tr><td>Password</td><td><input type="password" name="pass" class="form-control" value ="<?php echo $_GET['pass'] ?>"></td></tr>      
                <tr><td><input type="submit" name="btn_ubah" value="Simpan Perubahan" class="btn btn-info"></td></tr>    
                <br>
                <p><?php echo isset($pesan) ? $pesan : "" ?></p>
                </table>
            </fieldset>
            </form>
        </div>
<?php    
}

function hapus($koneksi){
    if(isset($_GET['nama']) && isset($_GET['aksi'])){
        $nama = $_GET['nama'];
        $sql_hapus = "DELETE FROM pendaftaran WHERE nama = '$nama'";
        $hapus = mysqli_query($koneksi, $sql_hapus);
        
    }
    
}
?>
<?php
if (isset($_GET['aksi'])){
    switch($_GET['aksi']){
        case "create":
            echo '<a href="Page2.php"> &laquo; Home</a>';
            add($koneksi);
            break;
        case "read":
            show($koneksi);
            break;
        case "update":
            ubah($koneksi);
            show($koneksi);
            break;
        case "delete":
            hapus($koneksi);
            show($koneksi);
            break;
        default:
            echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidak ada!</h3>";
            add($koneksi);
            show($koneksi);
    }
} else {
    add($koneksi);
    show($koneksi);
}
?>
</body>
</html>