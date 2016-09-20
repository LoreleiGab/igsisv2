<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Usuarios Verbas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Verbas'), ['controller' => 'Verbas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Verba'), ['controller' => 'Verbas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuariosVerbas form col-md-10 columns content">
    <?= $this->Form->create($usuariosVerba) ?>
    <fieldset>
        <legend><?= 'Add Usuarios Verba' ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
