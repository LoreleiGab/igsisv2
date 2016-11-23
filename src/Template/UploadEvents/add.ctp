
<div class="uploadEvents form col-md-10 columns content">
    <?= $this->Form->create($uploadEvent) ?>
    <fieldset>
        <legend><?= __('Add Upload Event') ?></legend>
        <?php
            echo $this->Form->input('event_id', ['options' => $events]);
            echo $this->Form->input('file');
            echo $this->Form->input('published');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
