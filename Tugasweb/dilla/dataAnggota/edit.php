<?php include '../_header.php'; ?>

    <div class="box">
        <h1>Edit Data Anggota</h1>
        <h4>
            <small>Coder's Guild</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"> Kembali </i></a>
            </div>
        </h4>

        <?php  
            $id = @$_GET['id'];
            $sql = mysqli_query($conn, "SELECT * FROM tb_anggota WHERE id_anggota = '$id'") or die(mysqli_error($conn));
            $data = mysqli_fetch_array($sql);
        ?>
                
            <form enctype="multipart/form-data" class="form-horizontal" role="form" action="proses.php" method="POST">
                    <input type="hidden" name="id" value="<?=$data['id_anggota'];?>">
                    <input type="hidden" name="oldFoto" value="<?=$data['foto'];?>">

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="nim">NIM <div style="display: inline; color: red;">*</div></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="nim" id="nim" value="<?=$data['nim'];?>" placeholder="Enter NIM" required autofocus>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="nama">Nama <div style="display: inline; color: red;">*</div></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?=$data['nama'];?>" required placeholder="Enter Name">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">E-mail <div style="display: inline; color: red;">*</div></label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" id="email" name="email" value="<?=$data['email'];?>" placeholder="Enter Email" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="jekel">Jenis Kelamin <div style="display: inline; color: red;">*</div></label>
                        <div class="col-sm-7">
                            <select class="form-control" name="jekel" id="jekel">
                                <option value="null" disabled selected>-- CHOOSE GENDER --</option>
                                <option value="Laki-laki"
                                <?php if( $data["jekel"] == 'Laki-laki' ) { echo 'selected'; } ?>>Laki-laki</option>
                                <option value="Perempuan"
                                <?php if( $data["jekel"] == 'Perempuan' ) { echo 'selected'; } ?>>Perempuan</option>                             
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="tmp_lahir">Tempat Kelahiran <div style="display: inline; color: red;">*</div></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="<?=$data['tmp_lahir'];?>" placeholder="Enter Place" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="tgl_lahir">Tanggal Lahir <div style="display: inline; color: red;">*</div></label>
                        <div class="col-sm-7">
                            <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?=$data['tgl_lahir'];?>">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="agama">Agama</label>
                        <div class="col-sm-7">
                            <select class="form-control" name="agama" id="agama">
                                <option value="null" disabled selected>-- CHOOSE RELIGION --</option>
                                <option value="Islam"
                                <?php if( $data["agama"] == 'Islam' ) { echo 'selected'; } ?>>Islam</option>
                                <option value="Katolik"
                                <?php if( $data["agama"] == 'Katolik' ) { echo 'selected'; } ?>>Katolik</option>
                                <option value="Protestan"
                                <?php if( $data["agama"] == 'Protestan' ) { echo 'selected'; } ?>>Protestan</option>
                                <option value="Hindu"
                                <?php if( $data["agama"] == 'Hindu' ) { echo 'selected'; } ?>>Hindu</option>
                                <option value="Budha"
                                <?php if( $data["agama"] == 'Budha' ) { echo 'selected'; } ?>>Budha</option>
                                <option value="Kong Hu Chu"
                                <?php if( $data["agama"] == 'Kong Hu Chu' ) { echo 'selected'; } ?>>Kong Hu Chu</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="goldar">Golongan Darah</label>
                        <div class="col-sm-7">
                            <select class="form-control" name="goldar" id="goldar">
                                <option value="null" disabled selected>-- CHOOSE BLOOD TYPE --</option>
                                <option value="A"
                                <?php if( $data["goldar"] == 'A' ) { echo 'selected'; } ?>>A</option>
                                <option value="B"
                                <?php if( $data["goldar"] == 'B' ) { echo 'selected'; } ?>>B</option>
                                <option value="AB"
                                <?php if( $data["goldar"] == 'AB' ) { echo 'selected'; } ?>>AB</option>
                                <option value="O"
                                <?php if( $data["goldar"] == 'O' ) { echo 'selected'; } ?>>O</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="sma">SMA</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="sma" name="sma" placeholder="Enter Highschool" value="<?=$data['sma'];?>">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="alamat">Alamat</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" rows="5" id="alamat" name="alamat" placeholder="Enter Address"><?=$data['alamat'];?></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="no_hp">No. HP <div style="display: inline; color: red;">*</div></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?=$data['no_hp'];?>" placeholder="Enter Phone Number" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="hobi">Hobi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="hobi" name="hobi" value="<?=$data['hobi'];?>" placeholder="Enter Hobby">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="prestasi">Prestasi</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" rows="5" id="prestasi" name="prestasi" placeholder="Enter Achievement"><?=$data['prestasi'];?></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="skill">Skill</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" rows="5" id="skill" name="skill" placeholder="Enter Skill"><?=$data['prestasi'];?></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="motto">Moto</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="motto" id="motto" value="<?=$data['motto'];?>" placeholder="Enter Motto">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="foto">Foto</label>
                        <div class="col-sm-7">
                            <input type="file" class="form-control" name="foto" id="foto">
                        </div>
                    </div>

                    <div class="form-group"> 
                        <div class="col-sm-offset-3 col-sm-3">
                            <button type="submit" class="btn btn-md btn-success" name="edit">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning" name="reset">RESET</button>
                        </div>
                    </div>
                </form>
    </div>

<?php include '../_footer.php'; ?>