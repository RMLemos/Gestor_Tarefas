<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<section class="container mt-5">
    <div class="row">
        <div class="col">
            <!-- search bar -->
            <?= form_open('search') ?>
                 <div class="mb-3 d-flex align-items-center">
                    <label class="me-3">Pesquisa:</label>
                    <input type="text" name="text_search" class="form-control w-50 me-3">
                    <button class="btn btn-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                 </div>
            <?= form_close() ?>
        </div>
        <div class="col text-end">
            <!-- status filter-->
            <?= form_open('filter') ?>
                <div class="d-flex mb-3 align-items-center">
                    <label class="me-3">Status:</label>
                        <select name="select_status" class="form-select">
                            <?php foreach(STATUS_LIST as $key => $value): ?>
                                <option value="<?= $key ?>"><?= $value ?></option>
                                <?php endforeach; ?>
                        </select>
                </div>
            <?= form_close() ?>
        </div>

        <div class="col text-end">
            <!-- status filter-->
            <a href="<?= site_url('new_task') ?>" class="btn btn-secondary"><i class="fa-solid fa-plus me-2"></i>Nova tarefa</a> 
        </div>
    </div>
</section>

<section class="container mt-3">
    <div class="row">
        <div class="col text-center">
            <h3>Tarefas</h3>
        </div>
    </div>
</section>

<?php if(count($tasks) >0): ?>
<section class="container mt-3">
    <div class="row">
        <div class="col">
            <table class="table table-striped table-light" id="table_tasks">
                <thead class="table-secondary">
                    <tr class="text-center">
                        <th width='50%'>Tarefa</th>
                        <th width='25%'>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($tasks as $task):?>
                        <tr>
                            <td><?= $task->task_name ?></td>
                            <td><?= STATUS_LIST[$task->task_status] ?></td>
                            <td class="text-end">
                                <a href='<?= site_url('edit_task/'. $task->id) ?>' class="btn btn-secondary btn-sm"><i class="fa-solid fa-edit"></i></a>
                                <a href='<?= site_url('delete_task/'. $task->id) ?>' class="btn btn-secondary btn-sm"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php else: ?>
<section class="container mt-3">
    <div class="row">
        <div class="col text-center">
            Não foram encontradas tarefas
            </div>
    </div>
</section>
<?php endif; ?>

<!-- datatables -->
<?php if(count($tasks) >0): ?>
<script>
    $(document).ready(function() {
        $('#table_tasks').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)",
                "search": "Pesquisar:",
                "paginate": {
                    "first": "Primeiro",
                    "last": "Último",
                    "next": "Próximo",
                    "previous": "Anterior"
                },
            }
        });
    });
</script>
<?php endif; ?>
<?= $this->endSection() ?>