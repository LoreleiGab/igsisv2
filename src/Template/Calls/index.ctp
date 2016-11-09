<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Call']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Type Calls']), ['controller' => 'TypeCalls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Type Call']), ['controller' => 'TypeCalls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Events']), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Event']), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Call Comments']), ['controller' => 'CallComments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Call Comment']), ['controller' => 'CallComments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Log Reopenings']), ['controller' => 'LogReopenings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Log Reopening']), ['controller' => 'LogReopenings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Status']), ['controller' => 'Status', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Status']), ['controller' => 'Status', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="calls index col-md-10 columns content">
    <h3><?= __('Calls') ?></h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('type_call_id') ?></th>
                <th><?= $this->Paginator->sort('event_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('date') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($calls as $call): ?>
            <tr>
                <td><?= $this->Number->format($call->id) ?></td>
                <td><?= $call->has('type_call') ? $this->Html->link($call->type_call->name, ['controller' => 'TypeCalls', 'action' => 'view', $call->type_call->id]) : '' ?></td>
                <td><?= $call->has('event') ? $this->Html->link($call->event->name, ['controller' => 'Events', 'action' => 'view', $call->event->id]) : '' ?></td>
                <td><?= $call->has('user') ? $this->Html->link($call->user->name, ['controller' => 'Users', 'action' => 'view', $call->user->id]) : '' ?></td>
                <td><?= h($call->title) ?></td>
                <td><?= h($call->date) ?></td>
                <td><?= $this->Number->format($call->status) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $call->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $call->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $call->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $call->id), 'class'=>'btn btn-danger btn-xs']) ?>
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