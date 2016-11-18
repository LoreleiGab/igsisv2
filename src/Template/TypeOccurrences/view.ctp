<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Type Occurrence']), ['action' => 'edit', $typeOccurrence->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Type Occurrence']), ['action' => 'delete', $typeOccurrence->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $typeOccurrence->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Type Occurrences']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Type Occurrence']), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typeOccurrences view col-lg-10 col-md-9">
    <h3><?= h($typeOccurrence->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($typeOccurrence->name) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($typeOccurrence->id) ?></td>
        </tr>
    </table>
</div>
