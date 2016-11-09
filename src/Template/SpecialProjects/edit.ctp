<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $specialProject->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $specialProject->id)]
            )
        ?></li>
		
		<li><?= $this->Html->link(__('New {0}', ['Special Project']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Special Projects'), ['action' => 'index']) ?></li>
        
    </ul>
</nav>
<div class="specialProjects form col-md-10 columns content">
    <?= $this->Form->create($specialProject) ?>
    <fieldset>
        <legend><?= __('Edit Special Project') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('institution_id', ['options' => $institutions]);
            echo $this->Form->input('published');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
