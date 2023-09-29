<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col">
                <h3 class="text-center">Editar Tarefa</h3>
                <hr>
                <?= form_open('edit_task_submit', ['novalidate' => true]) ?>

                    <!-- task id encrypted -->
                    <input type="hidden" name="hidden_id" value="<?= encrypt($task->id) ?>">

                    <div class="mb-3">
                        <label class="form-label">Designação da tarefa</label>
                        <input type="text" name="text_tarefa" class="form-control" placeholder="Designação da tarefa" required value="<?= old('text_tarefa', $task->task_name) ?>"> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrição da tarefa</label>
                        <textarea name="text_descricao" class="form-control" rows="3" required value="<?= old('text_descricao', $task->task_description) ?>"></textarea> 
                    </div>

                    <!-- task status -->
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select w-25" name="select_status">
                        <?php foreach(STATUS_LIST as $key=>$value): ?>
                            <option value="<?= $key ?>"<?= check_status($key, $task->task_status) ?> ><?= $value ?></option>
                        <?php endforeach; ?>
                        </select> 
                    </div>

                    <div class="text-center">
                        <a href="<?= site_url('/') ?>" class="btn btn-light px-5">Cancelar</a>
                        <button type="submit" class="btn btn-light px-5">Guardar</button>
                    </div>
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