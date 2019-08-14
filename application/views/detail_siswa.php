<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Detail Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Master Data</a></li>
              <li class="breadcrumb-item active">Detail Data Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <a href="<?= base_url('siswa');?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Klik untuk kembali ke rekap siswa"><i class="fa fa-backward"></i> Back</a>
        <a href="<?= base_url('siswa/edit_siswa/').$detail->id;?>" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Klik untuk Edit"><i class="fa fa-edit"></i> Edit Profil</a>

        <table class="table mt-3">
            <tr>
                <td>
                    <?php if(!$detail->foto){ ?>
                        <img src="<?= base_url();?>assets/foto/default.jpg" width="250" height="250">
                    <?php } else{ ?>
                        <img src="<?= base_url();?>assets/foto/<?= $detail->foto; ?>" width="200" height="300">
                    <?php } ?>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>NISM</th>
                <td><?= $detail->nism ?></td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td><?= $detail->nama ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?= $detail->tgl_lahir ?></td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td><?= $detail->kelas ?></td>
            </tr>
            <tr>
                <th>Alamat Lengkap</th>
                <td><?= $detail->alamat ?></td>
            </tr>
            <tr>
                <th>No Telp</th>
                <td><?= $detail->telp ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $detail->email ?></td>
            </tr>
        </table>
    </section>
</div>