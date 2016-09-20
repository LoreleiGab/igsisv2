<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $localsUsuario->local_id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $localsUsuario->local_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Locals Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Locals'), ['controller' => 'Locals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Local'), ['controller' => 'Locals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="localsUsuarios form col-md-10 columns content">
    <?= $this->Form->create($localsUsuario) ?>
    <fieldset>
        <legend><?= 'Edit Locals Usuario' ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
