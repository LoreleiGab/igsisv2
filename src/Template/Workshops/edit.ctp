
<div class="workshops form col-md-10 columns content">
    <?= $this->Form->create($workshop) ?>
    <fieldset>
        <legend><?= 'Edit Workshop' ?></legend>
        <?php
            echo $this->Form->input('event_id', ['options' => $events]);
            echo $this->Form->input('certificate');
            echo $this->Form->input('vacancies');
            echo $this->Form->input('public');
            echo $this->Form->input('material');
            echo $this->Form->input('inscription');
            echo $this->Form->input('value_hour');
            echo $this->Form->input('sale');
            echo $this->Form->input('divulgation', ['empty' => true, 'default' => '']);
            echo $this->Form->input('workload');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
