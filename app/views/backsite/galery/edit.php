<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Gallery</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form action="<?= BASEURL; ?>/backsite/galery/update" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $data['galery']['id']; ?>">

  <div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="foto">
    <img src="<?= BASEURL . "/public/assets/frontsite/img/foto_profile/" . $data['galery']['foto']; ?>" style="width: 60px;">
  </div>
  <div class="form-group">
    <label>Judul</label>
    <input type="text" class="form-control" placeholder="Masukkan Judul" name="judul" value="<?= $data['galery']['judul']; ?>">
  </div>
  <div class="form-group">
    <label>keterangan</label>
    <input type="text" class="form-control" placeholder="Masukkan keterangan" name="keterangan" value="<?= $data['galery']['keterangan']; ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="proses">Update</button>
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