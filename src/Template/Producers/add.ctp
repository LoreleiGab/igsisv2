
<div class="producers form col-md-10 columns content">
    <?= $this->Form->create($producer) ?>
    <fieldset>
        <legend><?= __('Add Producer') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('phone');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
