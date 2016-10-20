
<div class="cinemas form col-md-10 columns content">
    <?= $this->Form->create($cinema) ?>
    <fieldset>
        <legend><?= 'Edit Cinema' ?></legend>
        <?php
            echo $this->Form->input('event_id', ['options' => $events]);
            echo $this->Form->input('title');
            echo $this->Form->input('original_title');
            echo $this->Form->input('direction');
            echo $this->Form->input('movie_country_id');
            echo $this->Form->input('production_year');
            echo $this->Form->input('synopsis');
            echo $this->Form->input('cast');
            echo $this->Form->input('genre');
            echo $this->Form->input('age_rating');
            echo $this->Form->input('minutes');
            echo $this->Form->input('link_trailer');
            echo $this->Form->input('gauge');
            echo $this->Form->input('published');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
