<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

<header class="container pt-1">
    <div class="row text-center">
        <div class="col p-3">
            <h2>App-Multitenant</h2>
        </div>
    </div>
</header>

<div class="container">

    <div class="row mt-5">
        <?= form_open('/login-submit') ?>
        <div class="col-sm-12 col-md-4 col-lg-4 offset-md-4 offset-lg-4 offset-sm-12">
            <div class="mb-3">
                <label>Usuário</label>
                <input type="text" name="usuario" class="form-control" value="<?= old('usuario') ?>" required>
            </div>

            <div class="mb-3">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" value="<?= old('senha') ?>" required>
            </div>

            <div class="mb-3">
                <input type="submit" value="Iniciar sessão" class="btn btn-success">
            </div>

        </div>
        <?= form_close() ?>

    </div>
</div>


<?= $this->endsection() ?>