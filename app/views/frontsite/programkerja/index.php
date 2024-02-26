<style>
    body {
      background-color: green;
    }
  </style>
        <!-- Team-->
        <section class="page-section" id="team">
            <div class="container">
                <div class="text-center">
                <tbody>
                <?php foreach ($data['programkerja'] as $row) : ?>
                  <tr>
                    <h2 class="section-heading text-uppercase">
                        <font color="#ffc800"><?= $row['judul']; ?></font></h2>
                    <h3 class="section-subheading text-muted">
                        <font color="white"><td><?= $row['subjudul']; ?></td></font></h3>
                </div>
                <div class="row">
                    <div class="col-lg-15 mx-auto text-left"><p class="">
                    <font color="white">
                    <br><td><?= $row['isi']; ?></td>
                    </font></p></div>
                </tr>
                  <?php
                endforeach; ?>
              </tbody>
                </div>
            </div>
        </section>