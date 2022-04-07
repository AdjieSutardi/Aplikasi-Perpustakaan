<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h1 mb-4 text-dark">Data Admin</h1>
<div class="card shadow mb-4">
    <div class="card-header py-4">
        <h4 class="m-0 font-weight-bold text-dark"><?php echo $title; ?>
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Pegawai</button>
    </div>
<div class="card-body">
    <?php echo $this->session->flashdata('pemberitahuan'); ?>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
    <tr>
        <td>Id Admin</td>
        <td>Nama Admin</td>
        <td>Jenis Kelamin</td>
        <td>Alamat</td>
        <td>No HP</td>
        <td>Jabatan</td>
        <td colspan="1">Tindakan</td>
    </tr>
        </thead>
    <tbody>
    <?php foreach ($tabel_pegawai as $tbl_pgw) : ?>
        <tr>
            <td><?php echo $tbl_pgw['id_pegawai']; ?></td>
            <td><?php echo $tbl_pgw['nama_pegawai']; ?></td>
            <td><?php echo $tbl_pgw['jenis_kelamin']; ?></td>
            <td><?php echo $tbl_pgw['alamat']; ?></td>
            <td><?php echo $tbl_pgw['no_hp']; ?></td>
            <td><?php echo $tbl_pgw['jabatan']; ?></td>
            <td>
                <a href="<?php echo base_url() ?>Home3/edit_pegawai/<?php echo $tbl_pgw['id_pegawai']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                <a href="<?php echo base_url() ?>Home3/hapus_pegawai/<?php echo $tbl_pgw['id_pegawai']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH PEGAWAI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('Home3/proses_tambah_pegawai'); ?>

        <div class="form-group">
            <label>Nama Pegawai</label>
            <input type="text" name="nama_pegawai" class="form-control">
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <br>
              <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                <option value="1">Laki - Laki</option>
                <option value="2">Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
        </div>

        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control">
        </div>

        <div class="form-group">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control">
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