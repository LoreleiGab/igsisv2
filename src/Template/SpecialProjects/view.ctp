<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Special Project']), ['action' => 'edit', $specialProject->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Special Project']), ['action' => 'delete', $specialProject->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $specialProject->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Special Projects']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Special Project']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Institutions']), ['controller' => 'Institutions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Institution']), ['controller' => 'Institutions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Events']), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Event']), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="specialProjects view col-lg-10 col-md-9">
    <h3><?= h($specialProject->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($specialProject->name) ?></td>
        </tr>
        <tr>
            <th>Institution</th>
            <td><?= $specialProject->has('institution') ? $this->Html->link($specialProject->institution->name, ['controller' => 'Institutions', 'action' => 'view', $specialProject->institution->id]) : '' ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($specialProject->id) ?></td>
        </tr>
        <tr>
            <th>Published</th>
            <td><?= $specialProject->published ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Events']) ?></h4>
        <?php if (!empty($specialProject->events)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Juridical Relation Id</th>
                <th>Special Project Id</th>
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
            <?php foreach ($specialProject->events as $events): ?>
            <tr>
                <td><?= h($events->id) ?></td>
                <td><?= h($events->name) ?></td>
                <td><?= h($events->juridical_relation_id) ?></td>
                <td><?= h($events->special_project_id) ?></td>
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
</div>
