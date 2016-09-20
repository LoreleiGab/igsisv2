<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $instituicao->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $instituicao->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Instituicaos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Agenda Em Cartazs'), ['controller' => 'AgendaEmCartazs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Agenda Em Cartaz'), ['controller' => 'AgendaEmCartazs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Comunicacaos'), ['controller' => 'Comunicacaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Comunicacao'), ['controller' => 'Comunicacaos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Controle Orcamentos'), ['controller' => 'ControleOrcamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Controle Orcamento'), ['controller' => 'ControleOrcamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Locals'), ['controller' => 'Locals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Local'), ['controller' => 'Locals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Pedido Contratacaos'), ['controller' => 'PedidoContratacaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Pedido Contratacao'), ['controller' => 'PedidoContratacaos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Verbas'), ['controller' => 'Verbas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Verba'), ['controller' => 'Verbas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Verifica Producaos'), ['controller' => 'VerificaProducaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Verifica Producao'), ['controller' => 'VerificaProducaos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instituicaos form col-md-10 columns content">
    <?= $this->Form->create($instituicao) ?>
    <fieldset>
        <legend><?= 'Edit Instituicao' ?></legend>
        <?php
            echo $this->Form->input('instituicao');
            echo $this->Form->input('instituicao_pai');
            echo $this->Form->input('sigla');
            echo $this->Form->input('logo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
