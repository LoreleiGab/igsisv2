<div class="locals index col-md-10 columns content">
    <h3>Locais</h3>
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