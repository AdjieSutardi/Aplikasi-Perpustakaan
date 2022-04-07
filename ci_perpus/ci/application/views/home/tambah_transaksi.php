<div class="container-fluid">

  <h3><?php echo $title; ?></h3>
  <hr>

      <form method="post" action="<?php echo base_url('Home4/proses_tambah_transaksi'); ?>">
        <div class="form-group row">
            <label for="tanggal_transaksi" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="tanggal_transaksi">
            </div>
        </div>

        <div class="form-group row">
            <label for="id_anggota" class="col-sm-2 col-form-label">Id Anggota</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="id_anggota">
            </div>
        </div>

        <div class="form-group row">
            <label for="id_pegawai" class="col-sm-2 col-form-label">Id Pegawai</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="id_pegawai">
            </div>
        </div>

        <div class="form-group row">
            <label for="id_buku" class="col-sm-2 col-form-label">Id Buku</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="id_buku">
            </div>
        </div>

        <div class="form-group row">
            <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="quantity">
        </div>
        </div>

        <div class="form-group row">
            <label for="jenis_transaksi" class="col-sm-2 col-form-label">Jenis Transaksi</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="jenis_transaksi">
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