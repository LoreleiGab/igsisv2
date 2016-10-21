<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $internalEvent->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $internalEvent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Novo {0}', ['Internal Event']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Internal Events']), ['action' => 'index']) ?> </li>
        
    </ul>
</nav>
<div class="internalEvents form col-md-10 columns content">
    <?= $this->Form->create($internalEvent) ?>
    <fieldset>
        <legend><?= 'Edit Internal Event' ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('type_event_id', ['options' => $typeEvents]);
            echo $this->Form->input('especial_project_id', ['options' => $specialProjects]);
            echo $this->Form->input('fiscal_id', ['options' => $fiscals]);
            echo $this->Form->input('surrogate_id', ['options' => $surrogates]);
            echo $this->Form->input('description');
            echo $this->Form->input('producer_id', ['options' => $producers, 'empty' => true]);
            echo $this->Form->input('information_production_id', ['options' => $informationProductions, 'empty' => true]);
            echo $this->Form->input('published');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
