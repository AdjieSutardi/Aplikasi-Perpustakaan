<div class="container-fluid">

  <h3><?php echo $title; ?></h3>
  <hr>

      <form method="post" action="<?php echo base_url('Home3/proses_tambah_pegawai'); ?>">
        <div class="form-group row">
            <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="nama_pegawai">
            </div>
        </div>

        <div class="form-group row">
            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="jenis_kelamin">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="alamat">
          </div>
        </div>

        <div class="form-group row">
            <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="no_hp">
          </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="jabatan">
        </div>
      </div>

        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
              <button type="reset" class="btn btn-danger">Batalkan</button>
              <button type="submit" class="btn btn-primary">Tambahkan</button>
          </div>
        </div>

</form>
</div>