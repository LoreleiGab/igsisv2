<div class="row">

<div class="occurrences index col-md-10 columns content">
    <h3><?= __('Occurrences') ?></h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('event_id') ?></th>
                <th><?= $this->Paginator->sort('sub_event_id') ?></th>
                <th><?= $this->Paginator->sort('occurrence_type_id') ?></th>
                <th><?= $this->Paginator->sort('date_starter') ?></th>
                <th><?= $this->Paginator->sort('date_final') ?></th>
                <th><?= $this->Paginator->sort('monday') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($occurrences as $occurrence): ?>
            <tr>
                <td><?= $this->Number->format($occurrence->id) ?></td>
                <td><?= $occurrence->has('event') ? $this->Html->link($occurrence->event->name, ['controller' => 'Events', 'action' => 'view', $occurrence->event->id]) : '' ?></td>
                <td><?= $occurrence->has('sub_event') ? $this->Html->link($occurrence->sub_event->title, ['controller' => 'SubEvents', 'action' => 'view', $occurrence->sub_event->id]) : '' ?></td>
                <td><?= $occurrence->has('type_occurrence') ? $this->Html->link($occurrence->type_occurrence->id, ['controller' => 'TypeOccurrences', 'action' => 'view', $occurrence->type_occurrence->id]) : '' ?></td>
                <td><?= h($occurrence->date_starter) ?></td>
                <td><?= h($occurrence->date_final) ?></td>
                <td><?= h($occurrence->monday) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $occurrence->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $occurrence->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $occurrence->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $occurrence->id), 'class'=>'btn btn-danger btn-xs']) ?>
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