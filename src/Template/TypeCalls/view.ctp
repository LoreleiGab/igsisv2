<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Type Call']), ['action' => 'edit', $typeCall->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Type Call']), ['action' => 'delete', $typeCall->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $typeCall->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Type Calls']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Type Call']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Calls']), ['controller' => 'Calls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Call']), ['controller' => 'Calls', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typeCalls view col-lg-10 col-md-9">
    <h3><?= h($typeCall->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($typeCall->name) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($typeCall->id) ?></td>
        </tr>
        <tr>
            <th>'Area</th>
            <td><?= $this->Number->format($typeCall->area) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Calls']) ?></h4>
        <?php if (!empty($typeCall->calls)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Type Call Id</th>
                <th>Event Id</th>
                <th>User Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Justification</th>
                <th>Date</th>
                <th>Status</th>
                <th>Note</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($typeCall->calls as $calls): ?>
            <tr>
                <td><?= h($calls->id) ?></td>
                <td><?= h($calls->type_call_id) ?></td>
                <td><?= h($calls->event_id) ?></td>
                <td><?= h($calls->user_id) ?></td>
                <td><?= h($calls->title) ?></td>
                <td><?= h($calls->description) ?></td>
                <td><?= h($calls->justification) ?></td>
                <td><?= h($calls->date) ?></td>
                <td><?= h($calls->status) ?></td>
                <td><?= h($calls->note) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Calls', 'action' => 'view', $calls->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Calls', 'action' => 'edit', $calls->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Calls', 'action' => 'delete', $calls->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $calls->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
