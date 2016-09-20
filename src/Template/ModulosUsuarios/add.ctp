<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Modulos Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Modulos'), ['controller' => 'Modulos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Modulo'), ['controller' => 'Modulos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modulosUsuarios form col-md-10 columns content">
    <?= $this->Form->create($modulosUsuario) ?>
    <fieldset>
        <legend><?= 'Add Modulos Usuario' ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
