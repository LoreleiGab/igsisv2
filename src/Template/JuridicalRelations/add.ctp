<div class="juridicalRelations form col-md-10 columns content">
    <?= $this->Form->create($juridicalRelation) ?>
    <fieldset>
        <legend><?= 'Add Juridical Relation' ?></legend>
        <?php
            echo $this->Form->input('juridical_relations');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
