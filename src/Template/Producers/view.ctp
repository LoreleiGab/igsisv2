<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Producer']), ['action' => 'edit', $producer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Producer']), ['action' => 'delete', $producer->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $producer->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Producers']), ['action' => 'index']) ?> </li>
        
    </ul>
</nav>
<div class="producers view col-lg-10 col-md-9">
    <h3><?= h($producer->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($producer->name) ?></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><?= h($producer->phone) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= h($producer->email) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($producer->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Events']) ?></h4>
        <?php if (!empty($producer->events)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Juridical Relation Id</th>
                <th>Especial Project Id</th>
                <th>Type Event Id</th>
                <th>Sub Event</th>
                <th>Fiscal Id</th>
                <th>Surrogate Id</th>
                <th>Author</th>
                <th>Technical Form</th>
                <th>Age Group Id</th>
                <th>Synopsis</th>
                <th>Release Communication</th>
                <th>Links</th>
                <th>Producer Id</th>
                <th>User Id</th>
                <th>Institution Id</th>
                <th>Date Send</th>
                <th>Public Target</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($producer->events as $events): ?>
            <tr>
                <td><?= h($events->id) ?></td>
                <td><?= h($events->name) ?></td>
                <td><?= h($events->juridical_relation_id) ?></td>
                <td><?= h($events->especial_project_id) ?></td>
                <td><?= h($events->type_event_id) ?></td>
                <td><?= h($events->sub_event) ?></td>
                <td><?= h($events->fiscal_id) ?></td>
                <td><?= h($events->surrogate_id) ?></td>
                <td><?= h($events->author) ?></td>
                <td><?= h($events->technical_form) ?></td>
                <td><?= h($events->age_group_id) ?></td>
                <td><?= h($events->synopsis) ?></td>
                <td><?= h($events->release_communication) ?></td>
                <td><?= h($events->links) ?></td>
                <td><?= h($events->producer_id) ?></td>
                <td><?= h($events->user_id) ?></td>
                <td><?= h($events->institution_id) ?></td>
                <td><?= h($events->date_send) ?></td>
                <td><?= h($events->public_target) ?></td>
                <td><?= h($events->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $events->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Internal Events']) ?></h4>
        <?php if (!empty($producer->internal_events)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Type Event Id</th>
                <th>Especial Project Id</th>
                <th>Fiscal Id</th>
                <th>Surrogate Id</th>
                <th>Description</th>
                <th>Producer Id</th>
                <th>Information Production Id</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($producer->internal_events as $internalEvents): ?>
            <tr>
                <td><?= h($internalEvents->id) ?></td>
                <td><?= h($internalEvents->name) ?></td>
                <td><?= h($internalEvents->type_event_id) ?></td>
                <td><?= h($internalEvents->especial_project_id) ?></td>
                <td><?= h($internalEvents->fiscal_id) ?></td>
                <td><?= h($internalEvents->surrogate_id) ?></td>
                <td><?= h($internalEvents->description) ?></td>
                <td><?= h($internalEvents->producer_id) ?></td>
                <td><?= h($internalEvents->information_production_id) ?></td>
                <td><?= h($internalEvents->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'InternalEvents', 'action' => 'view', $internalEvents->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'InternalEvents', 'action' => 'edit', $internalEvents->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'InternalEvents', 'action' => 'delete', $internalEvents->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $internalEvents->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
