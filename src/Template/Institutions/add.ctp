<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Institutions'), ['action' => 'index']) ?></li>
       
    </ul>
</nav>
<div class="institutions form col-md-10 columns content">
    <?= $this->Form->create($institution) ?>
    <fieldset>
        <legend><?= __('Add Institution') ?></legend>
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
