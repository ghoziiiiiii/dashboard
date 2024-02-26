<style>
    body {
      background-color: green;
    }
</style>                    
 <!-- Portfolio Grid -->
<section id="portfolio">
    <div class="container">
        <div class="text-center">
            <h1 class="section-heading text-uppercase" style="margin-top: -60px;"><font color="#ffc800">Gallery</font></h1><br>
            <h3 class="section-subheading text-muted"><font color="white">Forum Kerukunan Umat Beragama Kabupaten Pelalawan</font></h3><br><br>
        </div>
        <div class="row">
            <?php foreach ($data['galery'] as $row) : ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio Item -->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?= $row['id']; ?>">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img src="<?= BASEURL . "/public/assets/frontsite/img/foto_profile/" . $row['foto']; ?>" style="width: 100%;" alt="<?= $row['judul']; ?>">
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><?= $row['judul']; ?></div>
                            <div class="portfolio-caption-subheading text-muted"><?= $row['keterangan']; ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Portfolio Modals -->
<?php foreach ($data['galery'] as $row) : ?>
    <div class="portfolio-modal modal fade" id="portfolioModal<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?= BASEURL; ?>/assets/frontsite/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h2 class="text-uppercase"><?= $row['judul']; ?></h2>
                                <img class="img-fluid d-block mx-auto" src="<?= BASEURL; ?>/assets/frontsite/img/foto_profile/<?= $row['foto']; ?>" alt="<?= $row['judul']; ?>" />
                                <p><h3><?= $row['judul']; ?></h3></p>
                                <ul class="list-inline">
                                    <li><br>
                                        <b><strong>Kategori :</strong></b><br>
                                        <?= $row['keterangan']; ?>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>