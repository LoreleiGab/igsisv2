<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Institutions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Agenda Posters'), ['controller' => 'AgendaPosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Agenda Poster'), ['controller' => 'AgendaPosters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Check Productions'), ['controller' => 'CheckProductions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Check Production'), ['controller' => 'CheckProductions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Communications'), ['controller' => 'Communications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Communication'), ['controller' => 'Communications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Estimate Controls'), ['controller' => 'EstimateControls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Estimate Control'), ['controller' => 'EstimateControls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Funds'), ['controller' => 'Funds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Fund'), ['controller' => 'Funds', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Hiring Requests'), ['controller' => 'HiringRequests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Hiring Request'), ['controller' => 'HiringRequests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Locals'), ['controller' => 'Locals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Local'), ['controller' => 'Locals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Special Projects'), ['controller' => 'SpecialProjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Special Project'), ['controller' => 'SpecialProjects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Weblogs'), ['controller' => 'Weblogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Weblog'), ['controller' => 'Weblogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="institutions form col-md-10 columns content">
    <?= $this->Form->create($institution) ?>
    <fieldset>
        <legend><?= 'Add Institution' ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('initials');
            echo $this->Form->input('institution_father');
            echo $this->Form->input('logo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
