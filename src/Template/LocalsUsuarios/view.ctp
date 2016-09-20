<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Locals Usuario']), ['action' => 'edit', $localsUsuario->local_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Locals Usuario']), ['action' => 'delete', $localsUsuario->local_id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $localsUsuario->local_id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Locals Usuarios']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Locals Usuario']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Locals']), ['controller' => 'Locals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Local']), ['controller' => 'Locals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Usuarios']), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Usuario']), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="localsUsuarios view col-lg-10 col-md-9">
    <h3><?= h($localsUsuario->local_id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Local</th>
            <td><?= $localsUsuario->has('local') ? $this->Html->link($localsUsuario->local->id, ['controller' => 'Locals', 'action' => 'view', $localsUsuario->local->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Usuario</th>
            <td><?= $localsUsuario->has('usuario') ? $this->Html->link($localsUsuario->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $localsUsuario->usuario->id]) : '' ?></td>
        </tr>
    </table>
</div>
