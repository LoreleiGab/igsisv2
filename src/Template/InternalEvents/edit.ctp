
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
