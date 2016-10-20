
<div class="theaterDances form col-md-10 columns content">
    <?= $this->Form->create($theaterDance) ?>
    <fieldset>
        <legend><?= 'Add Theater Dance' ?></legend>
        <?php
            echo $this->Form->input('event_id', ['options' => $events]);
            echo $this->Form->input('premiere');
            echo $this->Form->input('genre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
