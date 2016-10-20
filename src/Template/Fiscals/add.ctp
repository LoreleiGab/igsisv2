
<div class="fiscals form col-md-10 columns content">
    <?= $this->Form->create($fiscal) ?>
    <fieldset>
        <legend><?= 'Add Fiscal' ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('rf');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
