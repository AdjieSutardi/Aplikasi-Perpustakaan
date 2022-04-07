<div class="container-fluid">

  <h3><?php echo $title; ?></h3>
  <hr>

      <form method="post" action="<?php echo base_url('Home2/proses_tambah_buku'); ?>">
  <div class="form-group row">
      <label for="isbn" class="col-sm-2 col-form-label">ISBN</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="isbn">
      </div>
  </div>

  <div class="form-group row">
      <label for="nama_buku" class="col-sm-2 col-form-label">Nama Buku</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_buku">
      </div>
  </div>

  <div class="form-group row">
      <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="penulis">
    </div>
  </div>

  <div class="form-group row">
      <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="penerbit">
    </div>
  </div>

  <div class="form-group row">
      <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
      <div class="col-sm-5">
      <input type="text" class="form-control" name="tahun_terbit">
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