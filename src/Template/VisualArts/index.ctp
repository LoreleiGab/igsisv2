<div class="row">

<div class="visualArts index col-md-10 columns content">
    <h3>Visual Arts</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('evento_id') ?></th>
                <th><?= $this->Paginator->sort('number') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th><?= $this->Paginator->sort('value') ?></th>
                <th><?= $this->Paginator->sort('panel') ?></th>
                <th><?= $this->Paginator->sort('subtitle') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($visualArts as $visualArt): ?>
            <tr>
                <td><?= $this->Number->format($visualArt->id) ?></td>
                <td><?= $visualArt->has('event') ? $this->Html->link($visualArt->event->name, ['controller' => 'Events', 'action' => 'view', $visualArt->event->id]) : '' ?></td>
                <td><?= $this->Number->format($visualArt->number) ?></td>
                <td><?= h($visualArt->type) ?></td>
                <td><?= $this->Number->format($visualArt->value) ?></td>
                <td><?= h($visualArt->panel) ?></td>
                <td><?= h($visualArt->subtitle) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $visualArt->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $visualArt->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $visualArt->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $visualArt->id), 'class'=>'btn btn-danger btn-xs']) ?>
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