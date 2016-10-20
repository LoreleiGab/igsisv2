<div class="row">

<div class="subEvents index col-md-10 columns content">
    <h3>Sub Events</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('event_id') ?></th>
                <th><?= $this->Paginator->sort('type_event_id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('published') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subEvents as $subEvent): ?>
            <tr>
                <td><?= $this->Number->format($subEvent->id) ?></td>
                <td><?= $subEvent->has('event') ? $this->Html->link($subEvent->event->name, ['controller' => 'Events', 'action' => 'view', $subEvent->event->id]) : '' ?></td>
                <td><?= $subEvent->has('type_event') ? $this->Html->link($subEvent->type_event->name, ['controller' => 'TypeEvents', 'action' => 'view', $subEvent->type_event->id]) : '' ?></td>
                <td><?= h($subEvent->title) ?></td>
                <td><?= $this->Number->format($subEvent->published) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $subEvent->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $subEvent->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $subEvent->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $subEvent->id), 'class'=>'btn btn-danger btn-xs']) ?>
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