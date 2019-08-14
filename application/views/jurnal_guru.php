<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Jurnal Guru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Jurnal Guru</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


    <section class="content">
      <button class="btn btn-primary btn-sm mb-3 ml-3" data-toggle="modal" data-target="#tambahJurnalModal"><i class="fa fa-plus"></i> Isi Jurnal</button>
      <div class="ml-3 mr-2">
      <table class="table table-hover table-sm">
        <thead class="thead-light"> 
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Jam Ke-</th>
            <th>Mapel</th>
            <th>Kelas</th>
            <th>Topik</th>
            <th>Kegiatan</th>
            <th>Ket</th>
            <th>Absen</th>
            <th></th>
            <th colspan="2"><center>Aksi</center></th>
          </tr>
        </thead> 
        <tbody>
          <?php
          $no=1;
          
          foreach($jurnal as $j): ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $j->tgl_mengajar; ?></td>
            <td class="text-center"><?= $j->jamke; ?></td>
            <td><?= $j->mapel; ?></td>
            <td><?= $j->kelas; ?></td>
            <td><?= $j->topik; ?></td>
            <td><?= $j->kegiatan; ?></td>
            <td><?= $j->keterangan; ?></td>
            <td><?= $j->absen; ?></td>
            <td width="15">
              <button class="btn btn-secondary btn-sm mb-3 ml-3" data-toggle="modal" data-target="#editJurnalModal"><i class="fa fa-edit"></i></button>
              <!-- <?= anchor('guru/edit_jurnal/'.$j->id,'<div class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Klik untuk Edit"><i class="fa fa-edit"></i></div>'); ?> -->
            </td>
            <td onclick="javascript: return confirm('Anda yakin menghapus data ini?')" width="15">
              <?= anchor('guru/hapus_jurnal/'.$j->id,'<div class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Klik untuk Hapus"><i class="fa fa-trash"></i></div>'); ?>
            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
      </div>
    </section>
    <!-- /.content-header -->

<!-- Modal: Tambah Jurnal -->
<div class="modal fade" id="tambahJurnalModal" tabindex="-1" role="dialog" aria-labelledby="tambahJurnalModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="tambahJurnalModalLabel">Form Input Jurnal Guru</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'guru/isi_jurnal';?>">
            <div class="form-group row">
              <label class="col-3">Tanggal</label>
                <input type="date" name="tgl_mengajar" class="form-control col-9">
            </div>
            <div class="form-group row">
              <label class="col-3">Mapel</label>
              <input type="text" name="mapel" class="form-control col-9">
            </div>
            <div class="form-group row">
              <label class="col-3">Kelas</label>
              <input type="text" name="kelas" class="form-control col-9">            
            </div>
            <div class="form-group row">
              <label class="col-3">Jam Ke</label>
              <input type="text" name="jamke" class="form-control col-9">            
            </div>
            <div class="form-group row">
              <label class="col-3">Topik</label>
              <input type="text" name="topik" class="form-control col-9">             
            </div>
            <div class="form-group row">
              <label class="col-3">Kegiatan</label>
              <input type="text" name="kegiatan" class="form-control col-9">             
            </div>
            <div class="form-group row">
              <label class="col-3">Keterangan</label>
              <input type="text" name="keterangan" class="form-control col-9">             
            </div>
            <div class="form-group row">
              <label class="col-3">Absen</label>
              <input type="text" name="absen" class="form-control col-9">             
            </div>
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Edit Jurnal -->
<div class="modal fade" id="editJurnalModal" tabindex="-1" role="dialog" aria-labelledby="editJurnalModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="editJurnalModalLabel">Edit Jurnal Guru</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'guru/isi_jurnal';?>">
            <div class="form-group row">
              <label class="col-3">Tanggal</label>
                <input type="date" name="tgl_mengajar" class="form-control col-9">
            </div>
            <div class="form-group row">
              <label class="col-3">Mapel</label>
              <input type="text" name="mapel" class="form-control col-9">
            </div>
            <div class="form-group row">
              <label class="col-3">Kelas</label>
              <input type="text" name="kelas" class="form-control col-9">            
            </div>
            <div class="form-group row">
              <label class="col-3">Jam Ke</label>
              <input type="text" name="jamke" class="form-control col-9">            
            </div>
            <div class="form-group row">
              <label class="col-3">Topik</label>
              <input type="text" name="topik" class="form-control col-9">             
            </div>
            <div class="form-group row">
              <label class="col-3">Kegiatan</label>
              <input type="text" name="kegiatan" class="form-control col-9">             
            </div>
            <div class="form-group row">
              <label class="col-3">Keterangan</label>
              <input type="text" name="keterangan" class="form-control col-9">             
            </div>
            <div class="form-group row">
              <label class="col-3">Absen</label>
              <input type="text" name="absen" class="form-control col-9">             
            </div>
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>