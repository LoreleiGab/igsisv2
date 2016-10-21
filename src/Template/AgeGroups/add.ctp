<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Age Groups'), ['action' => 'index']) ?></li>
        
    </ul>
</nav>
<div class="ageGroups form col-md-10 columns content">
    <?= $this->Form->create($ageGroup) ?>
    <fieldset>
        <legend><?= 'Add Age Group' ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
