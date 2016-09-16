<div class="row">
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
        <li><?= $this->Html->link(__('List {0}', ['Controle Orcamentos']), ['controller' => 'ControleOrcamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Controle Orcamento']), ['controller' => 'ControleOrcamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Eventos']), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Evento']), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Formacao Vigencias']), ['controller' => 'FormacaoVigencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Formacao Vigencia']), ['controller' => 'FormacaoVigencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Formacaos']), ['controller' => 'Formacaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Formacao']), ['controller' => 'Formacaos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Historicos']), ['controller' => 'Historicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Historico']), ['controller' => 'Historicos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Logs']), ['controller' => 'Logs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Log']), ['controller' => 'Logs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Modulo Usuarios']), ['controller' => 'ModuloUsuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Modulo Usuario']), ['controller' => 'ModuloUsuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Pessoa Fisicas']), ['controller' => 'PessoaFisicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Pessoa Fisica']), ['controller' => 'PessoaFisicas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Pessoa Juridicas']), ['controller' => 'PessoaJuridicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Pessoa Juridica']), ['controller' => 'PessoaJuridicas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Times']), ['controller' => 'Times', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Time']), ['controller' => 'Times', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Verifica Producaos']), ['controller' => 'VerificaProducaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Verifica Producao']), ['controller' => 'VerificaProducaos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Locals']), ['controller' => 'Locals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Local']), ['controller' => 'Locals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Verbas']), ['controller' => 'Verbas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Verba']), ['controller' => 'Verbas', 'action' => 'add']) ?></li>
    </ul>
</nav>
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
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
         {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>