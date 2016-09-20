<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Usuarios Verba']), ['action' => 'edit', $usuariosVerba->verba_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Usuarios Verba']), ['action' => 'delete', $usuariosVerba->verba_id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $usuariosVerba->verba_id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Usuarios Verbas']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Usuarios Verba']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Verbas']), ['controller' => 'Verbas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Verba']), ['controller' => 'Verbas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Usuarios']), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Usuario']), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuariosVerbas view col-lg-10 col-md-9">
    <h3><?= h($usuariosVerba->verba_id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Verba</th>
            <td><?= $usuariosVerba->has('verba') ? $this->Html->link($usuariosVerba->verba->id, ['controller' => 'Verbas', 'action' => 'view', $usuariosVerba->verba->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Usuario</th>
            <td><?= $usuariosVerba->has('usuario') ? $this->Html->link($usuariosVerba->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $usuariosVerba->usuario->id]) : '' ?></td>
        </tr>
    </table>
</div>
