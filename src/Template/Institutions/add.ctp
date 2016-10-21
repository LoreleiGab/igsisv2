
<div class="institutions form col-md-10 columns content">
    <?= $this->Form->create($institution) ?>
    <fieldset>
        <legend><?= __('Add Institution')?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('initials');
            echo $this->Form->input('institution_father');
            echo $this->Form->input('logo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
