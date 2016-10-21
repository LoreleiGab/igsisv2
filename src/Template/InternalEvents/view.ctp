<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Internal Event']), ['action' => 'edit', $internalEvent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Internal Event']), ['action' => 'delete', $internalEvent->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $internalEvent->id)]) ?> </li>
		
		<li><?= $this->Html->link(__('Novo {0}', ['Internal Event']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Internal Events']), ['action' => 'index']) ?> </li>
        
        
    </ul>
</nav>
<div class="internalEvents view col-lg-10 col-md-9">
    <h3><?= h($internalEvent->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($internalEvent->name) ?></td>
        </tr>
        <tr>
            <th>Type Event</th>
            <td><?= $internalEvent->has('type_event') ? $this->Html->link($internalEvent->type_event->name, ['controller' => 'TypeEvents', 'action' => 'view', $internalEvent->type_event->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Special Project</th>
            <td><?= $internalEvent->has('special_project') ? $this->Html->link($internalEvent->special_project->name, ['controller' => 'SpecialProjects', 'action' => 'view', $internalEvent->special_project->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Fiscal</th>
            <td><?= $internalEvent->has('fiscal') ? $this->Html->link($internalEvent->fiscal->name, ['controller' => 'Fiscals', 'action' => 'view', $internalEvent->fiscal->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Surrogate</th>
            <td><?= $internalEvent->has('surrogate') ? $this->Html->link($internalEvent->surrogate->name, ['controller' => 'Surrogates', 'action' => 'view', $internalEvent->surrogate->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Producer</th>
            <td><?= $internalEvent->has('producer') ? $this->Html->link($internalEvent->producer->name, ['controller' => 'Producers', 'action' => 'view', $internalEvent->producer->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Information Production</th>
            <td><?= $internalEvent->has('information_production') ? $this->Html->link($internalEvent->information_production->id, ['controller' => 'InformationProductions', 'action' => 'view', $internalEvent->information_production->id]) : '' ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($internalEvent->id) ?></td>
        </tr>
        <tr>
            <th>Published</th>
            <td><?= $internalEvent->published ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="row">
        <h4>Description</h4>
        <?= $this->Text->autoParagraph(h($internalEvent->description)); ?>
    </div>
</div>
