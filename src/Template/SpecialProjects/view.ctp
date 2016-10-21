<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Special Project']), ['action' => 'edit', $specialProject->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Special Project']), ['action' => 'delete', $specialProject->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $specialProject->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Special Projects']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Special Project']), ['action' => 'add']) ?> </li>
        
    </ul>
</nav>
<div class="specialProjects view col-lg-10 col-md-9">
    <h3><?= h($specialProject->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($specialProject->name) ?></td>
        </tr>
        <tr>
            <th>Institution</th>
            <td><?= $specialProject->has('institution') ? $this->Html->link($specialProject->institution->name, ['controller' => 'Institutions', 'action' => 'view', $specialProject->institution->id]) : '' ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($specialProject->id) ?></td>
        </tr>
        <tr>
            <th>Published</th>
            <td><?= $specialProject->published ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
