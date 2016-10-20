
<div class="occurrences view col-lg-10 col-md-9">
    <h3><?= h($occurrence->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Event</th>
            <td><?= $occurrence->has('event') ? $this->Html->link($occurrence->event->name, ['controller' => 'Events', 'action' => 'view', $occurrence->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Sub Event</th>
            <td><?= $occurrence->has('sub_event') ? $this->Html->link($occurrence->sub_event->title, ['controller' => 'SubEvents', 'action' => 'view', $occurrence->sub_event->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Type Occurrence</th>
            <td><?= $occurrence->has('type_occurrence') ? $this->Html->link($occurrence->type_occurrence->id, ['controller' => 'TypeOccurrences', 'action' => 'view', $occurrence->type_occurrence->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Local</th>
            <td><?= $occurrence->has('local') ? $this->Html->link($occurrence->local->id, ['controller' => 'Locals', 'action' => 'view', $occurrence->local->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Local Other</th>
            <td><?= h($occurrence->local_other) ?></td>
        </tr>
        <tr>
            <th>Frequency</th>
            <td><?= h($occurrence->frequency) ?></td>
        </tr>
        <tr>
            <th>Cinema</th>
            <td><?= $occurrence->has('cinema') ? $this->Html->link($occurrence->cinema->title, ['controller' => 'Cinemas', 'action' => 'view', $occurrence->cinema->id]) : '' ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($occurrence->id) ?></td>
        </tr>
        <tr>
            <th>'Duration</th>
            <td><?= $this->Number->format($occurrence->duration) ?></td>
        </tr>
        <tr>
            <th>'Popular Price</th>
            <td><?= $this->Number->format($occurrence->popular_price) ?></td>
        </tr>
        <tr>
            <th>'Ticket Value</th>
            <td><?= $this->Number->format($occurrence->ticket_value) ?></td>
        </tr>
        <tr>
            <th>'Reserved</th>
            <td><?= $this->Number->format($occurrence->reserved) ?></td>
        </tr>
        <tr>
            <th>'Capacity</th>
            <td><?= $this->Number->format($occurrence->capacity) ?></td>
        </tr>
        <tr>
            <th>'Timezone</th>
            <td><?= $this->Number->format($occurrence->timezone) ?></td>
        </tr>
        <tr>
            <th>Date Starter</th>
            <td><?= h($occurrence->date_starter) ?></tr>
        </tr>
        <tr>
            <th>Date Final</th>
            <td><?= h($occurrence->date_final) ?></tr>
        </tr>
        <tr>
            <th>Start Hour</th>
            <td><?= h($occurrence->start_hour) ?></tr>
        </tr>
        <tr>
            <th>Monday</th>
            <td><?= $occurrence->monday ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Tuesday</th>
            <td><?= $occurrence->tuesday ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Wednesday</th>
            <td><?= $occurrence->wednesday ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Thursday</th>
            <td><?= $occurrence->thursday ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Friday</th>
            <td><?= $occurrence->friday ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Saturday</th>
            <td><?= $occurrence->saturday ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Sunday</th>
            <td><?= $occurrence->sunday ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Especial Day</th>
            <td><?= $occurrence->especial_day ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Audio Description</th>
            <td><?= $occurrence->audio_description ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Libras</th>
            <td><?= $occurrence->libras ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Cultural Turn</th>
            <td><?= $occurrence->cultural_turn ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Get Ticket</th>
            <td><?= $occurrence->get_ticket ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>All Day</th>
            <td><?= $occurrence->all_day ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Published</th>
            <td><?= $occurrence->published ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
