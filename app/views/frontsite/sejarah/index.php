 <!-- Contact-->
 <section class="page-section" id="contact" style="background-image: url(<?= BASEURL; ?>/assets/frontsite/img/map-image.png">
            <div class="container">
                <div class="text-center">
                <tbody>
                <?php foreach ($data['sejarah'] as $row) : ?>
                  <tr>
                    <h2 class="section-heading text-uppercase"><font color="#ffc800"><?= $row['judul']; ?></font></h2>
                    <h3 class="section-subheading text-muted"><font color="white"><td><?= $row['subjudul']; ?></td></font></h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">

                        </div>
                        <h6><font color="white">
                        <td><?= $row['isi']; ?></td>
                            </font></h6>
                            <?php
                endforeach; ?>
              </tbody>
                    </div>
                    </div>
                </form>
            </div>
        </section>

  <!-- Clients-->
  <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?=BASEURL;?>/assets/frontsite/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?=BASEURL;?>/assets/frontsite/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.facebook.com/profile.php?id=100083865637929&mibextid=ZbWKwL"><img class="img-fluid img-brand d-block mx-auto" src="<?=BASEURL;?>/assets/frontsite/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?=BASEURL;?>/assets/frontsite/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>