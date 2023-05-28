<section class="py-5 full-height secondary mt-200">
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

<?php foreach ($allPortfolio as $row) : ?>
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
        </div>
    </section>
<?php endforeach ?>