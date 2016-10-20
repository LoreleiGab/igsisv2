
<div class="workshops view col-lg-10 col-md-9">
    <h3><?= h($workshop->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Event</th>
            <td><?= $workshop->has('event') ? $this->Html->link($workshop->event->name, ['controller' => 'Events', 'action' => 'view', $workshop->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Inscription</th>
            <td><?= h($workshop->inscription) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($workshop->id) ?></td>
        </tr>
        <tr>
            <th>'Vacancies</th>
            <td><?= $this->Number->format($workshop->vacancies) ?></td>
        </tr>
        <tr>
            <th>'Value Hour</th>
            <td><?= $this->Number->format($workshop->value_hour) ?></td>
        </tr>
        <tr>
            <th>'Workload</th>
            <td><?= $this->Number->format($workshop->workload) ?></td>
        </tr>
        <tr>
            <th>Divulgation</th>
            <td><?= h($workshop->divulgation) ?></tr>
        </tr>
        <tr>
            <th>Certificate</th>
            <td><?= $workshop->certificate ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Sale</th>
            <td><?= $workshop->sale ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="row">
        <h4>Public</h4>
        <?= $this->Text->autoParagraph(h($workshop->public)); ?>
    </div>
    <div class="row">
        <h4>Material</h4>
        <?= $this->Text->autoParagraph(h($workshop->material)); ?>
    </div>
</div>
