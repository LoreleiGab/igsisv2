<div class="row">

<div class="theaterDances index col-md-10 columns content">
    <h3><?= __('Theater Dances') ?></h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('event_id') ?></th>
                <th><?= $this->Paginator->sort('premiere') ?></th>
                <th><?= $this->Paginator->sort('genre') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($theaterDances as $theaterDance): ?>
            <tr>
                <td><?= $this->Number->format($theaterDance->id) ?></td>
                <td><?= $theaterDance->has('event') ? $this->Html->link($theaterDance->event->name, ['controller' => 'Events', 'action' => 'view', $theaterDance->event->id]) : '' ?></td>
                <td><?= h($theaterDance->premiere) ?></td>
                <td><?= h($theaterDance->genre) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $theaterDance->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $theaterDance->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $theaterDance->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $theaterDance->id), 'class'=>'btn btn-danger btn-xs']) ?>
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