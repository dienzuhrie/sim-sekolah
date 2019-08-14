<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Master Data</a></li>
              <li class="breadcrumb-item active">Data Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


    <section class="content">
      <button class="btn btn-primary btn-sm mb-3 ml-3" data-toggle="modal" data-target="#tambahSiswaModal"><i class="fa fa-plus"></i> Tambah Siswa</button>
      <div class="ml-3 mr-2">
      <table class="table table-hover table-sm">
        <thead class="thead-light"> 
          <tr>
            <th>No</th>
            <th>NISM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Kelas</th>
            <th colspan="3"><center>Aksi</center></th>
          </tr>
        </thead> 
        <tbody>
          <?php
          $no=1;
          
          foreach($siswa as $s): ?>
          <tr class="row-3">
            <td><?= $no++; ?></td>
            <td><?= $s->nism; ?></td>
            <td><?= $s->nama; ?></td>
            <td><?= $s->tgl_lahir; ?></td>
            <td><?= $s->kelas; ?></td>
            <td width="15"><a href="<?= base_url('siswa/detail_siswa/').$s->id;?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Detail Profil Siswa"><i class="fa fa-search-plus"></i></a></td>
            <td width="15"><a href="<?= base_url('siswa/edit_siswa/').$s->id;?>" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Klik untuk Edit"><i class="fa fa-edit"></i></a></td>
            <td onclick="javascript: return confirm('Anda yakin menghapus data ini?')" width="15">
              <?= anchor('siswa/hapus_siswa/'.$s->id,'<div class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Klik untuk Hapus"><i class="fa fa-trash"></i></div>'); ?>
            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
      </div>
    </section>
    <!-- /.content-header -->

<!-- Modal -->
<div class="modal fade" id="tambahSiswaModal" tabindex="-1" role="dialog" aria-labelledby="tambahSiswaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="tambahSiswaModalLabel">Form Input Data Siswa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <form method="post" action="<?php echo base_url().'siswa/tambah_siswa';?>"> -->
        <?= form_open_multipart('siswa/tambah_siswa'); ?>
            <div class="form-group row">
              <label class="col-3">NISM</label>
              <input type="text" name="nism" class="form-control col-9">
            </div>
            <div class="form-group row">
              <label class="col-3">Nama Siswa</label>
                <input type="text" name="nama" class="form-control col-9">
            </div>
            <div class="form-group row">
              <label class="col-3">Tanggal Lahir</label>
              <input type="date" name="tgl_lahir" class="form-control col-9">            
            </div>
            <div class="form-group row">
              <label class="col-3">Kelas</label>
              <input type="text" name="kelas" class="form-control col-9">             
            </div>
            <div class="form-group row">
              <label class="col-3">Alamat</label>
              <input type="text" name="alamat" class="form-control col-9">             
            </div>
            <div class="form-group row">
              <label class="col-3">No Telp / HP</label>
              <input type="text" name="telp" class="form-control col-9">             
            </div>
            <div class="form-group row">
              <label class="col-3">Email</label>
              <input type="text" name="email" class="form-control col-9">             
            </div>
            <div class="form-group row">
              <label class="col-3">Upload Foto</label>
              <input type="file" name="foto" class="form-control col-9">             
            </div>
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        <!-- </form> -->
        <?= form_close();?>
      </div>
    </div>
  </div>
</div>

</div>