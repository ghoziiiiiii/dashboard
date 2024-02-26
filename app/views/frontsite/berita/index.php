<style>
    body {
        background-color: green;
        color: white;
    }

    /* Mengatur style untuk table */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    /* Mengatur style untuk th dan td */
    th, td {
        padding: 10px;
        text-align: center;
    }

    /* Mengatur style untuk portfolio-item */
    .portfolio-item {
        position: relative;
    }

    /* Mengatur style untuk portfolio-hover */
    .portfolio-hover {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: rgba(255, 255, 255, 0.8);
        opacity: 0;
        transition: opacity 0.3s;
    }

    /* Mengatur style untuk portfolio-caption */
    .portfolio-caption {
        position: relative; /* Mengubah menjadi relative */
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column; /* Menambahkan flex-direction agar tulisan berada di bawah gambar */
    }

    /* Mengatur style untuk portfolio-caption-heading dan portfolio-caption-subheading */
    .portfolio-caption-heading,
    .portfolio-caption-subheading {
        text-align: center;
        margin-top: 10px; /* Memberikan margin atas pada tulisan */
    }
</style>

<!-- Services -->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h1 class="section-heading text-uppercase"><font color="#ffc800">Berita</font></h1>
            <h3 class="section-subheading text-muted"><font color="white">Forum Kerukunan Umat Beragama Kabupaten Pelalawan</font></h3>
        </div>

        <div class="row">
            <?php foreach ($data['berita'] as $no => $row) : ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item -->
                    <div class="portfolio-item">
                        <div class="portfolio-hover"></div>
                        <div class="portfolio-caption">
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">
                                            <!-- Mengatur ukuran gambar dengan properti width -->
                                            <img src="<?= BASEURL . "/public/assets/frontsite/img/foto_profile/" . $row['foto']; ?>" style="max-width: 100%; height: auto;" alt="Foto Berita">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <font color="white"><?= $row['keterangan']; ?></font>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
