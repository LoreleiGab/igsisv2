
<div class="visualArts view col-lg-10 col-md-9">
    <h3><?= h($visualArt->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Event</th>
            <td><?= $visualArt->has('event') ? $this->Html->link($visualArt->event->name, ['controller' => 'Events', 'action' => 'view', $visualArt->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Type</th>
            <td><?= h($visualArt->type) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($visualArt->id) ?></td>
        </tr>
        <tr>
            <th>'Number</th>
            <td><?= $this->Number->format($visualArt->number) ?></td>
        </tr>
        <tr>
            <th>'Value</th>
            <td><?= $this->Number->format($visualArt->value) ?></td>
        </tr>
        <tr>
            <th>Panel</th>
            <td><?= $visualArt->panel ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Subtitle</th>
            <td><?= $visualArt->subtitle ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Identity</th>
            <td><?= $visualArt->identity ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Support</th>
            <td><?= $visualArt->support ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Collection</th>
            <td><?= $visualArt->collection ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
