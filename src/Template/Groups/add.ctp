
<div class="groups form col-md-10 columns content">
    <?= $this->Form->create($group) ?>
    <fieldset>
        <legend><?= 'Add Group' ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
