<div class="col-md-12">        
     <div class="box box-info">
                <div class="box-header with-border">
                <h3 class="box-title"><?= $judul;?></h3>
            </div>
               
        <form method="post" action="<?=base_url()?>index.php/anggota/update"class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Id Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_anggota" value="<?= $data['id_anggota']; ?>" class="form-control" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Nama Anggota</label>

                    <div class="col-sm-10">
                        <input type="text"name="nama_anggota" value="<?= $data['nama_anggota']; ?>" class="form-control"  placeholder="Nama anggota" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>

                    <div class="col-sm-10">
                        <select name="gender" class="form-control" required>
                            <?php
                                if ($data['gender']=="Laki-Laki") { ?>
                                   <option value="Laki-Laki" selected> Laki-Laki</option>
                                     <option value="Perempuan"> Perempuan</option>
                        <?php }else{?>
                                   <option value="Laki-Laki" > Laki-Laki</option>
                                    <option value="Perempuan" selected> Perempuan</option>
                            <?php }?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" cols="30" rows="3" required><?= $data['alamat']; ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="text"name="no_hp" value="<?= $data['no_hp']; ?>" class="form-control"  placeholder="No HP" required>
                    </div>
                </div>
                </div>

                <div class="box-footer">
                    <a href="<?=base_url()?>index.php/anggota" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
        </form>
</div>