<div class="modulos view col-lg-10 col-md-9">
    <h3><?= h($modulo->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Módulo</th>
            <td><?= h($modulo->modulo) ?></td>
        </tr>
        <tr>
            <th>Link Pagina</th>
            <td><?= h($modulo->link_pagina) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($modulo->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4>Descricao</h4>
        <?= $this->Text->autoParagraph(h($modulo->descricao)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Usuarios']) ?></h4>
        <?php if (!empty($modulo->usuarios)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Nome Completo</th>
                <th>Rf</th>
                <th>Nome Usuario</th>
                <th>Senha</th>
                <th>Telefone</th>
                <th>Instituicao Id</th>
                <th>Local</th>
                <th>Verba</th>
                <th>Email</th>
                <th>Receber Notificacao</th>
                <th>Publicado</th>
                <th>Contratos</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($modulo->usuarios as $usuarios): ?>
            <tr>
                <td><?= h($usuarios->id) ?></td>
                <td><?= h($usuarios->nome_completo) ?></td>
                <td><?= h($usuarios->rf) ?></td>
                <td><?= h($usuarios->nome_usuario) ?></td>
                <td><?= h($usuarios->senha) ?></td>
                <td><?= h($usuarios->telefone) ?></td>
                <td><?= h($usuarios->instituicao_id) ?></td>
                <td><?= h($usuarios->local) ?></td>
                <td><?= h($usuarios->verba) ?></td>
                <td><?= h($usuarios->email) ?></td>
                <td><?= h($usuarios->receber_notificacao) ?></td>
                <td><?= h($usuarios->publicado) ?></td>
                <td><?= h($usuarios->contratos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $usuarios->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
