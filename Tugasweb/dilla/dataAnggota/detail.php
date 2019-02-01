<?php 
    include_once('../_header.php');

    $id = @$_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM tb_anggota WHERE id_anggota = '$id'") or die(mysqli_error($conn));
    $data = mysqli_fetch_array($sql);

?>

<h1>Detail Anggota</h1>
<h4>
    <small>Coder's Guild</small>
    <div class="pull-right">
        <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"> Kembali </i></a>
    </div>
</h4>

<div class="box col-md-8 col-sm-offset-2" style="border: 1px solid black;">
    <div id="Profile" class="panel-collapse collapse in">
        <div class="panel-body">
            <div class="col-md-12">
                <h1 class="text-center">Profil <?php echo $data['nama']; ?></h1><br>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>NIM</td>
                            <td><?php echo $data['nim']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td><?php echo $data['nama'];; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $data['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><?php echo $data['jekel']; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Kelahiran</td>
                            <td><?php echo $data['tmp_lahir']; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><?php echo $data['tgl_lahir']; ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td><?php echo $data['agama']; ?></td>
                        </tr>
                        <tr>
                            <td>Golongan Darah</td>
                            <td><?php echo $data['goldar']; ?></td>
                        </tr>
                        <tr>
                            <td>SMA</td>
                            <td><?php echo $data['sma']; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?php echo $data['alamat']; ?></td>
                        </tr>
                        <tr>
                            <td>No. HP</td>
                            <td><?php echo $data['no_hp']; ?></td>
                        </tr>
                        <tr>
                            <td>Hobi</td>
                            <td><?php echo $data['hobi']; ?></td>
                        </tr>
                        <tr>
                            <td>Prestasi</td>
                            <td><?php echo $data['prestasi']; ?></td>
                        </tr>
                        <tr>
                            <td>Skill</td>
                            <td><?php echo $data['skill']; ?></td>
                        </tr>
                        <tr>
                            <td>Motto</td>
                            <td><?php echo $data['motto']; ?></td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td>
                                <img src="upload/<?php echo $data['foto']; ?>" alt="<?php echo $data['nama']; ?>" width="200px" style="border: 1px solid black;">
                            </td>
                        </tr>
                    </tbody>
                </table>

                <form class="form-horizontal" role="form" action="proses.php" method="POST">
                    <div class="form-group"> 
                        <a href="edit.php?id=<?=$data['id_anggota']; ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"> Edit</i></a>

                        <a href="del.php?id=<?=$data['id_anggota']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-xs"> Hapus<i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once('../_footer.php'); ?>