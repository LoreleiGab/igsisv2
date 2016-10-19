<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $event->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $event->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Events'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Juridical Relations'), ['controller' => 'JuridicalRelations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Juridical Relation'), ['controller' => 'JuridicalRelations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Special Projects'), ['controller' => 'SpecialProjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Special Project'), ['controller' => 'SpecialProjects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Type Events'), ['controller' => 'TypeEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Type Event'), ['controller' => 'TypeEvents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Fiscals'), ['controller' => 'Fiscals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Fiscal'), ['controller' => 'Fiscals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Surrogates'), ['controller' => 'Surrogates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Surrogate'), ['controller' => 'Surrogates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Age Groups'), ['controller' => 'AgeGroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Age Group'), ['controller' => 'AgeGroups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Producers'), ['controller' => 'Producers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Producer'), ['controller' => 'Producers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Institutions'), ['controller' => 'Institutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Institution'), ['controller' => 'Institutions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Agenda Posters'), ['controller' => 'AgendaPosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Agenda Poster'), ['controller' => 'AgendaPosters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Calls'), ['controller' => 'Calls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Call'), ['controller' => 'Calls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Check Productions'), ['controller' => 'CheckProductions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Check Production'), ['controller' => 'CheckProductions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Cinemas'), ['controller' => 'Cinemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Cinema'), ['controller' => 'Cinemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Communications'), ['controller' => 'Communications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Communication'), ['controller' => 'Communications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Historic Occurrences'), ['controller' => 'HistoricOccurrences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Historic Occurrence'), ['controller' => 'HistoricOccurrences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Historics'), ['controller' => 'Historics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Historic'), ['controller' => 'Historics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Information Productions'), ['controller' => 'InformationProductions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Information Production'), ['controller' => 'InformationProductions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Legal Persons'), ['controller' => 'LegalPersons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Legal Person'), ['controller' => 'LegalPersons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Legal Representatives'), ['controller' => 'LegalRepresentatives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Legal Representative'), ['controller' => 'LegalRepresentatives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Log Reopenings'), ['controller' => 'LogReopenings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Log Reopening'), ['controller' => 'LogReopenings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Musics'), ['controller' => 'Musics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Music'), ['controller' => 'Musics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Occurrences'), ['controller' => 'Occurrences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Occurrence'), ['controller' => 'Occurrences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Physical Persons'), ['controller' => 'PhysicalPersons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Physical Person'), ['controller' => 'PhysicalPersons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Sub Events'), ['controller' => 'SubEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Sub Event'), ['controller' => 'SubEvents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Temp Datas'), ['controller' => 'TempDatas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Temp Data'), ['controller' => 'TempDatas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Temp Posters'), ['controller' => 'TempPosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Temp Poster'), ['controller' => 'TempPosters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Theater Dances'), ['controller' => 'TheaterDances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Theater Dance'), ['controller' => 'TheaterDances', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Upload Events'), ['controller' => 'UploadEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Upload Event'), ['controller' => 'UploadEvents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Workshops'), ['controller' => 'Workshops', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Workshop'), ['controller' => 'Workshops', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="events form col-md-10 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= 'Edit Event' ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('juridical_relation_id', ['options' => $juridicalRelations]);
            echo $this->Form->input('special_project_id', ['options' => $specialProjects]);
            echo $this->Form->input('type_event_id', ['options' => $typeEvents]);
            echo $this->Form->input('sub_event');
            echo $this->Form->input('fiscal_id', ['options' => $fiscals]);
            echo $this->Form->input('surrogate_id', ['options' => $surrogates]);
            echo $this->Form->input('author');
            echo $this->Form->input('technical_form');
            echo $this->Form->input('age_group_id', ['options' => $ageGroups]);
            echo $this->Form->input('synopsis');
            echo $this->Form->input('release_communication');
            echo $this->Form->input('links');
            echo $this->Form->input('producer_id', ['options' => $producers]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('institution_id', ['options' => $institutions]);
            echo $this->Form->input('date_send');
            echo $this->Form->input('public_target');
            echo $this->Form->input('published');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
