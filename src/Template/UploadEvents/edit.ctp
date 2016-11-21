<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $uploadEvent->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $uploadEvent->id)]
            )
        ?></li>
       
        
    </ul>
</nav>
<div class="uploadEvents form col-md-10 columns content">
    <?= $this->Form->create($uploadEvent) ?>
    <fieldset>
        <legend><?= 'Edit Upload Event' ?></legend>
        <?php
            echo $this->Form->input('event_id', ['options' => $events]);
            echo $this->Form->input('file');
            echo $this->Form->input('published');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
