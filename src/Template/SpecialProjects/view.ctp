<div class="specialProjects view col-lg-10 col-md-9">
    <h3><?= h($specialProject->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Institution</th>
            <td><?= $specialProject->has('institution') ? $this->Html->link($specialProject->institution->id, ['controller' => 'Institutions', 'action' => 'view', $specialProject->institution->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Especial Project</th>
            <td><?= h($specialProject->especial_project) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($specialProject->id) ?></td>
        </tr>
        <tr>
            <th>Published</th>
            <td><?= $specialProject->published ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
