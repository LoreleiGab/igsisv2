<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Call']), ['action' => 'edit', $call->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Call']), ['action' => 'delete', $call->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $call->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Calls']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Call']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Type Calls']), ['controller' => 'TypeCalls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Type Call']), ['controller' => 'TypeCalls', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Events']), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Event']), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Call Comments']), ['controller' => 'CallComments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Call Comment']), ['controller' => 'CallComments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Log Reopenings']), ['controller' => 'LogReopenings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Log Reopening']), ['controller' => 'LogReopenings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Status']), ['controller' => 'Status', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Status']), ['controller' => 'Status', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="calls view col-lg-10 col-md-9">
    <h3><?= h($call->title) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Type Call</th>
            <td><?= $call->has('type_call') ? $this->Html->link($call->type_call->name, ['controller' => 'TypeCalls', 'action' => 'view', $call->type_call->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Event</th>
            <td><?= $call->has('event') ? $this->Html->link($call->event->name, ['controller' => 'Events', 'action' => 'view', $call->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th>User</th>
            <td><?= $call->has('user') ? $this->Html->link($call->user->name, ['controller' => 'Users', 'action' => 'view', $call->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><?= h($call->title) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($call->id) ?></td>
        </tr>
        <tr>
            <th>'Status</th>
            <td><?= $this->Number->format($call->status) ?></td>
        </tr>
        <tr>
            <th>Date</th>
            <td><?= h($call->date) ?></tr>
        </tr>
    </table>
    <div class="row">
        <h4>Description</h4>
        <?= $this->Text->autoParagraph(h($call->description)); ?>
    </div>
    <div class="row">
        <h4>Justification</h4>
        <?= $this->Text->autoParagraph(h($call->justification)); ?>
    </div>
    <div class="row">
        <h4>Note</h4>
        <?= $this->Text->autoParagraph(h($call->note)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Call Comments']) ?></h4>
        <?php if (!empty($call->call_comments)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Call Id</th>
                <th>User Id</th>
                <th>Date</th>
                <th>Comment</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($call->call_comments as $callComments): ?>
            <tr>
                <td><?= h($callComments->id) ?></td>
                <td><?= h($callComments->call_id) ?></td>
                <td><?= h($callComments->user_id) ?></td>
                <td><?= h($callComments->date) ?></td>
                <td><?= h($callComments->comment) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'CallComments', 'action' => 'view', $callComments->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'CallComments', 'action' => 'edit', $callComments->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'CallComments', 'action' => 'delete', $callComments->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $callComments->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Log Reopenings']) ?></h4>
        <?php if (!empty($call->log_reopenings)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Call Id</th>
                <th>User Id</th>
                <th>Ig Category Id</th>
                <th>Event Id</th>
                <th>Description</th>
                <th>Date</th>
                <th>Ip</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($call->log_reopenings as $logReopenings): ?>
            <tr>
                <td><?= h($logReopenings->id) ?></td>
                <td><?= h($logReopenings->call_id) ?></td>
                <td><?= h($logReopenings->user_id) ?></td>
                <td><?= h($logReopenings->ig_category_id) ?></td>
                <td><?= h($logReopenings->event_id) ?></td>
                <td><?= h($logReopenings->description) ?></td>
                <td><?= h($logReopenings->date) ?></td>
                <td><?= h($logReopenings->ip) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'LogReopenings', 'action' => 'view', $logReopenings->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'LogReopenings', 'action' => 'edit', $logReopenings->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'LogReopenings', 'action' => 'delete', $logReopenings->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $logReopenings->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Status']) ?></h4>
        <?php if (!empty($call->status)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Order</th>
                <th>Area</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($call->status as $status): ?>
            <tr>
                <td><?= h($status->id) ?></td>
                <td><?= h($status->name) ?></td>
                <td><?= h($status->order) ?></td>
                <td><?= h($status->area) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Status', 'action' => 'view', $status->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Status', 'action' => 'edit', $status->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Status', 'action' => 'delete', $status->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $status->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
