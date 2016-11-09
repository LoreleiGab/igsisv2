<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $surrogate->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $surrogate->id)]
            )
        ?></li>
		<li><?= $this->Html->link(__('New {0}', ['Surrogate']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Surrogates'), ['action' => 'index']) ?></li>
       
    </ul>
</nav>
<div class="surrogates form col-md-10 columns content">
    <?= $this->Form->create($surrogate) ?>
    <fieldset>
        <legend><?= __('Edit Surrogate') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('rf');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
