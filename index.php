<!doctype html>
<html lang="en">

<head>
    <?php include 'config/app.php' ?>
    <?php include 'components/header.php' ?>
</head>

<body>

    <?php include 'data/data.php' ?>

    <?php include 'components/nav.php' ?>
    <?php

    $page = isset($_GET['page']) ? $_GET['page'] : null;

    if ($page == null) {
        include 'pages/home.php';
    } else if ($page == 'portfolio') {
        include 'pages/portfolio.php';
    }

    ?>

    <?= include 'components/footer.php' ?>