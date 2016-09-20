<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetoEspecial->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $projetoEspecial->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Projeto Especials'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Evento Internos'), ['controller' => 'EventoInternos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Evento Interno'), ['controller' => 'EventoInternos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetoEspecials form col-md-10 columns content">
    <?= $this->Form->create($projetoEspecial) ?>
    <fieldset>
        <legend><?= 'Edit Projeto Especial' ?></legend>
        <?php
            echo $this->Form->input('projeto_especial');
            echo $this->Form->input('idInstituicao');
            echo $this->Form->input('publicado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
