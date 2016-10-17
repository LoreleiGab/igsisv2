<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Permissions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="permissions form col-md-10 columns content">
    <?= $this->Form->create($permission) ?>
    <fieldset>
        <legend><?= 'Add Permission' ?></legend>
        <?php
            echo $this->Form->input('group_id', ['options' => $groups]);
            echo $this->Form->input('controller');
            echo $this->Form->input('action');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
