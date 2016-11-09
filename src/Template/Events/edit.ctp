<div class="events form col-md-10 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit Event') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('juridical_relation_id', ['options' => $juridicalRelations]);
            echo $this->Form->input('special_project_id');
            echo $this->Form->input('type_event_id', ['options' => $typeEvents]);
            echo $this->Form->input('sub_event');
            echo $this->Form->input('fiscal_id', ['options' => $fiscals]);
            echo $this->Form->input('surrogate_id', ['options' => $surrogates]);
            echo $this->Form->input('author');
            echo $this->Form->input('technical_form');
            echo $this->Form->input('age_group_id', ['options' => $ageGroups]);
            echo $this->Form->input('synopsis');
            echo $this->Form->input('release_communication');
            echo $this->Form->input('links');
            echo $this->Form->input('producer_id', ['options' => $producers]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('institution_id', ['options' => $institutions]);
            echo $this->Form->input('date_send');
            echo $this->Form->input('public_target');
            echo $this->Form->input('published');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
