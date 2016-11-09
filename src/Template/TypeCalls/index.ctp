<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Type Call']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Calls']), ['controller' => 'Calls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Call']), ['controller' => 'Calls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typeCalls index col-md-10 columns content">
    <h3><?= __('Type Calls') ?></h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('area') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($typeCalls as $typeCall): ?>
            <tr>
                <td><?= $this->Number->format($typeCall->id) ?></td>
                <td><?= h($typeCall->name) ?></td>
                <td><?= $this->Number->format($typeCall->area) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $typeCall->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $typeCall->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $typeCall->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $typeCall->id), 'class'=>'btn btn-danger btn-xs']) ?>
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