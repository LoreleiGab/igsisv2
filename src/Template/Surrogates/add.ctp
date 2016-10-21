<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Surrogates'), ['action' => 'index']) ?></li>
        
    </ul>
</nav>
<div class="surrogates form col-md-10 columns content">
    <?= $this->Form->create($surrogate) ?>
    <fieldset>
        <legend><?= 'Add Surrogate' ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('rf');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
