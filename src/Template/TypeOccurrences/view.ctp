
<div class="typeOccurrences view col-lg-10 col-md-9">
    <h3><?= h($typeOccurrence->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Occurrence Type</th>
            <td><?= h($typeOccurrence->occurrence_type) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($typeOccurrence->id) ?></td>
        </tr>
    </table>
</div>
