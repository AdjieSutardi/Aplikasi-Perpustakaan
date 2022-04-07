<div class="container-fluid">

    <h1 class="m-0 font-weight-bold text-dark"><?php echo $title; ?></h1>
    <br>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Home3/proses_edit_pegawai') ?>">

        <input type="hidden" name="id_pegawai" value="<?php echo $tabel_pegawai['id_pegawai']; ?>">

      <div class="form-group row">
        <label for="nama_pegawai" class="col-sm-2 col-form-label text-dark">Nama Pegawai</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="nama_pegawai" required="" value="<?php echo $tabel_pegawai['nama_pegawai']; ?>">
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
          <input type="text" class="form-control" name="alamat" required="" value="<?php echo $tabel_pegawai['alamat']; ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="no_hp" class="col-sm-2 col-form-label text-dark">No HP</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="no_hp" required="" value="<?php echo $tabel_pegawai['no_hp']; ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="jabatan" class="col-sm-2 col-form-label text-dark">Jabatan</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="jabatan" required="" value="<?php echo $tabel_pegawai['jabatan']; ?>">
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