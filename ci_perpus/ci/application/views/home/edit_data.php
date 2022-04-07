<div class="container-fluid">

    <h1 class="m-0 font-weight-bold text-dark"><?php echo $title; ?></h1>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Home/proses_edit_data') ?>">

        <input type="hidden" name="id_anggota" value="<?php echo $tabel_anggota['id_anggota']; ?>">

  <div class="form-group row">
    <label for="nama_anggota" class="col-sm-2 col-form-label text-dark">Nama Anggota</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama_anggota" required="" value="<?php echo $tabel_anggota['nama_anggota']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="jenis_kelamin" class="col-sm-2 col-form-label text-dark">Jenis Kelamin</label>
    <div class="col-sm-5">
      <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
        <option value="1">Laki - Laki</option>
        <option value="2">Perempuan</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label text-dark">Alamat</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="alamat" required="" value="<?php echo $tabel_anggota['alamat']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="no_hp" class="col-sm-2 col-form-label text-dark">No Hp</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="no_hp" required="" value="<?php echo $tabel_anggota['no_hp']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
        <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
  </div>


</form>
</div>