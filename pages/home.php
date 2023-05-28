<section id="hero" class="full-height <?= $flexCenter ?> flex-column">
    <div class="container ">
        <div class="row  <?= $flexCenter ?>">
            <div class="col-sm-6 pe-5">
                <h1>Webdev <br>& App Developer</h1>
                <p class="my-4">Jasa pembuatan website dan aplikasi mobile, request sesuka hati, jangan ragu untuk tanya-tanya dengan menekan tombol dibawah</p>
                <a href="https://wa.me/6285756187433" class="btn btn-outline-secondary">Hubungi kami</a>
            </div>
            <div class="col-sm-6 <?= $flexCenter ?>">
                <img src="./assets/img/logo.png" alt="Logo samtam tech" class="">
            </div>
        </div>
    </div>
</section>

<section class="py-5 full-height secondary">
    <div class="container">
        <div class="row mb-5 pb-5" <?= $aosAnimation ?>>
            <div class="col-sm-6 offset-sm-3 text-center">
                <h2 class="mb-3"><strong>Portfolio Kami </strong></h2>
                <p class="lh-base"><small>tempat yang tepat untuk memenuhi kebutuhan iT Anda. jangan ragu untuk melakukan konsultasi (gratis)
                    </small></p>
                <a href="https://wa.me/6285756187433" class="btn btn-outline-secondary">Konsultasi</a>
            </div>
        </div>
        <div class="row flex-row-reverse mt-5 pt-5 <?= $flexCenter ?>">
            <div class="col-sm-6 px-5" <?= $aosAnimation ?>>
                <h5 class="lh-base text-capitalize"><strong>Botting Id | Digital Invitation.</strong></h5>
                <p class="text-secondary lh-base"><small>Botting ID adalah sebuah layanan yang menyediakan generator undangan digital dalam bentuk buku. Dengan fitur desain yang fleksibel dan efek halaman berbelok, Botting ID memungkinkan pengguna untuk membuat undangan digital yang kreatif dan unik.</small></p>
                <div class="button-warpper">
                    <button class="btn btn-outline-secondary mt-3 me-2">Laravel </button>
                    <button class="btn btn-outline-secondary mt-3 me-2">Vue js </button>
                    <button class="btn btn-outline-secondary mt-3 me-2">Javascript</button>
                </div>
            </div>
            <div class="col-sm-6 " <?= $aosAnimation ?>>
                <div class="img-card-wrapper">
                    <img src="./assets/img/portfolio_img/botting.png" alt="" width="300" class="main-radius img-card box-shadow">
                    <div class="bg-diagonal secondary img-card main-radius "></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php foreach ($dataPortfolio as $row) : ?>
    <section class="py-5 full-height  <?= $flexCenter . " " . $row['class']  ?>">
        <div class="container">
            <div class="row <?= $row['row'] . " " . $flexCenter ?> mt-5">
                <div class="col-sm-6 px-5" <?= $aosAnimation ?>>
                    <h5 class="lh-base text-capitalize"><strong><?= $row['judul'] ?></strong></h5>
                    <p class="text-secondary lh-base"><small><?= $row['deskripsi'] ?></small></p>
                    <?php foreach ($row['techstack'] as $techstack) : ?>
                        <button class="btn btn-outline-secondary mt-3 me-2"><?= $techstack ?></button>
                    <?php endforeach ?>
                </div>
                <div class="col-sm-6 <?= $flexCenter ?>" <?= $aosAnimation ?>>
                    <div class="img-card-wrapper">
                        <img alt="$row['alt']?>" src="./assets/img/portfolio_img/<?= $row['img'] ?>" alt="" width="300" class="main-radius img-card box-shadow">
                        <div class="bg-diagonal <?= $row['class'] ?> img-card main-radius "></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endforeach ?>

<?php foreach ($dataPortfolioMobile as $row) : ?>
    <section class="py-5 full-height <?= $flexCenter . " " . $row['class']  ?>">
        <div class="container">
            <div class="row <?= $row['row'] . " " . $flexCenter ?> mt-5">
                <div class="col-sm-6 px-5" <?= $aosAnimation ?>>
                    <h5 class="lh-base text-capitalize"><strong><?= $row['judul'] ?></strong></h5>
                    <p class="text-secondary lh-base"><small><?= $row['deskripsi'] ?></small></p>
                    <?php foreach ($row['techstack'] as $techstack) : ?>
                        <button class="btn btn-outline-secondary mt-3 me-2"><?= $techstack ?></button>
                    <?php endforeach ?>
                </div>
                <div class="col-sm-6 <?= $flexCenter ?>" <?= $aosAnimation ?>>
                    <div class="img-card-mobile-wrapper">
                        <img alt="$row['alt']?>" src="./assets/img/portfolio_img/<?= $row['img'] ?>" alt="" width="300" class="main-radius img-card-mobile box-shadow">
                        <div class="bg-diagonal img-card-mobile main-radius "></div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-5">
                <div class="col-sm-12 text-center">
                    <a href="?page=portfolio" class="btn btn-outline-secondary">Lihat Lainnya ...</a>
                </div>
            </div>
        </div>
    </section>
<?php endforeach ?>


<section class="full-height secondary mt-5 pt-5">
    <div class="container mt-5" <?= $aosAnimation ?>>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h4><strong>Tools yang kami gunakan</strong></h4>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-6 offset-sm-3 mt-3">
                <p><small>Kami menggunakan teknologi terkini dalam pengembangan web untuk memberikan solusi web yang modern, efisien, dan kreatif untuk kebutuhan Anda.</small></p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($dataTools as $row) : ?>
                <div class="col-4 d-flex align-items-center flex-column mt-5">
                    <img src="./assets/img/tools/<?= $row['img'] ?>" alt="<?= $row['alt'] ?>" width="100">
                    <p class="mt-3"><small><?= $row['name'] ?></small></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="hubungi_kami">
    <div class="container">
        <div class="row <?= $flexCenter ?>  ">
            <div class="col-sm-6  text-center" <?= $aosAnimation ?>>
                <h1 class="lh-base"><strong>Segera hubungi kami untuk informasi lebih lanjut tentang produk dan layanan.</strong></h1>
            </div>
        </div>
    </div>
</section>