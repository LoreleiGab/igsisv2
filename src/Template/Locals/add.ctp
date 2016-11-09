<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Locals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Institutions'), ['controller' => 'Institutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Institution'), ['controller' => 'Institutions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Agenda Posters'), ['controller' => 'AgendaPosters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Agenda Poster'), ['controller' => 'AgendaPosters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Detail Locals'), ['controller' => 'DetailLocals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Detail Local'), ['controller' => 'DetailLocals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Historic Occurrences'), ['controller' => 'HistoricOccurrences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Historic Occurrence'), ['controller' => 'HistoricOccurrences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Occurrences'), ['controller' => 'Occurrences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Occurrence'), ['controller' => 'Occurrences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="locals form col-md-10 columns content">
    <?= $this->Form->create($local) ?>
    <fieldset>
        <legend><?= __('Add Local') ?></legend>
        <?php
            echo $this->Form->input('institution_id', ['options' => $institutions]);
            echo $this->Form->input('name');
            echo $this->Form->input('rider');
            echo $this->Form->input('published');
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
