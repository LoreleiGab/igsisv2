<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Type Event']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Agenda Posters']), ['controller' => 'AgendaPosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Agenda Poster']), ['controller' => 'AgendaPosters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Agendas']), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Agenda']), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Events']), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Event']), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Internal Events']), ['controller' => 'InternalEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Internal Event']), ['controller' => 'InternalEvents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Sub Events']), ['controller' => 'SubEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Sub Event']), ['controller' => 'SubEvents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Temp Posters']), ['controller' => 'TempPosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Temp Poster']), ['controller' => 'TempPosters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typeEvents index col-md-10 columns content">
    <h3>Type Events</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($typeEvents as $typeEvent): ?>
            <tr>
                <td><?= $this->Number->format($typeEvent->id) ?></td>
                <td><?= h($typeEvent->name) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $typeEvent->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $typeEvent->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $typeEvent->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $typeEvent->id), 'class'=>'btn btn-danger btn-xs']) ?>
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