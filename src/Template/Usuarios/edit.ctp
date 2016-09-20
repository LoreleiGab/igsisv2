<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usuario->id],
                ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $usuario->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Instituicaos'), ['controller' => 'Instituicaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Instituicao'), ['controller' => 'Instituicaos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Chamado Comentarios'), ['controller' => 'ChamadoComentarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Chamado Comentario'), ['controller' => 'ChamadoComentarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Chamados'), ['controller' => 'Chamados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Chamado'), ['controller' => 'Chamados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Controle Orcamentos'), ['controller' => 'ControleOrcamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Controle Orcamento'), ['controller' => 'ControleOrcamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Formacao Vigencias'), ['controller' => 'FormacaoVigencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Formacao Vigencia'), ['controller' => 'FormacaoVigencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Formacaos'), ['controller' => 'Formacaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Formacao'), ['controller' => 'Formacaos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Historicos'), ['controller' => 'Historicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Historico'), ['controller' => 'Historicos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Logs'), ['controller' => 'Logs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Log'), ['controller' => 'Logs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Pessoa Fisicas'), ['controller' => 'PessoaFisicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Pessoa Fisica'), ['controller' => 'PessoaFisicas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Pessoa Juridicas'), ['controller' => 'PessoaJuridicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Pessoa Juridica'), ['controller' => 'PessoaJuridicas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Times'), ['controller' => 'Times', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Time'), ['controller' => 'Times', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Verifica Producaos'), ['controller' => 'VerificaProducaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Verifica Producao'), ['controller' => 'VerificaProducaos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Locals'), ['controller' => 'Locals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Local'), ['controller' => 'Locals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Modulos'), ['controller' => 'Modulos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Modulo'), ['controller' => 'Modulos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', 'Verbas'), ['controller' => 'Verbas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Verba'), ['controller' => 'Verbas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarios form col-md-10 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= 'Edit Usuario' ?></legend>
        <?php
            echo $this->Form->input('nome_completo');
            echo $this->Form->input('rf');
            echo $this->Form->input('nome_usuario');
            echo $this->Form->input('senha');
            echo $this->Form->input('telefone');
            echo $this->Form->input('instituicao_id', ['options' => $instituicaos, 'empty' => true]);
            echo $this->Form->input('local');
            echo $this->Form->input('verba');
            echo $this->Form->input('email');
            echo $this->Form->input('receber_notificacao');
            echo $this->Form->input('publicado');
            echo $this->Form->input('contratos');
            echo $this->Form->input('locals._ids', ['options' => $locals]);
            echo $this->Form->input('modulos._ids', ['options' => $modulos]);
            echo $this->Form->input('verbas._ids', ['options' => $verbas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
