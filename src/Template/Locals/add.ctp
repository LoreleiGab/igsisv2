<div class="locals form col-md-10 columns content">
    <?= $this->Form->create($local) ?>
    <fieldset>
        <legend><?= 'Adicionar Local' ?></legend>
        <?php
            echo $this->Form->input('instituicao_id', ['options' => $instituicaos]);
            echo $this->Form->input('local');
            echo $this->Form->input('rider');
            echo $this->Form->input('publicado');
            echo $this->Form->input('usuarios._ids', ['options' => $usuarios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
