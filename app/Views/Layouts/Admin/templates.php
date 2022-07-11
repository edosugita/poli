<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>">

    <!-- page css -->
    <link href="<?= base_url('assets/vendors/datatables/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendors/select2/select2.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') ?>" rel="stylesheet">

    <!-- Core css -->
    <link href="<?= base_url('assets/css/app.min.css') ?>" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="layout">
            <?= $this->include('Layouts/Admin/header'); ?>
            <?= $this->include('Layouts/Admin/sidebar'); ?>

            <!-- Page Container START -->
            <div class="page-container">


                <!-- Content Wrapper START -->
                <?= $this->renderSection('content'); ?>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <?= $this->include('Layouts/Admin/footer'); ?>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="<?= base_url('assets/js/vendors.min.js') ?>"></script>

    <!-- page js -->
    <script src="<?= base_url('assets/vendors/chartjs/Chart.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/pages/dashboard-default.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/datatables/dataTables.bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/select2/select2.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>

    <!-- Core JS -->
    <script src="<?= base_url('assets/js/app.min.js') ?>"></script>

    <script>
        $('#data-table').DataTable();
        $('.select2').select2();
        $('.datepicker-input').datepicker();
    </script>

    <?= $this->renderSection('js'); ?>

</body>

</html>