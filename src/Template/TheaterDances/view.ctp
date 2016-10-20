
<div class="theaterDances view col-lg-10 col-md-9">
    <h3><?= h($theaterDance->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Event</th>
            <td><?= $theaterDance->has('event') ? $this->Html->link($theaterDance->event->name, ['controller' => 'Events', 'action' => 'view', $theaterDance->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Genre</th>
            <td><?= h($theaterDance->genre) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($theaterDance->id) ?></td>
        </tr>
        <tr>
            <th>Premiere</th>
            <td><?= $theaterDance->premiere ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
