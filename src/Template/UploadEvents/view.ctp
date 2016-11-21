<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Upload Event']), ['action' => 'edit', $uploadEvent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Upload Event']), ['action' => 'delete', $uploadEvent->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $uploadEvent->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Upload Events']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Upload Event']), ['action' => 'add']) ?> </li>
        
    </ul>
</nav>
<div class="uploadEvents view col-lg-10 col-md-9">
    <h3><?= h($uploadEvent->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Event</th>
            <td><?= $uploadEvent->has('event') ? $this->Html->link($uploadEvent->event->name, ['controller' => 'Events', 'action' => 'view', $uploadEvent->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($uploadEvent->id) ?></td>
        </tr>
        <tr>
            <th>Published</th>
            <td><?= $uploadEvent->published ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="row">
        <h4>File</h4>
        <?= $this->Text->autoParagraph(h($uploadEvent->file)); ?>
    </div>
</div>
