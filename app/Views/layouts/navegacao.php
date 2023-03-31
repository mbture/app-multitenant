<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 text-center card">
            <div class="row">
                <?php if (user_autorized('001')) : ?>
                    <div class="col text-center"><a href="<?= site_url('/consultar') ?>">Consultar</a></div>
                <?php endif; ?>
                <?php if (user_autorized('002')) : ?>
                    <div class="col text-center"><a href="<?= site_url('/adicionar-editar') ?>">Adicionar e editar</a></div>
                <?php endif; ?>
                <?php if (user_autorized('003')) : ?>
                    <div class="col text-center"><a href="<?= site_url('/administracao') ?>">Administracao</a></div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>