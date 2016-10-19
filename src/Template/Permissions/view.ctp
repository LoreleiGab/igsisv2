<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Permission']), ['action' => 'edit', $permission->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Permission']), ['action' => 'delete', $permission->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $permission->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Permissions']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Permission']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Groups']), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Group']), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="permissions view col-lg-10 col-md-9">
    <h3><?= h($permission->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Group</th>
            <td><?= $permission->has('group') ? $this->Html->link($permission->group->name, ['controller' => 'Groups', 'action' => 'view', $permission->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Controller</th>
            <td><?= h($permission->controller) ?></td>
        </tr>
        <tr>
            <th>Action</th>
            <td><?= h($permission->action) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($permission->id) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($permission->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($permission->modified) ?></tr>
        </tr>
    </table>
</div>
