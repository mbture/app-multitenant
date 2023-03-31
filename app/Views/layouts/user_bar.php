<div class="container-fluid">
    <div class="row">
        <div class="col text-end bg-light">
            <?= session()->usuario['nome'] ?> | <a href="<?= site_url('/logout') ?>">logout</a>
        </div>
    </div>
</div>