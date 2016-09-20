<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Verba']), ['action' => 'edit', $verba->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Verba']), ['action' => 'delete', $verba->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $verba->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Verbas']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Verba']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Instituicaos']), ['controller' => 'Instituicaos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Instituicao']), ['controller' => 'Instituicaos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Controle Orcamentos']), ['controller' => 'ControleOrcamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Controle Orcamento']), ['controller' => 'ControleOrcamentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Pedido Contratacaos']), ['controller' => 'PedidoContratacaos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Pedido Contratacao']), ['controller' => 'PedidoContratacaos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Verba Multiplas']), ['controller' => 'VerbaMultiplas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Verba Multipla']), ['controller' => 'VerbaMultiplas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Usuarios']), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Usuario']), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="verbas view col-lg-10 col-md-9">
    <h3><?= h($verba->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Verba</th>
            <td><?= h($verba->verba) ?></td>
        </tr>
        <tr>
            <th>Instituicao</th>
            <td><?= $verba->has('instituicao') ? $this->Html->link($verba->instituicao->id, ['controller' => 'Instituicaos', 'action' => 'view', $verba->instituicao->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Dotacao Orcamentaria</th>
            <td><?= h($verba->dotacao_orcamentaria) ?></td>
        </tr>
        <tr>
            <th>Detalhamento Acao</th>
            <td><?= h($verba->detalhamento_acao) ?></td>
        </tr>
        <tr>
            <th>Numero Reserva Pj</th>
            <td><?= h($verba->numero_reserva_pj) ?></td>
        </tr>
        <tr>
            <th>Link Pj</th>
            <td><?= h($verba->link_pj) ?></td>
        </tr>
        <tr>
            <th>Numero Reserva Pf</th>
            <td><?= h($verba->Numero_reserva_pf) ?></td>
        </tr>
        <tr>
            <th>Link Pf</th>
            <td><?= h($verba->link_pf) ?></td>
        </tr>
        <tr>
            <th>Numero Reserva Encargos</th>
            <td><?= h($verba->numero_reserva_encargos) ?></td>
        </tr>
        <tr>
            <th>Vocativo</th>
            <td><?= h($verba->vocativo) ?></td>
        </tr>
        <tr>
            <th>Setor Vocativo</th>
            <td><?= h($verba->setor_vocativo) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($verba->id) ?></td>
        </tr>
        <tr>
            <th>'Pai</th>
            <td><?= $this->Number->format($verba->pai) ?></td>
        </tr>
        <tr>
            <th>'Pf</th>
            <td><?= $this->Number->format($verba->pf) ?></td>
        </tr>
        <tr>
            <th>'Pj</th>
            <td><?= $this->Number->format($verba->pj) ?></td>
        </tr>
        <tr>
            <th>'Premio</th>
            <td><?= $this->Number->format($verba->premio) ?></td>
        </tr>
        <tr>
            <th>'Do Pf</th>
            <td><?= $this->Number->format($verba->do_pf) ?></td>
        </tr>
        <tr>
            <th>'DoPj</th>
            <td><?= $this->Number->format($verba->doPj) ?></td>
        </tr>
        <tr>
            <th>'Do Premio</th>
            <td><?= $this->Number->format($verba->do_premio) ?></td>
        </tr>
        <tr>
            <th>Multiplo</th>
            <td><?= $verba->multiplo ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Controle Orcamentos']) ?></h4>
        <?php if (!empty($verba->controle_orcamentos)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Usuario Id</th>
                <th>Verba Id</th>
                <th>Instituicao Id</th>
                <th>Verba Pai</th>
                <th>Publicado</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($verba->controle_orcamentos as $controleOrcamentos): ?>
            <tr>
                <td><?= h($controleOrcamentos->id) ?></td>
                <td><?= h($controleOrcamentos->usuario_id) ?></td>
                <td><?= h($controleOrcamentos->verba_id) ?></td>
                <td><?= h($controleOrcamentos->instituicao_id) ?></td>
                <td><?= h($controleOrcamentos->verba_pai) ?></td>
                <td><?= h($controleOrcamentos->publicado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'ControleOrcamentos', 'action' => 'view', $controleOrcamentos->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'ControleOrcamentos', 'action' => 'edit', $controleOrcamentos->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'ControleOrcamentos', 'action' => 'delete', $controleOrcamentos->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $controleOrcamentos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Pedido Contratacaos']) ?></h4>
        <?php if (!empty($verba->pedido_contratacaos)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Tipo Modalidade Contratacao</th>
                <th>Modalidade Contratacao Id</th>
                <th>Tipo Pessoa Id</th>
                <th>Pessoa Id</th>
                <th>Executante Id</th>
                <th>Valor</th>
                <th>Forma Pagamento</th>
                <th>Quantidade Parcelas</th>
                <th>Verba Id</th>
                <th>Justificativa</th>
                <th>Parecer Artistico</th>
                <th>Observacao</th>
                <th>Instituicao Id</th>
                <th>Numero Processo</th>
                <th>Numero Nota Emprenho</th>
                <th>Penalidade Id</th>
                <th>Data Emissao Nota Empenho</th>
                <th>Data Entrega Nota Empenho</th>
                <th>Usuario Pesquisar Id</th>
                <th>Estado Id</th>
                <th>Aprovacao Financa</th>
                <th>Usuario Contratos Id</th>
                <th>Amparo Legal</th>
                <th>Dotacao Orcamentaria</th>
                <th>Finalizacao</th>
                <th>Data Contrato</th>
                <th>Data Proposta</th>
                <th>Data Reserva</th>
                <th>Data Juridico</th>
                <th>Data Publicacao</th>
                <th>Data Contabilidade</th>
                <th>Data Pagamento</th>
                <th>Processo Sof</th>
                <th>Publicado</th>
                <th>Extrato Liquidacao</th>
                <th>Retencoes INSS</th>
                <th>Retencoes ISS</th>
                <th>Retencoes IRRF</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($verba->pedido_contratacaos as $pedidoContratacaos): ?>
            <tr>
                <td><?= h($pedidoContratacaos->id) ?></td>
                <td><?= h($pedidoContratacaos->tipo_modalidade_contratacao) ?></td>
                <td><?= h($pedidoContratacaos->modalidade_contratacao_id) ?></td>
                <td><?= h($pedidoContratacaos->tipo_pessoa_id) ?></td>
                <td><?= h($pedidoContratacaos->pessoa_id) ?></td>
                <td><?= h($pedidoContratacaos->executante_id) ?></td>
                <td><?= h($pedidoContratacaos->valor) ?></td>
                <td><?= h($pedidoContratacaos->forma_pagamento) ?></td>
                <td><?= h($pedidoContratacaos->quantidade_parcelas) ?></td>
                <td><?= h($pedidoContratacaos->verba_id) ?></td>
                <td><?= h($pedidoContratacaos->justificativa) ?></td>
                <td><?= h($pedidoContratacaos->parecer_artistico) ?></td>
                <td><?= h($pedidoContratacaos->observacao) ?></td>
                <td><?= h($pedidoContratacaos->instituicao_id) ?></td>
                <td><?= h($pedidoContratacaos->numero_processo) ?></td>
                <td><?= h($pedidoContratacaos->numero_nota_emprenho) ?></td>
                <td><?= h($pedidoContratacaos->penalidade_id) ?></td>
                <td><?= h($pedidoContratacaos->data_emissao_nota_empenho) ?></td>
                <td><?= h($pedidoContratacaos->data_entrega_nota_empenho) ?></td>
                <td><?= h($pedidoContratacaos->usuario_pesquisar_id) ?></td>
                <td><?= h($pedidoContratacaos->estado_id) ?></td>
                <td><?= h($pedidoContratacaos->aprovacao_financa) ?></td>
                <td><?= h($pedidoContratacaos->usuario_contratos_id) ?></td>
                <td><?= h($pedidoContratacaos->amparo_legal) ?></td>
                <td><?= h($pedidoContratacaos->dotacao_orcamentaria) ?></td>
                <td><?= h($pedidoContratacaos->finalizacao) ?></td>
                <td><?= h($pedidoContratacaos->data_contrato) ?></td>
                <td><?= h($pedidoContratacaos->data_proposta) ?></td>
                <td><?= h($pedidoContratacaos->data_reserva) ?></td>
                <td><?= h($pedidoContratacaos->data_juridico) ?></td>
                <td><?= h($pedidoContratacaos->data_publicacao) ?></td>
                <td><?= h($pedidoContratacaos->data_contabilidade) ?></td>
                <td><?= h($pedidoContratacaos->data_pagamento) ?></td>
                <td><?= h($pedidoContratacaos->processo_sof) ?></td>
                <td><?= h($pedidoContratacaos->publicado) ?></td>
                <td><?= h($pedidoContratacaos->extrato_liquidacao) ?></td>
                <td><?= h($pedidoContratacaos->retencoes_INSS) ?></td>
                <td><?= h($pedidoContratacaos->retencoes_ISS) ?></td>
                <td><?= h($pedidoContratacaos->retencoes_IRRF) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'PedidoContratacaos', 'action' => 'view', $pedidoContratacaos->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'PedidoContratacaos', 'action' => 'edit', $pedidoContratacaos->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'PedidoContratacaos', 'action' => 'delete', $pedidoContratacaos->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $pedidoContratacaos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Verba Multiplas']) ?></h4>
        <?php if (!empty($verba->verba_multiplas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Pedido Contratacao Id</th>
                <th>Verba Id</th>
                <th>Valor</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($verba->verba_multiplas as $verbaMultiplas): ?>
            <tr>
                <td><?= h($verbaMultiplas->id) ?></td>
                <td><?= h($verbaMultiplas->pedido_contratacao_id) ?></td>
                <td><?= h($verbaMultiplas->verba_id) ?></td>
                <td><?= h($verbaMultiplas->valor) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'VerbaMultiplas', 'action' => 'view', $verbaMultiplas->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'VerbaMultiplas', 'action' => 'edit', $verbaMultiplas->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'VerbaMultiplas', 'action' => 'delete', $verbaMultiplas->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $verbaMultiplas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Usuarios']) ?></h4>
        <?php if (!empty($verba->usuarios)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Nome Completo</th>
                <th>Rf</th>
                <th>Nome Usuario</th>
                <th>Senha</th>
                <th>Telefone</th>
                <th>Instituicao Id</th>
                <th>Local</th>
                <th>Verba</th>
                <th>Email</th>
                <th>Receber Notificacao</th>
                <th>Publicado</th>
                <th>Contratos</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($verba->usuarios as $usuarios): ?>
            <tr>
                <td><?= h($usuarios->id) ?></td>
                <td><?= h($usuarios->nome_completo) ?></td>
                <td><?= h($usuarios->rf) ?></td>
                <td><?= h($usuarios->nome_usuario) ?></td>
                <td><?= h($usuarios->senha) ?></td>
                <td><?= h($usuarios->telefone) ?></td>
                <td><?= h($usuarios->instituicao_id) ?></td>
                <td><?= h($usuarios->local) ?></td>
                <td><?= h($usuarios->verba) ?></td>
                <td><?= h($usuarios->email) ?></td>
                <td><?= h($usuarios->receber_notificacao) ?></td>
                <td><?= h($usuarios->publicado) ?></td>
                <td><?= h($usuarios->contratos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $usuarios->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
