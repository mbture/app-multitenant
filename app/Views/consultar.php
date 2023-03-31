<?php $this->extend('layouts/default.php') ?>
<?php $this->section('content') ?>
<div class="container">
    <div class="row my-5">
        <div class="col">
            <?php if (!isset($produtos) || count($produtos) == 0) : ?>
                <p>Não existem produtos</p>
            <?php else : ?>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($produtos as $produto) : ?>
                            <tr>
                                <td><?= $produto->id_produto ?></td>
                                <td><?= $produto->nome_produto ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $this->endsection() ?>