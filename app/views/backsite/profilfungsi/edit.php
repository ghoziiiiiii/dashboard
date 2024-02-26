<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Profil Fungsi FKUB</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/profilfungsi/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['profilfungsi']['id']; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" class="form-control" placeholder="masukkan judul" name="judul" value="<?= $data['profilfungsi']['judul']; ?>">
                </div>
                <div class="form-group">
                  <label>Sub-Judul</label>
                  <input type="text" class="form-control" placeholder="masukkan judul" name="subjudul" value="<?= $data['profilfungsi']['subjudul']; ?>">
                </div>
                <div class="form-group">
                  <label>Keterangan </label>
                  <input type="text" class="form-control" placeholder="masukkan keterangan" name="isi" value="<?= $data['profilfungsi']['isi']; ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
            </form>
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