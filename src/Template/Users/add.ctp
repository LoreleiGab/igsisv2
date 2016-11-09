<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Institutions'), ['controller' => 'Institutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Institution'), ['controller' => 'Institutions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Call Comments'), ['controller' => 'CallComments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Call Comment'), ['controller' => 'CallComments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Calls'), ['controller' => 'Calls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Call'), ['controller' => 'Calls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Check Productions'), ['controller' => 'CheckProductions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Check Production'), ['controller' => 'CheckProductions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Estimate Controls'), ['controller' => 'EstimateControls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Estimate Control'), ['controller' => 'EstimateControls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Formation Effectives'), ['controller' => 'FormationEffectives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Formation Effective'), ['controller' => 'FormationEffectives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Formations'), ['controller' => 'Formations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Formation'), ['controller' => 'Formations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Historics'), ['controller' => 'Historics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Historic'), ['controller' => 'Historics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Legal Persons'), ['controller' => 'LegalPersons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Legal Person'), ['controller' => 'LegalPersons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Log Reopenings'), ['controller' => 'LogReopenings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Log Reopening'), ['controller' => 'LogReopenings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Logs'), ['controller' => 'Logs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Log'), ['controller' => 'Logs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Physical Persons'), ['controller' => 'PhysicalPersons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Physical Person'), ['controller' => 'PhysicalPersons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Times'), ['controller' => 'Times', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Time'), ['controller' => 'Times', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form col-md-10 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('name');
            echo $this->Form->input('rf_rg');
            echo $this->Form->input('password');
            echo $this->Form->input('phone');
            echo $this->Form->input('email');
            echo $this->Form->input('institution_id', ['options' => $institutions]);
            echo $this->Form->input('group_id', ['options' => $groups]);
            echo $this->Form->input('get_notification');
            echo $this->Form->input('contracts');
            echo $this->Form->input('published');

        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
