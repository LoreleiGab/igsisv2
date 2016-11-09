<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typeEvent->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $typeEvent->id)]
            )
        ?></li>
		<li><?= $this->Html->link(__('Novo {0}', ['Type Event']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', 'Type Events'), ['action' => 'index']) ?></li>
       
    </ul>
</nav>
<div class="typeEvents form col-md-10 columns content">
    <?= $this->Form->create($typeEvent) ?>
    <fieldset>
        <legend><?= __('Edit Type Event') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
