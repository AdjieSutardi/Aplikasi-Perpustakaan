<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h1 mb-4 text-dark">Daftar Buku</h1>
<div class="card shadow mb-4">
    <div class="card-header py-4">
        <h4 class="m-0 font-weight-bold text-dark"><?php echo $title; ?>
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Buku</button>
    </div>
<div class="card-body">
    <?php echo $this->session->flashdata('pemberitahuan'); ?>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
    <tr>
        <td>Id Buku</td>
        <td>ISBN</td>
        <td>Nama Buku</td>
        <td>Penulis</td>
        <td>Penerbit</td>
        <td>Tahun Terbit</td>
        <td>Cover Buku</td>
        <td colspan="1">Tindakan</td>
    </tr>
        </thead>
    <tbody>
    <?php foreach ($tabel_buku as $tbl_bk) : ?>
        <tr>
            <td><?php echo $tbl_bk['id_buku']; ?></td>
            <td><?php echo $tbl_bk['isbn']; ?></td>
            <td><?php echo $tbl_bk['nama_buku']; ?></td>
            <td><?php echo $tbl_bk['penulis']; ?></td>
            <td><?php echo $tbl_bk['penerbit']; ?></td>
            <td><?php echo $tbl_bk['tahun_terbit']; ?></td>
            <td><img src="<?php echo base_url() . '/gambar/' . $tbl_bk['gambar']; ?>" width="100"></td>
            <td>
                <a href="<?php echo base_url() ?>Home2/edit_buku/<?php echo $tbl_bk['id_buku']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                <a href="<?php echo base_url() ?>Home2/hapus_buku/<?php echo $tbl_bk['id_buku']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH BUKU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('Home2/proses_tambah_buku'); ?>

        <div class="form-group">
            <label>ISBN</label>
            <input type="text" name="isbn" class="form-control" required="">
        </div>

        <div class="form-group">
            <label>Nama Buku</label>
            <input type="text" name="nama_buku" class="form-control" required="">
        </div>

        <div class="form-group">
            <label>Penulis</label>
            <input type="text" name="penulis" class="form-control" required="">
        </div>

        <div class="form-group">
            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form-control" required="">
        </div>

        <div class="form-group">
            <label>Tahun Terbit</label>
            <input type="text" name="tahun_terbit" class="form-control" required="">
        </div>

        <div class="form-group">
            <label>Gambar</label>
            <br>
            <input type="file" name="userfile" size="20">
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