<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>">

    <!-- page css -->

    <!-- Core css -->
    <link href="<?= base_url('assets/css/app.min.css') ?>" rel="stylesheet">

</head>

<body>
    <div class="app">
        <!-- <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')"> -->
        <div class="d-flex flex-column justify-content-between w-100 align-items-center" style="height: 100vh;">

            <!-- CONTENT -->
            <?= $this->renderSection('content'); ?>

            <!-- FOOTER -->

        </div>
        <!-- </div> -->
    </div>


    <!-- Core Vendors JS -->
    <script src="<?= base_url('assets/js/vendors.min.js') ?>"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="<?= base_url('assets/js/app.min.js') ?>"></script>

</body>

</html>