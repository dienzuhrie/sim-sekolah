<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Master Data</a></li>
              <li class="breadcrumb-item active">Edit Data Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <?php foreach($siswa as $s): ?>
        <form action="<?= base_url().'siswa/update';?>" method="post" class="ml-3 mr-3">
            <div class="form-group row">
                <label class="col-2">NISM</label>
                <input type="text" name="nism" class="form-control col-3" value="<?= $s->nism; ?>">
            </div>
            <div class="form-group row">
                <label class="col-2">Nama Siswa</label>
                <input type="hidden" name="id" class="form-control" value="<?= $s->id; ?>">
                <input type="text" name="nama" class="form-control col-6" value="<?= $s->nama; ?>">
            </div>
            <div class="form-group row">
                <label class="col-2">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control col-3" value="<?= $s->tgl_lahir; ?>">
            </div>
            <div class="form-group row">
                <label class="col-2">Kelas</label>
                <select name="kelas" class="form-control col-3" value="<?= $s->kelas; ?>">
                  <option>X-IPA</option>
                  <option>X-IPS</option>
                  <option>XI-IPA</option>
                  <option>XI-IPS</option>
                  <option>XII-IPA</option>
                  <option>XII-IPS</option>
                </select>
            </div>
            <div class="form-group row">
                <label class="col-2">Alamat</label>
                <input type="text" name="alamat" class="form-control col-3" value="<?= $s->alamat; ?>">
            </div>
            <div class="form-group row">
                <label class="col-2">No Telp</label>
                <input type="text" name="telp" class="form-control col-3" value="<?= $s->telp; ?>">
            </div>
            <div class="form-group row">
                <label class="col-2">Email</label>
                <input type="text" name="email" class="form-control col-3" value="<?= $s->email; ?>">
            </div>
            <a href="<?= base_url('siswa');?>" class="btn btn-danger btn-sm"> <i class="fa fa-backward"></i> Back</a>
            <button type="submit" class="btn btn-primary btn-sm"> <i class="fa fa-save"></i> Simpan</button>
        </form>
        <?php endforeach; ?>
    </section>
</div>