<?php
# @Author: Waris Agung Widodo <user>
# @Date:   2018-01-23T11:27:04+07:00
# @Email:  ido.alit@gmail.com
# @Filename: _home.php
# @Last modified by:   user
# @Last modified time: 2018-01-26T18:43:45+07:00

?>

<section id="section1 container-fluid">
    <header class="c-header">
        <div class="mask"></div>
      <?php
      // ------------------------------------------------------------------------
      // include navbar
      // ------------------------------------------------------------------------
      include '_navbar.php'; ?>
    </header>
  <?php
  // --------------------------------------------------------------------------
  // include search form part
  // --------------------------------------------------------------------------
  include '_search-form.php'; ?>
</section>

<div id="slims-home">
<section class="mt-5 container">
    <h4 class="text-secondary text-center text-thin mt-5 mb-4"><?php echo __('Subjek yang berkaitan dengan Kelautan dan Perikanan'); ?></h4>
    <ul class="topic d-flex flex-wrap justify-content-center px-0">
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?keywords=Perikanan%20Tangkap&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/Perikanan_Tangkap.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Perikanan Tangkap'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?keywords=Perikanan%20Budidaya&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/Perikanan_Budidaya.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Perikanan Budidaya'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?keywords=Pengolahan%20Ikan&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/Pengolahan_Ikan.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Pengolahan Ikan'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?keywords=Pulau%20Kecil&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/Pulau_Kecil.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Pulau Kecil'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="javascript:void(0)" class="d-flex flex-column" data-toggle="modal" data-target="#exampleModal">
                <img src="<?php echo assets('images/icon/grid_icon.png'); ?>" width="80"
                     class="mb-3 mx-auto"/>
                <?php echo __('see more..'); ?>
            </a>
        </li>
    </ul>
</section>

<?php if ($sysconf['template']['classic_popular_collection']) : ?>
<section class="mt-5 container">
    <h4 class="text-center text-light py-3 bg-blue-dark mb-4">
        <?php echo __('Koleksi Populer'); ?>
        <br>
        <small class="subtitle-section"><?php echo __('Koleksi yang sering diakses dan dimanfaatkan oleh Pemustaka Bahari. Selamat membaca!
');?></small>
    </h4>

    <slims-group-subject url="index.php?p=api/subject/popular"></slims-group-subject>
    <slims-collection url="index.php?p=api/biblio/popular"></slims-collection>

</section>
<?php endif; ?>

<?php if ($sysconf['template']['classic_new_collection']) : ?>
<section class="mt-5 container">
    <h4 class="text-center text-light py-3 bg-blue-dark mb-4">
        <?php echo __('Koleksi Terbaru');?>
        <br>
        <small class="subtitle-section"><?php echo __('Koleksi baru yang dapat Pemustaka Bahari baca. Ikuti media sosial Archivelago untuk mendapatkan informasi mengenai koleksi terbaru dan rekomendasi literatur Archivelago Indonesia Marine Library');?></small>
    </h4>

    <slims-group-subject url="index.php?p=api/subject/latest"></slims-group-subject>
    <slims-collection url="index.php?p=api/biblio/latest"></slims-collection>

</section>
<?php endif; ?>

<?php if ($sysconf['template']['classic_top_reader']) : ?>
<section class="mt-5 bg-blue-dark">
    <div class="container py-5">
        <h4 class="text-center text-light mb-4">
            <?php echo __('Anggota Perpustakaan Teraktif');?>
            <br>
            <small class="subtitle-section"><?php echo __('Berikut anggota perpustakaan yang sering melakukan peminjaman koleksi perpustakaan. Untuk Anggota Perpustakaan teraktif berkesempatan menjadi Pemustaka Terbaik yang akan mendapatkan merchandise menarik dari Archivelago Indonesia Marine Library');?></small>
        </h4>
        <slims-group-member url="index.php?p=api/member/top"></slims-group-member>
    </div>
</section>
<?php endif; ?>

<?php if ($sysconf['template']['classic_map']) : ?>
<section class="my-5 container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <iframe class="embed-responsive"
                    src="<?= $sysconf['template']['classic_map_link']; ?>"
                    height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-6 pt-8 md:pt-0">
            <h4><?= $sysconf['library_name']; ?></h4>
            <p><?= $sysconf['template']['classic_map_desc']; ?></p>
            <p class="d-flex flex-row pt-2">
                <a target="_blank" href="<?= $sysconf['template']['classic_fb_link'] ?>" class="btn btn-primary mr-2" name="button"><i class="fab fa-facebook-square text-white"></i></a>
                <a target="_blank" href="<?= $sysconf['template']['classic_twitter_link'] ?>" class="btn btn-info mr-2" name="button"><i class="fab fa-twitter-square text-white"></i></a>
                <a target="_blank" href="<?= $sysconf['template']['classic_youtube_link'] ?>" class="btn btn-danger mr-2" name="button"><i class="fab fa-youtube text-white"></i></a>
                <a target="_blank" href="<?= $sysconf['template']['classic_instagram_link'] ?>" class="btn btn-dark mr-2" name="button"><i class="fab fa-instagram text-white"></i></a>
            </p>
        </div>
    </div>
</section>
<?php endif; ?>
</div>
