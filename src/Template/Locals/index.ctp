<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Local']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Institutions']), ['controller' => 'Institutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Institution']), ['controller' => 'Institutions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Agenda Posters']), ['controller' => 'AgendaPosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Agenda Poster']), ['controller' => 'AgendaPosters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Agendas']), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Agenda']), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Detail Locals']), ['controller' => 'DetailLocals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Detail Local']), ['controller' => 'DetailLocals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Historic Occurrences']), ['controller' => 'HistoricOccurrences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Historic Occurrence']), ['controller' => 'HistoricOccurrences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Occurrences']), ['controller' => 'Occurrences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Occurrence']), ['controller' => 'Occurrences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="locals index col-md-10 columns content">
    <h3><?= __('Locals') ?></h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('institution_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('rider') ?></th>
                <th><?= $this->Paginator->sort('published') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($locals as $local): ?>
            <tr>
                <td><?= $this->Number->format($local->id) ?></td>
                <td><?= $local->has('institution') ? $this->Html->link($local->institution->name, ['controller' => 'Institutions', 'action' => 'view', $local->institution->id]) : '' ?></td>
                <td><?= h($local->name) ?></td>
                <td><?= h($local->rider) ?></td>
                <td><?= h($local->published) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $local->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $local->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $local->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $local->id), 'class'=>'btn btn-danger btn-xs']) ?>
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