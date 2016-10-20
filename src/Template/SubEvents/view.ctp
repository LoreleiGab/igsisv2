
<div class="subEvents view col-lg-10 col-md-9">
    <h3><?= h($subEvent->title) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Event</th>
            <td><?= $subEvent->has('event') ? $this->Html->link($subEvent->event->name, ['controller' => 'Events', 'action' => 'view', $subEvent->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Type Event</th>
            <td><?= $subEvent->has('type_event') ? $this->Html->link($subEvent->type_event->name, ['controller' => 'TypeEvents', 'action' => 'view', $subEvent->type_event->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><?= h($subEvent->title) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($subEvent->id) ?></td>
        </tr>
        <tr>
            <th>'Published</th>
            <td><?= $this->Number->format($subEvent->published) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4>Description</h4>
        <?= $this->Text->autoParagraph(h($subEvent->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Historic Occurrences']) ?></h4>
        <?php if (!empty($subEvent->historic_occurrences)): ?>
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
            <?php foreach ($subEvent->historic_occurrences as $historicOccurrences): ?>
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
        <?php if (!empty($subEvent->occurrences)): ?>
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
            <?php foreach ($subEvent->occurrences as $occurrences): ?>
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
