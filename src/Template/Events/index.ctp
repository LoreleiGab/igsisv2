<div class="row">

<div class="events index col-md-10 columns content">
    <h3>Events</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('juridical_relation_id') ?></th>
                <th><?= $this->Paginator->sort('special_project_id') ?></th>
                <th><?= $this->Paginator->sort('type_event_id') ?></th>
                <th><?= $this->Paginator->sort('sub_event') ?></th>
                <th><?= $this->Paginator->sort('fiscal_id') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
            <tr>
                <td><?= $this->Number->format($event->id) ?></td>
                <td><?= h($event->name) ?></td>
                <td><?= $event->has('juridical_relation') ? $this->Html->link($event->juridical_relation->name, ['controller' => 'JuridicalRelations', 'action' => 'view', $event->juridical_relation->id]) : '' ?></td>
                <td><?= $event->has('special_project') ? $this->Html->link($event->special_project->name, ['controller' => 'SpecialProjects', 'action' => 'view', $event->special_project->id]) : '' ?></td>
                <td><?= $event->has('type_event') ? $this->Html->link($event->type_event->name, ['controller' => 'TypeEvents', 'action' => 'view', $event->type_event->id]) : '' ?></td>
                <td><?= h($event->sub_event) ?></td>
                <td><?= $event->has('fiscal') ? $this->Html->link($event->fiscal->name, ['controller' => 'Fiscals', 'action' => 'view', $event->fiscal->id]) : '' ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $event->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $event->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $event->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $event->id), 'class'=>'btn btn-danger btn-xs']) ?>
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