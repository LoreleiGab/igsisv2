<div class="services index col-md-10 columns content">
    <h3><?= __('Services') ?></h3>
	<?= $this->Html->link(__('Adicionar'), ['controller' => 'Services', 'action' => 'add'], ['class'=>'btn btn-primary btn-xs']) ?>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
			
				<ul class="treeview-menu">

		</ul>
		
		        <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('event_id') ?></th>
                <th><?= $this->Paginator->sort('libras') ?></th>
                <th><?= $this->Paginator->sort('subtitle') ?></th>
                <th><?= $this->Paginator->sort('translation') ?></th>
                <th><?= $this->Paginator->sort('graphics') ?></th>
                <th><?= $this->Paginator->sort('pass') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($services as $service): ?>
            <tr>
                <td><?= $this->Number->format($service->id) ?></td>
                <td><?= $service->has('event') ? $this->Html->link($service->event->name, ['controller' => 'Events', 'action' => 'view', $service->event->id]) : '' ?></td>
                <td><?= h($service->libras) ?></td>
                <td><?= h($service->subtitle) ?></td>
                <td><?= h($service->translation) ?></td>
                <td><?= h($service->graphics) ?></td>
                <td><?= h($service->pass) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $service->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $service->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $service->id], ['confirm' => __('Você tem certeza que deseja excluir o Id Serviço Externo {0}?', $service->id), 'class'=>'btn btn-danger btn-xs']) ?>
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