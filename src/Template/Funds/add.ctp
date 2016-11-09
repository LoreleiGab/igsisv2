<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Funds'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Institutions'), ['controller' => 'Institutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Institution'), ['controller' => 'Institutions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Estimate Controls'), ['controller' => 'EstimateControls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Estimate Control'), ['controller' => 'EstimateControls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Hiring Requests'), ['controller' => 'HiringRequests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Hiring Request'), ['controller' => 'HiringRequests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Historic Hiring Resquests'), ['controller' => 'HistoricHiringResquests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Historic Hiring Resquest'), ['controller' => 'HistoricHiringResquests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funds form col-md-10 columns content">
    <?= $this->Form->create($fund) ?>
    <fieldset>
        <legend><?= __('Add Fund') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('father');
            echo $this->Form->input('institution_id', ['options' => $institutions, 'empty' => true]);
            echo $this->Form->input('pf');
            echo $this->Form->input('pj');
            echo $this->Form->input('reward');
            echo $this->Form->input('budget_allocation');
            echo $this->Form->input('multiple');
            echo $this->Form->input('do_pf');
            echo $this->Form->input('do_Pj');
            echo $this->Form->input('do_premium');
            echo $this->Form->input('detailing_action');
            echo $this->Form->input('number_reserve_pj');
            echo $this->Form->input('link_pj');
            echo $this->Form->input('number_reserve_pf');
            echo $this->Form->input('link_pf');
            echo $this->Form->input('number_reserve_charges');
            echo $this->Form->input('vocative');
            echo $this->Form->input('sector_vocative');
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
