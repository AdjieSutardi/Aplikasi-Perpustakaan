<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h1 mb-4 text-dark">Data Transaksi</h1>
<div class="card shadow mb-4">
    <div class="card-header py-4">
        <h4 class="m-0 font-weight-bold text-dark"><?php echo $title; ?>
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Transaksi</button>
    </div>
<div class="card-body">
    <?php echo $this->session->flashdata('pemberitahuan'); ?>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
    <tr>
        <td>Id Transaksi</td>
        <td>Tanggal Transaksi</td>
        <td>Nama Anggota</td>
        <td>Nama Pegawai</td>
        <td>Nama Buku</td>
        <td>Kuantitas</td>
        <td>Jenis Transaksi</td>
        <td colspan="1">Tindakan</td>
    </tr>
        </thead>
    <tbody>
    <?php foreach ($tabel_transaksi as $tbl_trs) : ?>
        <tr>
            <td><?php echo $tbl_trs['id_transaksi']; ?></td>
            <td><?php echo $tbl_trs['tanggal_transaksi']; ?></td>
            <td><?php echo $tbl_trs['id_anggota']; ?></td>
            <td><?php echo $tbl_trs['id_pegawai']; ?></td>
            <td><?php echo $tbl_trs['id_buku']; ?></td>
            <td><?php echo $tbl_trs['quantity']; ?></td>
            <td><?php echo $tbl_trs['jenis_transaksi']; ?></td>
            <td>
                <a href="<?php echo base_url() ?>Home4/edit_transaksi/<?php echo $tbl_trs['id_transaksi']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                <a href="<?php echo base_url() ?>Home4/hapus_transaksi/<?php echo $tbl_trs['id_transaksi']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </td>
        </tr>


    <?php endforeach; ?>
    </tbody>
</table>



</div>
</div>
</div>
</div>

<!-- Modal -->

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH TRANSAKSI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('Home4/proses_tambah_transaksi'); ?>

        <div class="form-group">
            <label>Tanggal Transaksi</label>
            <input type="text" name="tanggal_transaksi" class="form-control">
        </div>

        <div class="form-group">
            <label>Id Anggota</label>
            <input type="text" name="id_anggota" class="form-control">
        </div>

        <div class="form-group">
            <label>Id Pegawai</label>
            <input type="text" name="id_pegawai" class="form-control">
        </div>

        <div class="form-group">
            <label>Id Buku</label>
            <input type="text" name="id_buku" class="form-control">
        </div>

        <div class="form-group">
            <label>Kuantitas</label>
            <input type="text" name="quantity" class="form-control">
        </div>

        <div class="form-group">
            <label>Jenis Transaksi</label>
            <br>
              <select name="jenis_transaksi" id="jenis_transaksi" class="form-control">
                <option value="1">Pinjam</option>
                <option value="2">Kembali</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal -->