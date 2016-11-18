<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Service']), ['action' => 'edit', $service->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Service']), ['action' => 'delete', $service->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $service->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Services']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Service']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Events']), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Event']), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="services view col-lg-10 col-md-9">
    <h3><?= h($service->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Event</th>
            <td><?= $service->has('event') ? $this->Html->link($service->event->name, ['controller' => 'Events', 'action' => 'view', $service->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Libras</th>
            <td><?= h($service->libras) ?></td>
        </tr>
        <tr>
            <th>Subtitle</th>
            <td><?= h($service->subtitle) ?></td>
        </tr>
        <tr>
            <th>Translation</th>
            <td><?= h($service->translation) ?></td>
        </tr>
        <tr>
            <th>Graphics</th>
            <td><?= h($service->graphics) ?></td>
        </tr>
        <tr>
            <th>Pass</th>
            <td><?= h($service->pass) ?></td>
        </tr>
        <tr>
            <th>Audio Description</th>
            <td><?= h($service->audio_description) ?></td>
        </tr>
        <tr>
            <th>Mounting</th>
            <td><?= h($service->mounting) ?></td>
        </tr>
        <tr>
            <th>Accommodation</th>
            <td><?= h($service->accommodation) ?></td>
        </tr>
        <tr>
            <th>Security</th>
            <td><?= h($service->security) ?></td>
        </tr>
        <tr>
            <th>Transport</th>
            <td><?= h($service->transport) ?></td>
        </tr>
        <tr>
            <th>Company Name</th>
            <td><?= h($service->company_name) ?></td>
        </tr>
        <tr>
            <th>CpfCnpj</th>
            <td><?= h($service->cpfCnpj) ?></td>
        </tr>
        <tr>
            <th>Bank</th>
            <td><?= h($service->bank) ?></td>
        </tr>
        <tr>
            <th>Bank Branch</th>
            <td><?= h($service->bank_branch) ?></td>
        </tr>
        <tr>
            <th>Account</th>
            <td><?= h($service->account) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($service->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4>Itinerary</h4>
        <?= $this->Text->autoParagraph(h($service->itinerary)); ?>
    </div>
    <div class="row">
        <h4>Billing</h4>
        <?= $this->Text->autoParagraph(h($service->billing)); ?>
    </div>
    <div class="row">
        <h4>Capacity</h4>
        <?= $this->Text->autoParagraph(h($service->capacity)); ?>
    </div>
</div>
