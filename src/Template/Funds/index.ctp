
<div class="funds index col-md-10 columns content">
    <h3><?= __('Funds') ?></h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('father') ?></th>
                <th><?= $this->Paginator->sort('institution_id') ?></th>
                <th><?= $this->Paginator->sort('pf') ?></th>
                <th><?= $this->Paginator->sort('pj') ?></th>
                <th><?= $this->Paginator->sort('reward') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funds as $fund): ?>
            <tr>
                <td><?= $this->Number->format($fund->id) ?></td>
                <td><?= h($fund->name) ?></td>
                <td><?= $this->Number->format($fund->father) ?></td>
                <td><?= $fund->has('institution') ? $this->Html->link($fund->institution->name, ['controller' => 'Institutions', 'action' => 'view', $fund->institution->id]) : '' ?></td>
                <td><?= $this->Number->format($fund->pf) ?></td>
                <td><?= $this->Number->format($fund->pj) ?></td>
                <td><?= $this->Number->format($fund->reward) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $fund->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $fund->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $fund->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $fund->id), 'class'=>'btn btn-danger btn-xs']) ?>
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