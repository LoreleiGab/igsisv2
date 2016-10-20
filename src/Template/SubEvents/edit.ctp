
<div class="subEvents form col-md-10 columns content">
    <?= $this->Form->create($subEvent) ?>
    <fieldset>
        <legend><?= 'Edit Sub Event' ?></legend>
        <?php
            echo $this->Form->input('event_id', ['options' => $events]);
            echo $this->Form->input('type_event_id', ['options' => $typeEvents]);
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('published');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
