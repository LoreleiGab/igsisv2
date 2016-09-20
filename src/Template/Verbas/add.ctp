<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Verbas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Instituicaos'), ['controller' => 'Instituicaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Instituicao'), ['controller' => 'Instituicaos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Controle Orcamentos'), ['controller' => 'ControleOrcamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Controle Orcamento'), ['controller' => 'ControleOrcamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Pedido Contratacaos'), ['controller' => 'PedidoContratacaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Pedido Contratacao'), ['controller' => 'PedidoContratacaos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Verba Multiplas'), ['controller' => 'VerbaMultiplas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Verba Multipla'), ['controller' => 'VerbaMultiplas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="verbas form col-md-10 columns content">
    <?= $this->Form->create($verba) ?>
    <fieldset>
        <legend><?= 'Add Verba' ?></legend>
        <?php
            echo $this->Form->input('verba');
            echo $this->Form->input('pai');
            echo $this->Form->input('instituicao_id', ['options' => $instituicaos, 'empty' => true]);
            echo $this->Form->input('pf');
            echo $this->Form->input('pj');
            echo $this->Form->input('premio');
            echo $this->Form->input('dotacao_orcamentaria');
            echo $this->Form->input('multiplo');
            echo $this->Form->input('do_pf');
            echo $this->Form->input('doPj');
            echo $this->Form->input('do_premio');
            echo $this->Form->input('detalhamento_acao');
            echo $this->Form->input('numero_reserva_pj');
            echo $this->Form->input('link_pj');
            echo $this->Form->input('Numero_reserva_pf');
            echo $this->Form->input('link_pf');
            echo $this->Form->input('numero_reserva_encargos');
            echo $this->Form->input('vocativo');
            echo $this->Form->input('setor_vocativo');
            echo $this->Form->input('usuarios._ids', ['options' => $usuarios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
