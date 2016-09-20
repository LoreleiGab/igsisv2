<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Modulos Usuario']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Usuarios']), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Usuario']), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Modulos']), ['controller' => 'Modulos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Modulo']), ['controller' => 'Modulos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modulosUsuarios index col-md-10 columns content">
    <h3>Modulos Usuarios</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('usuario_id') ?></th>
                <th><?= $this->Paginator->sort('modulo_id') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($modulosUsuarios as $modulosUsuario): ?>
            <tr>
                <td><?= $modulosUsuario->has('usuario') ? $this->Html->link($modulosUsuario->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $modulosUsuario->usuario->id]) : '' ?></td>
                <td><?= $modulosUsuario->has('modulo') ? $this->Html->link($modulosUsuario->modulo->id, ['controller' => 'Modulos', 'action' => 'view', $modulosUsuario->modulo->id]) : '' ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $modulosUsuario->usuario_id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $modulosUsuario->usuario_id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $modulosUsuario->usuario_id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $modulosUsuario->usuario_id), 'class'=>'btn btn-danger btn-xs']) ?>
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