<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $call->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $call->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Calls'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Type Calls'), ['controller' => 'TypeCalls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Type Call'), ['controller' => 'TypeCalls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Call Comments'), ['controller' => 'CallComments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Call Comment'), ['controller' => 'CallComments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Log Reopenings'), ['controller' => 'LogReopenings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Log Reopening'), ['controller' => 'LogReopenings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Status'), ['controller' => 'Status', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Status'), ['controller' => 'Status', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="calls form col-md-10 columns content">
    <?= $this->Form->create($call) ?>
    <fieldset>
        <legend><?= 'Edit Call' ?></legend>
        <?php
            echo $this->Form->input('type_call_id', ['options' => $typeCalls]);
            echo $this->Form->input('event_id', ['options' => $events]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('justification');
            echo $this->Form->input('date');
            echo $this->Form->input('status');
            echo $this->Form->input('note');
            echo $this->Form->input('status._ids', ['options' => $status]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
