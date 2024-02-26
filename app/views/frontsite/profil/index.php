        <!-- Profil-->
        <style>
    body {
      background-color: green;
    }
  </style>
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><font color="#ffc800">Profil</h2>
                    <h3 class="section-subheading text-muted"><font color="white">Forum Kerukunan Umat Beragama Kabupaten Pelalawan</font></h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" img src="<?=BASEURL;?>/assets/frontsite/img/profil/tugasfkub.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
              <tbody>
                <?php foreach ($data['profiltugas'] as $row) : ?>
                  <tr>
                 <h4 class="subheading"><td><?= $row['judul']; ?></td></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">
                            <font color="white">
                                <td><?= $row['subjudul']; ?></td><br>

                            <br><td><?= $row['isi']; ?></td>
                                </font>
                            </p></div>
                        </div>
                    </li>
                    </tr>
                  <?php
                endforeach; ?>
              </tbody>

                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" img src="<?=BASEURL;?>/assets/frontsite/img/profil/kegunaan.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
            <tbody>
                <?php foreach ($data['profilfungsi'] as $row) : ?>
                  <tr>
                 <h4 class="subheading"><td><?= $row['judul']; ?></td></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">
                                <font color="white">
                                <td><?= $row['subjudul']; ?></td><br>

                            <br><td><?= $row['isi']; ?></td>
                                </font>
                            </p></div>
                        </div>
                    </li>
                    </tr>
                  <?php
                endforeach; ?>
              </tbody>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" img src="<?=BASEURL;?>/assets/frontsite/img/profil/visifkub.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                <tbody>
                <?php foreach ($data['profilvisi'] as $row) : ?>
                  <tr>
                 <h4 class="subheading"><td><?= $row['judul']; ?></td></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">
                            <font color="white">
                                <td><?= $row['subjudul']; ?></td><br>

                            <br><td><?= $row['isi']; ?></td>
                                </font>
                            </p></div>
                        </div>
                    </li>
                     </tr>
                  <?php
                endforeach; ?>
              </tbody>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" img src="<?=BASEURL;?>/assets/frontsite/img/profil/misifkub.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <tbody>
                <?php foreach ($data['profilmisi'] as $row) : ?>
                  <tr>
                 <h4 class="subheading"><td><?= $row['judul']; ?></td></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">
                                <font color="white">
                                <td><?= $row['subjudul']; ?></td><br>

                            <br><td><?= $row['isi']; ?></td>
                                </font>
                            </p></div>
                        </div>
                    </li>
                     </tr>
                  <?php
                endforeach; ?>
              </tbody>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                        </div>
                    </li>
                </ul>
            </div>
        </section>
</font>


