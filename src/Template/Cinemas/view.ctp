
<div class="cinemas view col-lg-10 col-md-9">
    <h3><?= h($cinema->title) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Event</th>
            <td><?= $cinema->has('event') ? $this->Html->link($cinema->event->name, ['controller' => 'Events', 'action' => 'view', $cinema->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><?= h($cinema->title) ?></td>
        </tr>
        <tr>
            <th>Original Title</th>
            <td><?= h($cinema->original_title) ?></td>
        </tr>
        <tr>
            <th>Genre</th>
            <td><?= h($cinema->genre) ?></td>
        </tr>
        <tr>
            <th>Link Trailer</th>
            <td><?= h($cinema->link_trailer) ?></td>
        </tr>
        <tr>
            <th>Gauge</th>
            <td><?= h($cinema->gauge) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($cinema->id) ?></td>
        </tr>
        <tr>
            <th>'Movie Country Id</th>
            <td><?= $this->Number->format($cinema->movie_country_id) ?></td>
        </tr>
        <tr>
            <th>'Production Year</th>
            <td><?= $this->Number->format($cinema->production_year) ?></td>
        </tr>
        <tr>
            <th>'Age Rating</th>
            <td><?= $this->Number->format($cinema->age_rating) ?></td>
        </tr>
        <tr>
            <th>'Minutes</th>
            <td><?= $this->Number->format($cinema->minutes) ?></td>
        </tr>
        <tr>
            <th>Published</th>
            <td><?= $cinema->published ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="row">
        <h4>Direction</h4>
        <?= $this->Text->autoParagraph(h($cinema->direction)); ?>
    </div>
    <div class="row">
        <h4>Synopsis</h4>
        <?= $this->Text->autoParagraph(h($cinema->synopsis)); ?>
    </div>
    <div class="row">
        <h4>Cast</h4>
        <?= $this->Text->autoParagraph(h($cinema->cast)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Agenda Posters']) ?></h4>
        <?php if (!empty($cinema->agenda_posters)): ?>
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
            <?php foreach ($cinema->agenda_posters as $agendaPosters): ?>
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
        <?php if (!empty($cinema->agendas)): ?>
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
            <?php foreach ($cinema->agendas as $agendas): ?>
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
        <h4><?= __('Related {0}', ['Historic Occurrences']) ?></h4>
        <?php if (!empty($cinema->historic_occurrences)): ?>
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
            <?php foreach ($cinema->historic_occurrences as $historicOccurrences): ?>
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
        <?php if (!empty($cinema->occurrences)): ?>
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
            <?php foreach ($cinema->occurrences as $occurrences): ?>
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
</div>
