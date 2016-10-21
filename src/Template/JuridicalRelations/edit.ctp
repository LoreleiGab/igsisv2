<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $juridicalRelation->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $juridicalRelation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Novo {0}', ['Juridical Relation']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Juridical Relations']), ['action' => 'index']) ?> </li>
        
    </ul>
</nav>
<div class="juridicalRelations form col-md-10 columns content">
    <?= $this->Form->create($juridicalRelation) ?>
    <fieldset>
        <legend><?= 'Edit Juridical Relation' ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
