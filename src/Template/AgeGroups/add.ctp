<div class="ageGroups form col-md-10 columns content">
    <?= $this->Form->create($ageGroup) ?>
    <fieldset>
        <legend><?= 'Add Age Group' ?></legend>
        <?php
            echo $this->Form->input('age_group');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
