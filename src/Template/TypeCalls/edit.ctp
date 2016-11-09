<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typeCall->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $typeCall->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Type Calls'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Calls'), ['controller' => 'Calls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Call'), ['controller' => 'Calls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typeCalls form col-md-10 columns content">
    <?= $this->Form->create($typeCall) ?>
    <fieldset>
        <legend><?= __('Edit Type Call') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('area');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
