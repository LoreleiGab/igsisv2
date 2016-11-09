<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Local']), ['action' => 'edit', $local->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Local']), ['action' => 'delete', $local->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $local->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Locals']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Local']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Institutions']), ['controller' => 'Institutions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Institution']), ['controller' => 'Institutions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Agenda Posters']), ['controller' => 'AgendaPosters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Agenda Poster']), ['controller' => 'AgendaPosters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Agendas']), ['controller' => 'Agendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Agenda']), ['controller' => 'Agendas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Detail Locals']), ['controller' => 'DetailLocals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Detail Local']), ['controller' => 'DetailLocals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Historic Occurrences']), ['controller' => 'HistoricOccurrences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Historic Occurrence']), ['controller' => 'HistoricOccurrences', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Occurrences']), ['controller' => 'Occurrences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Occurrence']), ['controller' => 'Occurrences', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="locals view col-lg-10 col-md-9">
    <h3><?= h($local->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Institution</th>
            <td><?= $local->has('institution') ? $this->Html->link($local->institution->name, ['controller' => 'Institutions', 'action' => 'view', $local->institution->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= h($local->name) ?></td>
        </tr>
        <tr>
            <th>Rider</th>
            <td><?= h($local->rider) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($local->id) ?></td>
        </tr>
        <tr>
            <th>Published</th>
            <td><?= $local->published ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Agenda Posters']) ?></h4>
        <?php if (!empty($local->agenda_posters)): ?>
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
            <?php foreach ($local->agenda_posters as $agendaPosters): ?>
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
        <?php if (!empty($local->agendas)): ?>
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
            <?php foreach ($local->agendas as $agendas): ?>
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
        <h4><?= __('Related {0}', ['Detail Locals']) ?></h4>
        <?php if (!empty($local->detail_locals)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Local Id</th>
                <th>Territory Id</th>
                <th>Region Id</th>
                <th>Cep</th>
                <th>Number</th>
                <th>Complement</th>
                <th>Link Access Map</th>
                <th>Phone 1</th>
                <th>Phone 2</th>
                <th>Email</th>
                <th>Category Equipment Id</th>
                <th>Formation Subprefecture Id</th>
                <th>Contact</th>
                <th>Phone 1 Responsible</th>
                <th>Phone 2 Responsible</th>
                <th>Email Responsible</th>
                <th>Observation</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($local->detail_locals as $detailLocals): ?>
            <tr>
                <td><?= h($detailLocals->id) ?></td>
                <td><?= h($detailLocals->local_id) ?></td>
                <td><?= h($detailLocals->territory_id) ?></td>
                <td><?= h($detailLocals->region_id) ?></td>
                <td><?= h($detailLocals->cep) ?></td>
                <td><?= h($detailLocals->number) ?></td>
                <td><?= h($detailLocals->complement) ?></td>
                <td><?= h($detailLocals->link_access_map) ?></td>
                <td><?= h($detailLocals->phone_1) ?></td>
                <td><?= h($detailLocals->phone_2) ?></td>
                <td><?= h($detailLocals->email) ?></td>
                <td><?= h($detailLocals->category_equipment_id) ?></td>
                <td><?= h($detailLocals->formation_subprefecture_id) ?></td>
                <td><?= h($detailLocals->contact) ?></td>
                <td><?= h($detailLocals->phone_1_responsible) ?></td>
                <td><?= h($detailLocals->phone_2_responsible) ?></td>
                <td><?= h($detailLocals->email_responsible) ?></td>
                <td><?= h($detailLocals->observation) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'DetailLocals', 'action' => 'view', $detailLocals->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'DetailLocals', 'action' => 'edit', $detailLocals->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'DetailLocals', 'action' => 'delete', $detailLocals->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $detailLocals->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Historic Occurrences']) ?></h4>
        <?php if (!empty($local->historic_occurrences)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Occurrences</th>
                <th>Occurrences Id</th>
                <th>Occurrence Type Id</th>
                <th>Local Id</th>
                <th>Event Id</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
                <th>Start Date</th>
                <th>Final Date</th>
                <th>Start Time</th>
                <th>Final Time</th>
                <th>Timezone</th>
                <th>All Day</th>
                <th>Special Day</th>
                <th>Libras</th>
                <th>Audio Description</th>
                <th>Ticket Value</th>
                <th>Get Ticket</th>
                <th>Local Others</th>
                <th>Capacity</th>
                <th>Reserved</th>
                <th>Duration</th>
                <th>Popular Price</th>
                <th>Frequency</th>
                <th>Sub Event Id</th>
                <th>Cinema Id</th>
                <th>Cultural Turn</th>
                <th>Opening Date</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($local->historic_occurrences as $historicOccurrences): ?>
            <tr>
                <td><?= h($historicOccurrences->occurrences) ?></td>
                <td><?= h($historicOccurrences->occurrences_id) ?></td>
                <td><?= h($historicOccurrences->occurrence_type_id) ?></td>
                <td><?= h($historicOccurrences->local_id) ?></td>
                <td><?= h($historicOccurrences->event_id) ?></td>
                <td><?= h($historicOccurrences->monday) ?></td>
                <td><?= h($historicOccurrences->tuesday) ?></td>
                <td><?= h($historicOccurrences->wednesday) ?></td>
                <td><?= h($historicOccurrences->thursday) ?></td>
                <td><?= h($historicOccurrences->friday) ?></td>
                <td><?= h($historicOccurrences->saturday) ?></td>
                <td><?= h($historicOccurrences->sunday) ?></td>
                <td><?= h($historicOccurrences->start_date) ?></td>
                <td><?= h($historicOccurrences->final_date) ?></td>
                <td><?= h($historicOccurrences->start_time) ?></td>
                <td><?= h($historicOccurrences->final_time) ?></td>
                <td><?= h($historicOccurrences->timezone) ?></td>
                <td><?= h($historicOccurrences->all_day) ?></td>
                <td><?= h($historicOccurrences->special_day) ?></td>
                <td><?= h($historicOccurrences->libras) ?></td>
                <td><?= h($historicOccurrences->audio_description) ?></td>
                <td><?= h($historicOccurrences->ticket_value) ?></td>
                <td><?= h($historicOccurrences->get_ticket) ?></td>
                <td><?= h($historicOccurrences->local_others) ?></td>
                <td><?= h($historicOccurrences->capacity) ?></td>
                <td><?= h($historicOccurrences->reserved) ?></td>
                <td><?= h($historicOccurrences->duration) ?></td>
                <td><?= h($historicOccurrences->popular_price) ?></td>
                <td><?= h($historicOccurrences->frequency) ?></td>
                <td><?= h($historicOccurrences->sub_event_id) ?></td>
                <td><?= h($historicOccurrences->cinema_id) ?></td>
                <td><?= h($historicOccurrences->cultural_turn) ?></td>
                <td><?= h($historicOccurrences->opening_date) ?></td>
                <td><?= h($historicOccurrences->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'HistoricOccurrences', 'action' => 'view', $historicOccurrences->occurrences]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'HistoricOccurrences', 'action' => 'edit', $historicOccurrences->occurrences]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'HistoricOccurrences', 'action' => 'delete', $historicOccurrences->occurrences], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $historicOccurrences->occurrences)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Occurrences']) ?></h4>
        <?php if (!empty($local->occurrences)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Sub Event Id</th>
                <th>Occurrence Type Id</th>
                <th>Date Starter</th>
                <th>Date Final</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
                <th>Duration</th>
                <th>Especial Day</th>
                <th>Audio Description</th>
                <th>Libras</th>
                <th>Start Hour</th>
                <th>Cultural Turn</th>
                <th>Popular Price</th>
                <th>Get Ticket</th>
                <th>Ticket Value</th>
                <th>Local Id</th>
                <th>Local Other</th>
                <th>Reserved</th>
                <th>Capacity</th>
                <th>Timezone</th>
                <th>All Day</th>
                <th>Frequency</th>
                <th>Cinema Id</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($local->occurrences as $occurrences): ?>
            <tr>
                <td><?= h($occurrences->id) ?></td>
                <td><?= h($occurrences->event_id) ?></td>
                <td><?= h($occurrences->sub_event_id) ?></td>
                <td><?= h($occurrences->occurrence_type_id) ?></td>
                <td><?= h($occurrences->date_starter) ?></td>
                <td><?= h($occurrences->date_final) ?></td>
                <td><?= h($occurrences->monday) ?></td>
                <td><?= h($occurrences->tuesday) ?></td>
                <td><?= h($occurrences->wednesday) ?></td>
                <td><?= h($occurrences->thursday) ?></td>
                <td><?= h($occurrences->friday) ?></td>
                <td><?= h($occurrences->saturday) ?></td>
                <td><?= h($occurrences->sunday) ?></td>
                <td><?= h($occurrences->duration) ?></td>
                <td><?= h($occurrences->especial_day) ?></td>
                <td><?= h($occurrences->audio_description) ?></td>
                <td><?= h($occurrences->libras) ?></td>
                <td><?= h($occurrences->start_hour) ?></td>
                <td><?= h($occurrences->cultural_turn) ?></td>
                <td><?= h($occurrences->popular_price) ?></td>
                <td><?= h($occurrences->get_ticket) ?></td>
                <td><?= h($occurrences->ticket_value) ?></td>
                <td><?= h($occurrences->local_id) ?></td>
                <td><?= h($occurrences->local_other) ?></td>
                <td><?= h($occurrences->reserved) ?></td>
                <td><?= h($occurrences->capacity) ?></td>
                <td><?= h($occurrences->timezone) ?></td>
                <td><?= h($occurrences->all_day) ?></td>
                <td><?= h($occurrences->frequency) ?></td>
                <td><?= h($occurrences->cinema_id) ?></td>
                <td><?= h($occurrences->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Occurrences', 'action' => 'view', $occurrences->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Occurrences', 'action' => 'edit', $occurrences->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Occurrences', 'action' => 'delete', $occurrences->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $occurrences->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Users']) ?></h4>
        <?php if (!empty($local->users)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Name</th>
                <th>Rf Rg</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Institution Id</th>
                <th>Group Id</th>
                <th>Get Notification</th>
                <th>Contracts</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($local->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->rf_rg) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->phone) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->institution_id) ?></td>
                <td><?= h($users->group_id) ?></td>
                <td><?= h($users->get_notification) ?></td>
                <td><?= h($users->contracts) ?></td>
                <td><?= h($users->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $users->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
