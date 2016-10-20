
<div class="typeOccurrences form col-md-10 columns content">
    <?= $this->Form->create($typeOccurrence) ?>
    <fieldset>
        <legend><?= 'Edit Type Occurrence' ?></legend>
        <?php
            echo $this->Form->input('occurrence_type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
