<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Verba']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Instituicaos']), ['controller' => 'Instituicaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Instituicao']), ['controller' => 'Instituicaos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Controle Orcamentos']), ['controller' => 'ControleOrcamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Controle Orcamento']), ['controller' => 'ControleOrcamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Pedido Contratacaos']), ['controller' => 'PedidoContratacaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Pedido Contratacao']), ['controller' => 'PedidoContratacaos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Verba Multiplas']), ['controller' => 'VerbaMultiplas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Verba Multipla']), ['controller' => 'VerbaMultiplas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Usuarios']), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Usuario']), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="verbas index col-md-10 columns content">
    <h3>Verbas</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('verba') ?></th>
                <th><?= $this->Paginator->sort('pai') ?></th>
                <th><?= $this->Paginator->sort('instituicao_id') ?></th>
                <th><?= $this->Paginator->sort('pf') ?></th>
                <th><?= $this->Paginator->sort('pj') ?></th>
                <th><?= $this->Paginator->sort('premio') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($verbas as $verba): ?>
            <tr>
                <td><?= $this->Number->format($verba->id) ?></td>
                <td><?= h($verba->verba) ?></td>
                <td><?= $this->Number->format($verba->pai) ?></td>
                <td><?= $verba->has('instituicao') ? $this->Html->link($verba->instituicao->id, ['controller' => 'Instituicaos', 'action' => 'view', $verba->instituicao->id]) : '' ?></td>
                <td><?= $this->Number->format($verba->pf) ?></td>
                <td><?= $this->Number->format($verba->pj) ?></td>
                <td><?= $this->Number->format($verba->premio) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $verba->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $verba->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $verba->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $verba->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
            <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registros de um total de
         {{count}}, começando no registro {{start}}, terminando em {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>