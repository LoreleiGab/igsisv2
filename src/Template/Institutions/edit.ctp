<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $institution->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $institution->id)]
            )
        ?></li>
		<li><?= $this->Html->link(__('Novo {0}', ['Institution']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', 'Institutions'), ['action' => 'index']) ?></li>
       
    </ul>
</nav>
<div class="institutions form col-md-10 columns content">
    <?= $this->Form->create($institution) ?>
    <fieldset>
        <legend><?= 'Edit Institution' ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('initials');
            echo $this->Form->input('institution_father');
            echo $this->Form->input('logo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
