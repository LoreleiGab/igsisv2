<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Type Events'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Agenda Posters'), ['controller' => 'AgendaPosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Agenda Poster'), ['controller' => 'AgendaPosters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Internal Events'), ['controller' => 'InternalEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Internal Event'), ['controller' => 'InternalEvents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Sub Events'), ['controller' => 'SubEvents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Sub Event'), ['controller' => 'SubEvents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Temp Posters'), ['controller' => 'TempPosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Temp Poster'), ['controller' => 'TempPosters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typeEvents form col-md-10 columns content">
    <?= $this->Form->create($typeEvent) ?>
    <fieldset>
        <legend><?= 'Add Type Event' ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
