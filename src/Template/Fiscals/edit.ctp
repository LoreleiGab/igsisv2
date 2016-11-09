<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fiscal->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $fiscal->id)]
            )
        ?></li>
		
		<li><?= $this->Html->link(__('New {0}', ['Fiscal']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Fiscals'), ['action' => 'index']) ?></li>
        
    </ul>
</nav>
<div class="fiscals form col-md-10 columns content">
    <?= $this->Form->create($fiscal) ?>
    <fieldset>
        <legend><?= __('Edit Fiscal') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('rf');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
