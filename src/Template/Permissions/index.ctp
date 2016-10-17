<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Permission']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Groups']), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Group']), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="permissions index col-md-10 columns content">
    <h3>Permissions</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('group_id') ?></th>
                <th><?= $this->Paginator->sort('controller') ?></th>
                <th><?= $this->Paginator->sort('action') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($permissions as $permission): ?>
            <tr>
                <td><?= $this->Number->format($permission->id) ?></td>
                <td><?= $permission->has('group') ? $this->Html->link($permission->group->name, ['controller' => 'Groups', 'action' => 'view', $permission->group->id]) : '' ?></td>
                <td><?= h($permission->controller) ?></td>
                <td><?= h($permission->action) ?></td>
                <td><?= h($permission->created) ?></td>
                <td><?= h($permission->modified) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $permission->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $permission->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $permission->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $permission->id), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('anterior'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('próximo') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registros de um total de
         {{count}}, começando no registro {{start}}, terminando em {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>