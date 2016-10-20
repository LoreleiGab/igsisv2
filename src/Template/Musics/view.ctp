
<div class="musics view col-lg-10 col-md-9">
    <h3><?= h($music->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Event</th>
            <td><?= $music->has('event') ? $this->Html->link($music->event->name, ['controller' => 'Events', 'action' => 'view', $music->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Genre</th>
            <td><?= h($music->genre) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($music->id) ?></td>
        </tr>
        <tr>
            <th>Sale</th>
            <td><?= $music->sale ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="row">
        <h4>Material</h4>
        <?= $this->Text->autoParagraph(h($music->material)); ?>
    </div>
</div>
