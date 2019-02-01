<?php include_once('../_header.php'); ?>

<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="glyphicon glyphicon-list"></i></a>

	<div class="box">
		<h1>Data Anggota Club</h1>
		<h4>
			<small>Coder's Guild</small>
			<div class="pull-right">
				<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
				<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"> Tambah Data </i></a>
			</div>
		</h4>

		<div style="margin-bottom: 20px;">
			<form class="form-inline" action="" method="post">
				<div class="form-group">
					<input type="text" name="pencarian" class="form-control" placeholder="Pencarian" autofocus="">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</div>
			</form>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th class="text-center">No. </th>
						<th class="text-center">NIM</th>
						<th class="text-center">Nama</th>
						<th class="text-center">E-mail</th>
						<th class="text-center">Jenis Kelamin</th>
						<th class="text-center">Tempat Lahir</th>
						<th class="text-center">Tanggal Lahir</th>
						<th class="text-center">Foto</th>
						
						<th><i class="glyphicon glyphicon-cog"></i> Action</th>
					</tr>
				</thead>

				<tbody>
				<?php
					$batas = 3;
					$hal = @$_GET['hal'];

					if(empty($hal)) {
						$posisi = 0;
						$hal = 1;
					} else {
						$posisi = ( $hal - 1 ) * $batas;
					}

					$no = 1;
					if($_SERVER['REQUEST_METHOD'] == "POST") {
						$pencarian = $_POST['pencarian'];
						$Pencarian = trim(mysqli_real_escape_string( $conn, $_POST['pencarian'] ));
						if( $pencarian != '' ) {
							$sql = "SELECT * FROM tb_anggota WHERE 
										nim LIKE '%$pencarian%' || 
										nama LIKE '%$pencarian%' || 
										email LIKE '%$pencarian%' ||
										jekel LIKE '%$pencarian%' ||
										tmp_lahir LIKE '%$pencarian%' ||
										tgl_lahir LIKE '%$pencarian%'
									";
							$query = $sql;
							$queryJml = $sql;
						} else {
							$query = "SELECT * FROM tb_anggota LIMIT $posisi, $batas";
							$queryJml = "SELECT * FROM tb_anggota";
							$no = $posisi + 1;
						}

					} else {
						$query = "SELECT * FROM tb_anggota LIMIT $posisi, $batas";
						$queryJml = "SELECT * FROM tb_anggota";
						$no = $posisi + 1;
					}

					
					$sql_obat = mysqli_query( $conn, $query ) or die(mysqli_error($conn));
					if( mysqli_num_rows($sql_obat) > 0 ) {
						while( $data = mysqli_fetch_array($sql_obat) ) { ?>
							<tr>
								<td><?=$no++; ?></td>
								<td><?=$data['nim']; ?></td>
								<td><?=$data['nama']; ?></td>
								<td><?=$data['email']; ?></td>
								<td><?=$data['jekel']; ?></td>
								<td><?=$data['tmp_lahir']; ?></td>
								<td><?=$data['tgl_lahir']; ?></td>
								<td>
									<img src="upload/<?=$data['foto']; ?>" alt="<?=$data['nama']; ?>" width="100">
								</td>

								<td class="text-center">
									<a href="detail.php?id=<?=$data['id_anggota']; ?>" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>

									<a href="edit.php?id=<?=$data['id_anggota']; ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>

									<a href="del.php?id=<?=$data['id_anggota']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
								</td>
							</tr>
						
					<?php 
						}
					} else {
						echo "<tr><td colspan='9' align='center'>Data tidak ditemukan!</td></tr>";
					} ?>
				</tbody>
			</table>
		</div>

		<?php  
			if(isset($_POST['pencarian']) != '') {
				echo "<div style='float: left;'>";
				$jml = mysqli_num_rows(mysqli_query($conn, $queryJml));
				echo "Data hasil pencarian : <b>$jml</b>";
				echo "</div>";
			} else { ?>
				<div style="float: left;">
					<?php  
						$jml = mysqli_num_rows(mysqli_query( $conn, $queryJml ));
						echo "Jumlah Data : <b>$jml</b>";
					?>
				</div>

				<div style="float: right;">
					<ul class="pagination pagination-sm" style="margin: 0;">
						<?php  
							$jml_hal = ceil( $jml / $batas );
							for( $i = 1; $i <= $jml_hal; $i++ ) {
								if( $i != $hal ) {
									echo "<li><a href=\"?hal=$i\">$i</a></li>";
								} else {
									echo "<li class=\"active\"><a>$i</a><li>";
								}
							}
						?>
					</ul>
				</div>
		<?php
			}
		?>

	</div>

<?php include_once('../_footer.php'); ?>