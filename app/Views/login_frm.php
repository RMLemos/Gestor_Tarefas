<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<!-- login form with bootstrap -->
<div class="d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 col-10">
                <div class="card bg-secundary text-light rounded-3 p-5">
                    <?= form_open('login_submit', ['novalidate' => true]) ?>

                    <h3 class="text-center">Login</h3>
                    <hr>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="text_usuario" placeholder="Nome utilizador" required value="<?= old('text_usuario', '') ?>">
                        <?= !empty($validation_errors['text_usuario']) ? '<p class="text-danger">' . $validation_errors['text_usuario'] . '</p>' : '' ?>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="text_senha" placeholder="Password" required value="<?= old('text_senha', '') ?>"> 
                        <?= !empty($validation_errors['text_senha']) ? '<p class="text-danger">' . $validation_errors['text_senha'] . '</p>' : '' ?> 
                    </div>
                    <div class="mb-3 text-end">
                        <button class="btn btn-light w-10">Entrar</button>  
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div> 
<input type="text" name="teste">
<?= $this->endSection() ?>