<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Locals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Instituicaos'), ['controller' => 'Instituicaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Instituicao'), ['controller' => 'Instituicaos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Agenda Em Cartazs'), ['controller' => 'AgendaEmCartazs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Agenda Em Cartaz'), ['controller' => 'AgendaEmCartazs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Detalhe Locals'), ['controller' => 'DetalheLocals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Detalhe Local'), ['controller' => 'DetalheLocals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Historico Ocorrencias'), ['controller' => 'HistoricoOcorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Historico Ocorrencia'), ['controller' => 'HistoricoOcorrencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Ocorrencias'), ['controller' => 'Ocorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Ocorrencia'), ['controller' => 'Ocorrencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="locals form col-md-10 columns content">
    <?= $this->Form->create($local) ?>
    <fieldset>
        <legend><?= 'Add Local' ?></legend>
        <?php
            echo $this->Form->input('instituicao_id', ['options' => $instituicaos]);
            echo $this->Form->input('local');
            echo $this->Form->input('rider');
            echo $this->Form->input('publicado');
            echo $this->Form->input('usuarios._ids', ['options' => $usuarios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
