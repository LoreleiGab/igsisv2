<div class="services form col-md-10 columns content">
    <?= $this->Form->create($service) ?>
    <fieldset>
        <legend><?= __('Add Service') ?></legend>
        <?php
            echo $this->Form->input('event_id', ['options' => $events]);
            echo $this->Form->input('libras');
            echo $this->Form->input('subtitle');
            echo $this->Form->input('translation');
            echo $this->Form->input('graphics');
            echo $this->Form->input('pass');
            echo $this->Form->input('audio_description');
            echo $this->Form->input('mounting');
            echo $this->Form->input('accommodation');
            echo $this->Form->input('security');
            echo $this->Form->input('transport');
            echo $this->Form->input('itinerary');
            echo $this->Form->input('company_name');
            echo $this->Form->input('cpfCnpj');
            echo $this->Form->input('bank');
            echo $this->Form->input('bank_branch');
            echo $this->Form->input('account');
            echo $this->Form->input('billing');
            echo $this->Form->input('capacity');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
