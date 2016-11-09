<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ageGroup->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $ageGroup->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Age Groups'), ['action' => 'index']) ?></li>
        
    </ul>
</nav>
<div class="ageGroups form col-md-10 columns content">
    <?= $this->Form->create($ageGroup) ?>
    <fieldset>
        <legend><?= __('Edit Age Group') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
