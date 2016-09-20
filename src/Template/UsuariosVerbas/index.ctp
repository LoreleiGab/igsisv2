<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Usuarios Verba']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Verbas']), ['controller' => 'Verbas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Verba']), ['controller' => 'Verbas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Usuarios']), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Usuario']), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuariosVerbas index col-md-10 columns content">
    <h3>Usuarios Verbas</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('verba_id') ?></th>
                <th><?= $this->Paginator->sort('usuario_id') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuariosVerbas as $usuariosVerba): ?>
            <tr>
                <td><?= $usuariosVerba->has('verba') ? $this->Html->link($usuariosVerba->verba->id, ['controller' => 'Verbas', 'action' => 'view', $usuariosVerba->verba->id]) : '' ?></td>
                <td><?= $usuariosVerba->has('usuario') ? $this->Html->link($usuariosVerba->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $usuariosVerba->usuario->id]) : '' ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $usuariosVerba->verba_id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuariosVerba->verba_id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $usuariosVerba->verba_id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $usuariosVerba->verba_id), 'class'=>'btn btn-danger btn-xs']) ?>
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