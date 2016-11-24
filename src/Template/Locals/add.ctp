<div class="locals form col-md-10 columns content">
    <?= $this->Form->create($local) ?>
    <fieldset>
        <legend><?= __('Add Local') ?></legend>
        <?php
            echo $this->Form->input('institution_id', ['options' => $institutions]);
            echo $this->Form->input('name');
            echo $this->Form->input('rider');
            echo $this->Form->input('published');
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
