
<div class="surrogates form col-md-10 columns content">
    <?= $this->Form->create($surrogate) ?>
    <fieldset>
        <legend><?= 'Add Surrogate' ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('rf');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
