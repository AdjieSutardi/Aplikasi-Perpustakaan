<div class="container-fluid">

    <h1 class="m-0 font-weight-bold text-dark"><?php echo $title; ?></h1>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Home4/proses_edit_transaksi') ?>">

        <input type="hidden" name="id_transaksi" value="<?php echo $tabel_transaksi['id_transaksi']; ?>">

        <div class="form-group row">
            <label for="tanggal_transaksi" class="col-sm-2 col-form-label text-dark">Tanggal Transaksi</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="tanggal_transaksi" required="" value="<?php echo $tabel_transaksi['tanggal_transaksi']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="id_anggota" class="col-sm-2 col-form-label text-dark">Nama Anggota</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="id_anggota" required="" value="<?php echo $tabel_transaksi['id_anggota']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="id_pegawai" class="col-sm-2 col-form-label text-dark">Nama Pegawai</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="id_pegawai" required="" value="<?php echo $tabel_transaksi['id_pegawai']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="id_buku" class="col-sm-2 col-form-label text-dark">Nama Buku</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="id_buku" required="" value="<?php echo $tabel_transaksi['id_buku']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="quantity" class="col-sm-2 col-form-label text-dark">Quantity</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="quantity" required="" value="<?php echo $tabel_transaksi['quantity']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="jenis_transaksi" class="col-sm-2 col-form-label text-dark">Jenis Transaksi</label>
            <div class="col-sm-5">
              <select name="jenis_transaksi" id="jenis_transaksi" class="form-control">
                <option value="1">Pinjam</option>
                <option value="2">Kembali</option>
            </select>
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