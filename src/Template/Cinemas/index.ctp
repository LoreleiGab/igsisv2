<div class="row">

<div class="cinemas index col-md-10 columns content">
    <h3>Cinemas</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('event_id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('original_title') ?></th>
                <th><?= $this->Paginator->sort('movie_country_id') ?></th>
                <th><?= $this->Paginator->sort('production_year') ?></th>
                <th><?= $this->Paginator->sort('genre') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cinemas as $cinema): ?>
            <tr>
                <td><?= $this->Number->format($cinema->id) ?></td>
                <td><?= $cinema->has('event') ? $this->Html->link($cinema->event->name, ['controller' => 'Events', 'action' => 'view', $cinema->event->id]) : '' ?></td>
                <td><?= h($cinema->title) ?></td>
                <td><?= h($cinema->original_title) ?></td>
                <td><?= $this->Number->format($cinema->movie_country_id) ?></td>
                <td><?= $this->Number->format($cinema->production_year) ?></td>
                <td><?= h($cinema->genre) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $cinema->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cinema->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $cinema->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $cinema->id), 'class'=>'btn btn-danger btn-xs']) ?>
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