<div class="instituicaos form col-md-10 columns content">
    <?= $this->Form->create($instituicao) ?>
    <fieldset>
        <legend><?= 'Editar Instituição' ?></legend>
        <?php
            echo $this->Form->input('instituicao');
            echo $this->Form->input('instituicao_pai');
            echo $this->Form->input('sigla');
            echo $this->Form->input('logo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
