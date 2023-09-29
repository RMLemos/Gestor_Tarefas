<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col">
                <h3 class="text-center">Nova Tarefa</h3>
                <hr>
                <?= form_open('new_task_submit') ?>
                    <div class="mb-3">
                        <label class="form-label">Designação da tarefa</label>
                        <input type="text" name="text_tarefa" class="form-control" placeholder="Designação da tarefa" required value="<?= old('text_tarefa', '') ?>"> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrição da tarefa</label>
                        <textarea name="text_descricao" class="form-control" rows="3" required value="<?= old('text_descricao', '') ?>"></textarea> 
                    </div>
                    <div class="text-center">
                        <a href="<?= site_url('/') ?>" class="btn btn-light px-5">Cancelar</a>
                        <button type="submit" class="btn btn-light px-5">Guardar</button>
                <?= form_close() ?>

                <?php if(!empty($validation_errors)): ?>
                        <div class="alert alert-danger mt-3">
                            <?php foreach($validation_errors as $error): ?>
                                <?= $error ?> 
                            <?php endforeach; ?>
                        </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>