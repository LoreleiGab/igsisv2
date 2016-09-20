<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Modulos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modulos form col-md-10 columns content">
    <?= $this->Form->create($modulo) ?>
    <fieldset>
        <legend><?= 'Add Modulo' ?></legend>
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
