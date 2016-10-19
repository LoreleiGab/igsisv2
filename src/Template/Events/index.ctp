<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Event']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Juridical Relations']), ['controller' => 'JuridicalRelations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Juridical Relation']), ['controller' => 'JuridicalRelations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Special Projects']), ['controller' => 'SpecialProjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Special Project']), ['controller' => 'SpecialProjects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Type Events']), ['controller' => 'TypeEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Type Event']), ['controller' => 'TypeEvents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Fiscals']), ['controller' => 'Fiscals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Fiscal']), ['controller' => 'Fiscals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Surrogates']), ['controller' => 'Surrogates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Surrogate']), ['controller' => 'Surrogates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Age Groups']), ['controller' => 'AgeGroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Age Group']), ['controller' => 'AgeGroups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Producers']), ['controller' => 'Producers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Producer']), ['controller' => 'Producers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Institutions']), ['controller' => 'Institutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Institution']), ['controller' => 'Institutions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Agenda Posters']), ['controller' => 'AgendaPosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Agenda Poster']), ['controller' => 'AgendaPosters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Agendas']), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Agenda']), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Calls']), ['controller' => 'Calls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Call']), ['controller' => 'Calls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Check Productions']), ['controller' => 'CheckProductions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Check Production']), ['controller' => 'CheckProductions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Cinemas']), ['controller' => 'Cinemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Cinema']), ['controller' => 'Cinemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Communications']), ['controller' => 'Communications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Communication']), ['controller' => 'Communications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Historic Occurrences']), ['controller' => 'HistoricOccurrences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Historic Occurrence']), ['controller' => 'HistoricOccurrences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Historics']), ['controller' => 'Historics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Historic']), ['controller' => 'Historics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Information Productions']), ['controller' => 'InformationProductions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Information Production']), ['controller' => 'InformationProductions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Legal Persons']), ['controller' => 'LegalPersons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Legal Person']), ['controller' => 'LegalPersons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Legal Representatives']), ['controller' => 'LegalRepresentatives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Legal Representative']), ['controller' => 'LegalRepresentatives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Log Reopenings']), ['controller' => 'LogReopenings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Log Reopening']), ['controller' => 'LogReopenings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Musics']), ['controller' => 'Musics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Music']), ['controller' => 'Musics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Occurrences']), ['controller' => 'Occurrences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Occurrence']), ['controller' => 'Occurrences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Physical Persons']), ['controller' => 'PhysicalPersons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Physical Person']), ['controller' => 'PhysicalPersons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Services']), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Service']), ['controller' => 'Services', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Sub Events']), ['controller' => 'SubEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Sub Event']), ['controller' => 'SubEvents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Temp Datas']), ['controller' => 'TempDatas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Temp Data']), ['controller' => 'TempDatas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Temp Posters']), ['controller' => 'TempPosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Temp Poster']), ['controller' => 'TempPosters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Theater Dances']), ['controller' => 'TheaterDances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Theater Dance']), ['controller' => 'TheaterDances', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Upload Events']), ['controller' => 'UploadEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Upload Event']), ['controller' => 'UploadEvents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Workshops']), ['controller' => 'Workshops', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Workshop']), ['controller' => 'Workshops', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="events index col-md-10 columns content">
    <h3>Events</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('juridical_relation_id') ?></th>
                <th><?= $this->Paginator->sort('special_project_id') ?></th>
                <th><?= $this->Paginator->sort('type_event_id') ?></th>
                <th><?= $this->Paginator->sort('sub_event') ?></th>
                <th><?= $this->Paginator->sort('fiscal_id') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
            <tr>
                <td><?= $this->Number->format($event->id) ?></td>
                <td><?= h($event->name) ?></td>
                <td><?= $event->has('juridical_relation') ? $this->Html->link($event->juridical_relation->name, ['controller' => 'JuridicalRelations', 'action' => 'view', $event->juridical_relation->id]) : '' ?></td>
                <td><?= $event->has('special_project') ? $this->Html->link($event->special_project->name, ['controller' => 'SpecialProjects', 'action' => 'view', $event->special_project->id]) : '' ?></td>
                <td><?= $event->has('type_event') ? $this->Html->link($event->type_event->name, ['controller' => 'TypeEvents', 'action' => 'view', $event->type_event->id]) : '' ?></td>
                <td><?= h($event->sub_event) ?></td>
                <td><?= $event->has('fiscal') ? $this->Html->link($event->fiscal->name, ['controller' => 'Fiscals', 'action' => 'view', $event->fiscal->id]) : '' ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $event->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $event->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $event->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $event->id), 'class'=>'btn btn-danger btn-xs']) ?>
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