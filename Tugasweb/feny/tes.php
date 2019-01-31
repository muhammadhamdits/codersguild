<?php
require 'functions2.php';
$daftar = query("SELECT * FROM tes"); 
if(isset($_POST["submit"])) {
  if(tambah($_POST)>0) {
    echo "
    <script>
    alert('data berhasil ditambahkan');
    document.location.href = 'tes.php';
    </script>
    ";
  } else 
  {
    echo "
    <script>
    alert('data gagal ditambahkan');
    document.location.href = 'tes.php';
    </script>
    ";

  }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tugas CG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: pink">

<div class="container">
  <h2>Form Pendaftaran</h2>
  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama lengkap</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" placeholder="Enter text" name="nama">
      </div>
    </div>
     
     <div class="form-group">
      <label class="control-label col-sm-2" for="jeka">Jenis Kelamin </label>
      <div class="col-sm-10">          
        <select class="form-control" id="jeka" name="jeka">
          <option>--Pilih--</option>
          <option>Perempuan</option>
          <option>Laki-laki</option>
        </select>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="agama">Agama</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="agama" placeholder="Enter text" name="agama">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tanggal">Tanggal lahir </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="tanggal" placeholder="dd/mm/yyyy" name="tanggal">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tempat">Tempat lahir </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="tempat" placeholder="Enter text" name="tempat">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="hp">Nomor HP</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="hp" placeholder="Enter number" name="hp">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="alamat">Alamat</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="alamat" placeholder="Enter text" name="alamat">
      </div>
      </div> 
      <div class="form-group">
      <label class="control-label col-sm-2" for="hobi">Hobi</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="hobi" placeholder="Enter text" name="hobi">
      </div>

    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
   <table class="table table-bordered">
    <thead>
      <tr style="background-color: salmon">
        <th>No.</th>
        <th>Nama lengkap</th>
        <th>Jenis kelamin</th>
        <th>Agama</th>
        <th>Email</th>
        <th>Tanggal lahir</th>
        <th>Tempat lahir</th>
        <th>Nomor HP</th>
        <th>Alamat</th>
        <th>Hobi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
    <?php foreach ($daftar as $row ) :
     ?>
    <tr>
      <td><?= $i; ?></td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["jeka"]; ?></td>
      <td><?= $row["agama"]; ?></td>
      <td><?= $row["email"]; ?></td>
      <td><?= $row["tanggal"]; ?></td>
      <td><?= $row["tempat"]; ?></td>
      <td><?= $row["hp"]; ?></td>
      <td><?= $row["alamat"]; ?></td> 
      <td><?= $row["hobi"]; ?></td>  
    <td>
        <style>
a:link, a:visited {
  background-color: red;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}


a:hover, a:active {
  background-color: red;
}
</style>
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin?');" name="hapus">Hapus</a>

      <!-- </div> -->
      </td>   
    </tr>
    <?php $i++; ?>
    <?php endforeach;  ?>
  </tbody>
  </table>
</div>
</div>
</form>
</body>
</html>