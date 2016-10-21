<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Type Event']), ['action' => 'edit', $typeEvent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Type Event']), ['action' => 'delete', $typeEvent->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $typeEvent->id)]) ?> </li>
		
		<li><?= $this->Html->link(__('Novo {0}', ['Type Event']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Type Events']), ['action' => 'index']) ?> </li>
        
       
    </ul>
</nav>
<div class="typeEvents view col-lg-10 col-md-9">
    <h3><?= h($typeEvent->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($typeEvent->name) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($typeEvent->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Agenda Posters']) ?></h4>
        <?php if (!empty($typeEvent->agenda_posters)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Name Event</th>
                <th>Type Event Id</th>
                <th>Type Event</th>
                <th>Institution Id</th>
                <th>Local Id</th>
                <th>Occurrences Id</th>
                <th>Date</th>
                <th>Hour</th>
                <th>Cinema Id</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($typeEvent->agenda_posters as $agendaPosters): ?>
            <tr>
                <td><?= h($agendaPosters->id) ?></td>
                <td><?= h($agendaPosters->event_id) ?></td>
                <td><?= h($agendaPosters->name_event) ?></td>
                <td><?= h($agendaPosters->type_event_id) ?></td>
                <td><?= h($agendaPosters->type_event) ?></td>
                <td><?= h($agendaPosters->institution_id) ?></td>
                <td><?= h($agendaPosters->local_id) ?></td>
                <td><?= h($agendaPosters->occurrences_id) ?></td>
                <td><?= h($agendaPosters->date) ?></td>
                <td><?= h($agendaPosters->hour) ?></td>
                <td><?= h($agendaPosters->cinema_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'AgendaPosters', 'action' => 'view', $agendaPosters->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'AgendaPosters', 'action' => 'edit', $agendaPosters->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'AgendaPosters', 'action' => 'delete', $agendaPosters->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $agendaPosters->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Agendas']) ?></h4>
        <?php if (!empty($typeEvent->agendas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Type Event Id</th>
                <th>Occurrences Id</th>
                <th>Institution Id</th>
                <th>Local Id</th>
                <th>Date</th>
                <th>Hour</th>
                <th>Cinema Id</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($typeEvent->agendas as $agendas): ?>
            <tr>
                <td><?= h($agendas->id) ?></td>
                <td><?= h($agendas->event_id) ?></td>
                <td><?= h($agendas->type_event_id) ?></td>
                <td><?= h($agendas->occurrences_id) ?></td>
                <td><?= h($agendas->institution_id) ?></td>
                <td><?= h($agendas->local_id) ?></td>
                <td><?= h($agendas->date) ?></td>
                <td><?= h($agendas->hour) ?></td>
                <td><?= h($agendas->cinema_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Agendas', 'action' => 'view', $agendas->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Agendas', 'action' => 'edit', $agendas->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Agendas', 'action' => 'delete', $agendas->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $agendas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Events']) ?></h4>
        <?php if (!empty($typeEvent->events)): ?>
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
            <?php foreach ($typeEvent->events as $events): ?>
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
        <?php if (!empty($typeEvent->internal_events)): ?>
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
            <?php foreach ($typeEvent->internal_events as $internalEvents): ?>
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
    <div class="related">
        <h4><?= __('Related {0}', ['Sub Events']) ?></h4>
        <?php if (!empty($typeEvent->sub_events)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Type Event Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($typeEvent->sub_events as $subEvents): ?>
            <tr>
                <td><?= h($subEvents->id) ?></td>
                <td><?= h($subEvents->event_id) ?></td>
                <td><?= h($subEvents->type_event_id) ?></td>
                <td><?= h($subEvents->title) ?></td>
                <td><?= h($subEvents->description) ?></td>
                <td><?= h($subEvents->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'SubEvents', 'action' => 'view', $subEvents->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'SubEvents', 'action' => 'edit', $subEvents->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'SubEvents', 'action' => 'delete', $subEvents->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $subEvents->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Temp Posters']) ?></h4>
        <?php if (!empty($typeEvent->temp_posters)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Agenda Posters Id</th>
                <th>Event Id</th>
                <th>Type Event Id</th>
                <th>Special Projects Id</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($typeEvent->temp_posters as $tempPosters): ?>
            <tr>
                <td><?= h($tempPosters->agenda_posters_id) ?></td>
                <td><?= h($tempPosters->event_id) ?></td>
                <td><?= h($tempPosters->type_event_id) ?></td>
                <td><?= h($tempPosters->special_projects_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'TempPosters', 'action' => 'view', $tempPosters->agenda_posters_id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'TempPosters', 'action' => 'edit', $tempPosters->agenda_posters_id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'TempPosters', 'action' => 'delete', $tempPosters->agenda_posters_id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $tempPosters->agenda_posters_id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
