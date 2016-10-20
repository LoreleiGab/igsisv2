<div class="row">

<div class="internalEvents index col-md-10 columns content">
    <h3>Internal Events</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('type_event_id') ?></th>
                <th><?= $this->Paginator->sort('especial_project_id') ?></th>
                <th><?= $this->Paginator->sort('fiscal_id') ?></th>
                <th><?= $this->Paginator->sort('surrogate_id') ?></th>
                <th><?= $this->Paginator->sort('producer_id') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($internalEvents as $internalEvent): ?>
            <tr>
                <td><?= $this->Number->format($internalEvent->id) ?></td>
                <td><?= h($internalEvent->name) ?></td>
                <td><?= $internalEvent->has('type_event') ? $this->Html->link($internalEvent->type_event->name, ['controller' => 'TypeEvents', 'action' => 'view', $internalEvent->type_event->id]) : '' ?></td>
                <td><?= $internalEvent->has('special_project') ? $this->Html->link($internalEvent->special_project->name, ['controller' => 'SpecialProjects', 'action' => 'view', $internalEvent->special_project->id]) : '' ?></td>
                <td><?= $internalEvent->has('fiscal') ? $this->Html->link($internalEvent->fiscal->name, ['controller' => 'Fiscals', 'action' => 'view', $internalEvent->fiscal->id]) : '' ?></td>
                <td><?= $internalEvent->has('surrogate') ? $this->Html->link($internalEvent->surrogate->name, ['controller' => 'Surrogates', 'action' => 'view', $internalEvent->surrogate->id]) : '' ?></td>
                <td><?= $internalEvent->has('producer') ? $this->Html->link($internalEvent->producer->name, ['controller' => 'Producers', 'action' => 'view', $internalEvent->producer->id]) : '' ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $internalEvent->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $internalEvent->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $internalEvent->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $internalEvent->id), 'class'=>'btn btn-danger btn-xs']) ?>
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