<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<!-- delete -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col card p-5">

            <div class="mb-3">
                <h4 class="text-info"><?=$task->task_name?></h4>
            </div>
                <hr>
            
            <div class="mb-3">
                <p class="opacity-50">Descrição da tarefa:</p>      
                <h4><?= $task->task_description?></h4>
            </div>

            <div class="mb-3">
                <p class="opacity-50">Status:</p>      
                <h4><?= STATUS_LIST[$task->task_status]?></h4>
            </div>

            <div class="text-center">
                <a href="<?= site_url('/') ?>" class="btn btn-light px-5">Voltar</a>
             </div>
                  
            
        </div>
    </div>
</div>
 

<?= $this->endSection() ?>