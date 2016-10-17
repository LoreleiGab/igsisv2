<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $group->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $group->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Groups'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="groups form col-md-10 columns content">
    <?= $this->Form->create($group) ?>
    <fieldset>
        <legend><?= 'Edit Group' ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
