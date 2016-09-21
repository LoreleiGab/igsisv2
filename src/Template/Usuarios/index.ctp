<div class="usuarios index col-md-10 columns content">
    <h3>Usuários</h3>
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
                <th class="actions"><?= __('Ação') ?></th>
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
            <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registros de um total de
         {{count}}, começando no registro {{start}}, terminando em {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>