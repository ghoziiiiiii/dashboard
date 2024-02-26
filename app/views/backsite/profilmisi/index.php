<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php
        Flasher::Message();
        ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tambah Profil Misi FKUB</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool"
                data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool"
                data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/profilmisi/store" method="POST"
              enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan Judul" id="judul" name="judul">
                </div>
                <div class="form-group">
                  <label>Sub-Judul</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan Sub-Judul" id="subjudul" name="subjudul">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan keterangan" id="isi" name="isi">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Profil Tugas</h3>
          </div>
          <div class="card-body">
            <form action="<?= BASEURL; ?>/backsite/profilmisi/search" method="post">
              <div class="row mb-3">
                <div class="col-lg-6">
                  <div class="input-group">
                    <input type="text" class="form-control"
                      placeholder="" name="key">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                      <a class="btn btn-outline-danger" href="<?= BASEURL; ?>/backsite/profilmisi">Reset</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <tbody>
                <?php foreach ($data['profilmisi'] as $row) : ?>
                  <tr>
            <div class="card-body">
                <div class="form-group">
                  <label>Judul : </label>
                  <?= $row['judul']; ?>
                </div>
                <div class="form-group">
                  <label>Sub-Judul : </label>
                  <?= $row['subjudul']; ?>
                </div>
                <div class="form-group">
                  <label>Keterangan : </label>
                  <?= $row['isi']; ?>
                </div>
              </div>
              <td>
                      <a href="<?= BASEURL; ?>/backsite/profilmisi/edit/<?= $row['id'] ?>" class="badge badge-info">Edit</a>
                      <a href="<?= BASEURL; ?>/backsite/profilmisi/deploy/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                    </tr>
                  <?php
                endforeach; ?>
              </tbody>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->