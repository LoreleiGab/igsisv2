
<div class="movieCountries form col-md-10 columns content">
    <?= $this->Form->create($movieCountry) ?>
    <fieldset>
        <legend><?= 'Add Movie Country' ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
