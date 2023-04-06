<div class="col-md-12">        
     <div class="box box-info">
                <div class="box-header with-border">
                <h3 class="box-title"><?= $judul;?></h3>
            </div>
               
        <form method="post" action="<?=base_url()?>index.php/penerbit/update"class="form-horizontal">
            <div class="box-body">
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Id Penerbit</label>

                    <div class="col-sm-10">
                        <input type="text"name="id_penerbit" class="form-control" value="<?= $data['id_penerbit']; ?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Nama Penerbit</label>

                    <div class="col-sm-10">
                        <input type="text"name="nama_penerbit" value="<?= $data['nama_penerbit']; ?>" class="form-control"  placeholder="Nama penerbit" required>
                    </div>
                </div>

                <div class="box-footer">
                    <a href="<?=base_url()?>index.php/penerbit" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </div>
        </form>
</div>