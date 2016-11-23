
<div class="producers index col-md-10 columns content">
    <h3><?= __('Producers') ?></h3>
	<?= $this->Html->link(__('Adicionar'), ['controller' => 'Producers', 'action' => 'add'], ['class'=>'btn btn-primary btn-xs']) ?>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
			
				<ul class="treeview-menu">

		</ul>
		
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($producers as $producer): ?>
            <tr>
                <td><?= $this->Number->format($producer->id) ?></td>
                <td><?= h($producer->name) ?></td>
                <td><?= h($producer->phone) ?></td>
                <td><?= h($producer->email) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $producer->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $producer->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $producer->id], ['confirm' => __('Você tem certeza que deseja excluir o Id Produtor {0}?', $producer->id), 'class'=>'btn btn-danger btn-xs']) ?>
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