<div class="container-fluid">

    <h1 class="m-0 font-weight-bold text-dark"><?php echo $title; ?></h1>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Home2/proses_edit_buku') ?>">

        <input type="hidden" name="id_buku" value="<?php echo $tabel_buku['id_buku']; ?>">

  <div class="form-group row">
    <label for="isbn" class="col-sm-2 col-form-label text-dark">ISBN</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="isbn" required="" value="<?php echo $tabel_buku['isbn']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="nama_buku" class="col-sm-2 col-form-label text-dark">Nama Buku</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama_buku" required="" value="<?php echo $tabel_buku['nama_buku']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="penulis" class="col-sm-2 col-form-label text-dark">Penulis</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="penulis" required="" value="<?php echo $tabel_buku['penulis']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="penerbit" class="col-sm-2 col-form-label text-dark">Penerbit</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="penerbit" required="" value="<?php echo $tabel_buku['penerbit']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="tahun_terbit" class="col-sm-2 col-form-label text-dark">Tahun Terbit</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="tahun_terbit" required="" value="<?php echo $tabel_buku['tahun_terbit']; ?>">
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