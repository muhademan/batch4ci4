<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita</title>
    <!-- bootstrap ci css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>
    <?= $this->include('template/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">Berita online terpecaya</span>
        </div>
    </footer>
</body>
<!-- jquery dan bootstrap js -->
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

</html>