<div class="row">
<!-- MENU DESATIVADO
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Usuario']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Instituicaos']), ['controller' => 'Instituicaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Instituicao']), ['controller' => 'Instituicaos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Chamado Comentarios']), ['controller' => 'ChamadoComentarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Chamado Comentario']), ['controller' => 'ChamadoComentarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Chamados']), ['controller' => 'Chamados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Chamado']), ['controller' => 'Chamados', 'action' => 'add']) ?></li>        
        <li><?= $this->Html->link(__('List {0}', ['Logs']), ['controller' => 'Logs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Log']), ['controller' => 'Logs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Modulo Usuarios']), ['controller' => 'ModuloUsuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Modulo Usuario']), ['controller' => 'ModuloUsuarios', 'action' => 'add']) ?></li>        
        <li><?= $this->Html->link(__('List {0}', ['Locals']), ['controller' => 'Locals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Local']), ['controller' => 'Locals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Verbas']), ['controller' => 'Verbas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Verba']), ['controller' => 'Verbas', 'action' => 'add']) ?></li>
    </ul>
</nav>
-->
<div class="usuarios index col-md-10 columns content">
    <h3>Usuarios</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome_completo') ?></th>
                <th><?= $this->Paginator->sort('rf') ?></th>
                <th><?= $this->Paginator->sort('nome_usuario') ?></th>
                <th><?= $this->Paginator->sort('senha') ?></th>
                <th><?= $this->Paginator->sort('telefone') ?></th>
                <th><?= $this->Paginator->sort('instituicao_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $this->Number->format($usuario->id) ?></td>
                <td><?= h($usuario->nome_completo) ?></td>
                <td><?= h($usuario->rf) ?></td>
                <td><?= h($usuario->nome_usuario) ?></td>
                <td><?= h($usuario->senha) ?></td>
                <td><?= h($usuario->telefone) ?></td>
                <td><?= $usuario->has('instituicao') ? $this->Html->link($usuario->instituicao->id, ['controller' => 'Instituicaos', 'action' => 'view', $usuario->instituicao->id]) : '' ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $usuario->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuario->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $usuario->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $usuario->id), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('anterior'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('próximo') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro no total de
         {{count}}, começando em {{start}}, terminando em {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>