<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Institution']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Agenda Posters']), ['controller' => 'AgendaPosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Agenda Poster']), ['controller' => 'AgendaPosters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Agendas']), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Agenda']), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Check Productions']), ['controller' => 'CheckProductions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Check Production']), ['controller' => 'CheckProductions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Communications']), ['controller' => 'Communications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Communication']), ['controller' => 'Communications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Estimate Controls']), ['controller' => 'EstimateControls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Estimate Control']), ['controller' => 'EstimateControls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Events']), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Event']), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Funds']), ['controller' => 'Funds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Fund']), ['controller' => 'Funds', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Hiring Requests']), ['controller' => 'HiringRequests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Hiring Request']), ['controller' => 'HiringRequests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Locals']), ['controller' => 'Locals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Local']), ['controller' => 'Locals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Special Projects']), ['controller' => 'SpecialProjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Special Project']), ['controller' => 'SpecialProjects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Weblogs']), ['controller' => 'Weblogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Weblog']), ['controller' => 'Weblogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="institutions index col-md-10 columns content">
    <h3>Institutions</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('initials') ?></th>
                <th><?= $this->Paginator->sort('institution_father') ?></th>
                <th><?= $this->Paginator->sort('logo') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($institutions as $institution): ?>
            <tr>
                <td><?= $this->Number->format($institution->id) ?></td>
                <td><?= h($institution->name) ?></td>
                <td><?= h($institution->initials) ?></td>
                <td><?= $this->Number->format($institution->institution_father) ?></td>
                <td><?= h($institution->logo) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $institution->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $institution->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $institution->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $institution->id), 'class'=>'btn btn-danger btn-xs']) ?>
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