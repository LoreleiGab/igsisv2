<div class="modulos form col-md-10 columns content">
    <?= $this->Form->create($modulo) ?>
    <fieldset>
        <legend><?= 'Adicionar Módulo' ?></legend>
        <?php
            echo $this->Form->input('modulo');
            echo $this->Form->input('link_pagina');
            echo $this->Form->input('descricao');
            echo $this->Form->input('usuarios._ids', ['options' => $usuarios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
