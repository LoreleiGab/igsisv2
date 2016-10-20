
<div class="occurrences form col-md-10 columns content">
    <?= $this->Form->create($occurrence) ?>
    <fieldset>
        <legend><?= 'Add Occurrence' ?></legend>
        <?php
            echo $this->Form->input('event_id', ['options' => $events]);
            echo $this->Form->input('sub_event_id', ['options' => $subEvents, 'empty' => true]);
            echo $this->Form->input('occurrence_type_id', ['options' => $typeOccurrences]);
            echo $this->Form->input('date_starter');
            echo $this->Form->input('date_final', ['empty' => true, 'default' => '']);
            echo $this->Form->input('monday');
            echo $this->Form->input('tuesday');
            echo $this->Form->input('wednesday');
            echo $this->Form->input('thursday');
            echo $this->Form->input('friday');
            echo $this->Form->input('saturday');
            echo $this->Form->input('sunday');
            echo $this->Form->input('duration');
            echo $this->Form->input('especial_day');
            echo $this->Form->input('audio_description');
            echo $this->Form->input('libras');
            echo $this->Form->input('start_hour');
            echo $this->Form->input('cultural_turn');
            echo $this->Form->input('popular_price');
            echo $this->Form->input('get_ticket');
            echo $this->Form->input('ticket_value');
            echo $this->Form->input('local_id', ['options' => $locals]);
            echo $this->Form->input('local_other');
            echo $this->Form->input('reserved');
            echo $this->Form->input('capacity');
            echo $this->Form->input('timezone');
            echo $this->Form->input('all_day');
            echo $this->Form->input('frequency');
            echo $this->Form->input('cinema_id', ['options' => $cinemas, 'empty' => true]);
            echo $this->Form->input('published');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
