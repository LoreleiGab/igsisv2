<div class="projetoEspecials form col-md-10 columns content">
    <?= $this->Form->create($projetoEspecial) ?>
    <fieldset>
        <legend><?= 'Adicionar Projeto Especial' ?></legend>
        <?php
            echo $this->Form->input('projeto_especial');
            echo $this->Form->input('idInstituicao');
            echo $this->Form->input('publicado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
