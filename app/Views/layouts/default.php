<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App-Multitenant</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>

<body>
    <?php if (session()->has('usuario')) : ?>
        <?= $this->include('layouts/user_bar') ?>
        <?= $this->include('layouts/navegacao') ?>
    <?php endif; ?>

    <?= $this->rendersection('content') ?>

</body>

</html>