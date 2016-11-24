<div class="specialProjects form col-md-10 columns content">
    <?= $this->Form->create($specialProject) ?>
    <fieldset>
        <legend><?= __('Edit Special Project') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('institution_id', ['options' => $institutions]);
            echo $this->Form->input('published');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
