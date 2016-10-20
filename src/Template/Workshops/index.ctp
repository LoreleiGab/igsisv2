<div class="row">

<div class="workshops index col-md-10 columns content">
    <h3>Workshops</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('event_id') ?></th>
                <th><?= $this->Paginator->sort('certificate') ?></th>
                <th><?= $this->Paginator->sort('vacancies') ?></th>
                <th><?= $this->Paginator->sort('inscription') ?></th>
                <th><?= $this->Paginator->sort('value_hour') ?></th>
                <th><?= $this->Paginator->sort('sale') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($workshops as $workshop): ?>
            <tr>
                <td><?= $this->Number->format($workshop->id) ?></td>
                <td><?= $workshop->has('event') ? $this->Html->link($workshop->event->name, ['controller' => 'Events', 'action' => 'view', $workshop->event->id]) : '' ?></td>
                <td><?= h($workshop->certificate) ?></td>
                <td><?= $this->Number->format($workshop->vacancies) ?></td>
                <td><?= h($workshop->inscription) ?></td>
                <td><?= $this->Number->format($workshop->value_hour) ?></td>
                <td><?= h($workshop->sale) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $workshop->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $workshop->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $workshop->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $workshop->id), 'class'=>'btn btn-danger btn-xs']) ?>
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