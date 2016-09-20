<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Local']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Instituicaos']), ['controller' => 'Instituicaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Instituicao']), ['controller' => 'Instituicaos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Agenda Em Cartazs']), ['controller' => 'AgendaEmCartazs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Agenda Em Cartaz']), ['controller' => 'AgendaEmCartazs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Agendas']), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Agenda']), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Detalhe Locals']), ['controller' => 'DetalheLocals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Detalhe Local']), ['controller' => 'DetalheLocals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Historico Ocorrencias']), ['controller' => 'HistoricoOcorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Historico Ocorrencia']), ['controller' => 'HistoricoOcorrencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Ocorrencias']), ['controller' => 'Ocorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Ocorrencia']), ['controller' => 'Ocorrencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Usuarios']), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Usuario']), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="locals index col-md-10 columns content">
    <h3>Locals</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('instituicao_id') ?></th>
                <th><?= $this->Paginator->sort('local') ?></th>
                <th><?= $this->Paginator->sort('rider') ?></th>
                <th><?= $this->Paginator->sort('publicado') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($locals as $local): ?>
            <tr>
                <td><?= $this->Number->format($local->id) ?></td>
                <td><?= $local->has('instituicao') ? $this->Html->link($local->instituicao->id, ['controller' => 'Instituicaos', 'action' => 'view', $local->instituicao->id]) : '' ?></td>
                <td><?= h($local->local) ?></td>
                <td><?= h($local->rider) ?></td>
                <td><?= h($local->publicado) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $local->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $local->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $local->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $local->id), 'class'=>'btn btn-danger btn-xs']) ?>
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