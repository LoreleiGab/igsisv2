<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Modulos Usuario']), ['action' => 'edit', $modulosUsuario->usuario_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Modulos Usuario']), ['action' => 'delete', $modulosUsuario->usuario_id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $modulosUsuario->usuario_id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Modulos Usuarios']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Modulos Usuario']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Usuarios']), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Usuario']), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Modulos']), ['controller' => 'Modulos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Modulo']), ['controller' => 'Modulos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="modulosUsuarios view col-lg-10 col-md-9">
    <h3><?= h($modulosUsuario->usuario_id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Usuario</th>
            <td><?= $modulosUsuario->has('usuario') ? $this->Html->link($modulosUsuario->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $modulosUsuario->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Modulo</th>
            <td><?= $modulosUsuario->has('modulo') ? $this->Html->link($modulosUsuario->modulo->id, ['controller' => 'Modulos', 'action' => 'view', $modulosUsuario->modulo->id]) : '' ?></td>
        </tr>
    </table>
</div>
