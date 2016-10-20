
<div class="visualArts form col-md-10 columns content">
    <?= $this->Form->create($visualArt) ?>
    <fieldset>
        <legend><?= 'Edit Visual Art' ?></legend>
        <?php
            echo $this->Form->input('evento_id', ['options' => $events]);
            echo $this->Form->input('number');
            echo $this->Form->input('type');
            echo $this->Form->input('value');
            echo $this->Form->input('panel');
            echo $this->Form->input('subtitle');
            echo $this->Form->input('identity');
            echo $this->Form->input('support');
            echo $this->Form->input('collection');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
