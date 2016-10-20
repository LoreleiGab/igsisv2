
<div class="musics form col-md-10 columns content">
    <?= $this->Form->create($music) ?>
    <fieldset>
        <legend><?= 'Add Music' ?></legend>
        <?php
            echo $this->Form->input('event_id', ['options' => $events]);
            echo $this->Form->input('genre');
            echo $this->Form->input('sale');
            echo $this->Form->input('material');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
