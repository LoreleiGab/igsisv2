
<div class="typeEvents form col-md-10 columns content">
    <?= $this->Form->create($typeEvent) ?>
    <fieldset>
        <legend><?= 'Edit Type Event' ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
