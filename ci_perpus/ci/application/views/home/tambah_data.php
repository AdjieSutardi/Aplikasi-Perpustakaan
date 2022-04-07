<div class="container-fluid">

    <h3><?php echo $title; ?></h3>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Home/proses_tambah_data'); ?>">
  <div class="form-group row">
    <label for="nama_anggota" class="col-sm-2 col-form-label">Nama Anggota</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama_anggota">
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
    <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="no_hp">
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
        <button type="reset" class="btn btn-danger">Batalkan</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </div>
  </div>