<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['User']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Institutions']), ['controller' => 'Institutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Institution']), ['controller' => 'Institutions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Groups']), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Group']), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Call Comments']), ['controller' => 'CallComments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Call Comment']), ['controller' => 'CallComments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Calls']), ['controller' => 'Calls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Call']), ['controller' => 'Calls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Check Productions']), ['controller' => 'CheckProductions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Check Production']), ['controller' => 'CheckProductions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Estimate Controls']), ['controller' => 'EstimateControls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Estimate Control']), ['controller' => 'EstimateControls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Events']), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Event']), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Formation Effectives']), ['controller' => 'FormationEffectives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Formation Effective']), ['controller' => 'FormationEffectives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Formations']), ['controller' => 'Formations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Formation']), ['controller' => 'Formations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Historics']), ['controller' => 'Historics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Historic']), ['controller' => 'Historics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Legal Persons']), ['controller' => 'LegalPersons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Legal Person']), ['controller' => 'LegalPersons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Log Reopenings']), ['controller' => 'LogReopenings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Log Reopening']), ['controller' => 'LogReopenings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Logs']), ['controller' => 'Logs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Log']), ['controller' => 'Logs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Physical Persons']), ['controller' => 'PhysicalPersons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Physical Person']), ['controller' => 'PhysicalPersons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Times']), ['controller' => 'Times', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Time']), ['controller' => 'Times', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Funds']), ['controller' => 'Funds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Fund']), ['controller' => 'Funds', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Locals']), ['controller' => 'Locals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Local']), ['controller' => 'Locals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index col-md-10 columns content">
    <h3><?= __('Users') ?></h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('rf_rg') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->rf_rg) ?></td>
                <td><?= h($user->phone) ?></td>
                <td><?= h($user->email) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $user->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $user->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $user->id), 'class'=>'btn btn-danger btn-xs']) ?>
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