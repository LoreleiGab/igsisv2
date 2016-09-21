<div class="instituicaos view col-lg-10 col-md-9">
    <h3><?= h($instituicao->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Instituição</th>
            <td><?= h($instituicao->instituicao) ?></td>
        </tr>
        <tr>
            <th>Sigla</th>
            <td><?= h($instituicao->sigla) ?></td>
        </tr>
        <tr>
            <th>Logo</th>
            <td><?= h($instituicao->logo) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($instituicao->id) ?></td>
        </tr>
        <tr>
            <th>'Instituicao Pai</th>
            <td><?= $this->Number->format($instituicao->instituicao_pai) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Relacionado com {0}', ['Agenda Em Cartazs']) ?></h4>
        <?php if (!empty($instituicao->agenda_em_cartazs)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Evento Id</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Local Id</th>
                <th>Instituicao Id</th>
                <th>Tipo Evento Id</th>
                <th>Ocorrencia Id</th>
                <th>Cinema Id</th>
                <th>Tipo Evento</th>
                <th>Nome Evento</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($instituicao->agenda_em_cartazs as $agendaEmCartazs): ?>
            <tr>
                <td><?= h($agendaEmCartazs->id) ?></td>
                <td><?= h($agendaEmCartazs->evento_id) ?></td>
                <td><?= h($agendaEmCartazs->data) ?></td>
                <td><?= h($agendaEmCartazs->hora) ?></td>
                <td><?= h($agendaEmCartazs->local_id) ?></td>
                <td><?= h($agendaEmCartazs->instituicao_id) ?></td>
                <td><?= h($agendaEmCartazs->tipo_evento_id) ?></td>
                <td><?= h($agendaEmCartazs->ocorrencia_id) ?></td>
                <td><?= h($agendaEmCartazs->cinema_id) ?></td>
                <td><?= h($agendaEmCartazs->tipo_evento) ?></td>
                <td><?= h($agendaEmCartazs->nome_evento) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'AgendaEmCartazs', 'action' => 'view', $agendaEmCartazs->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'AgendaEmCartazs', 'action' => 'edit', $agendaEmCartazs->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'AgendaEmCartazs', 'action' => 'delete', $agendaEmCartazs->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $agendaEmCartazs->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Relacionado com {0}', ['Agendas']) ?></h4>
        <?php if (!empty($instituicao->agendas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Evento Id</th>
                <th>Tipo Evento Id</th>
                <th>Ocorrencia Id</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Local Id</th>
                <th>Instituicao Id</th>
                <th>Cinema Id</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($instituicao->agendas as $agendas): ?>
            <tr>
                <td><?= h($agendas->id) ?></td>
                <td><?= h($agendas->evento_id) ?></td>
                <td><?= h($agendas->tipo_evento_id) ?></td>
                <td><?= h($agendas->ocorrencia_id) ?></td>
                <td><?= h($agendas->data) ?></td>
                <td><?= h($agendas->hora) ?></td>
                <td><?= h($agendas->local_id) ?></td>
                <td><?= h($agendas->instituicao_id) ?></td>
                <td><?= h($agendas->cinema_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Agendas', 'action' => 'view', $agendas->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Agendas', 'action' => 'edit', $agendas->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Agendas', 'action' => 'delete', $agendas->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $agendas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Relacionado com {0}', ['Comunicacaos']) ?></h4>
        <?php if (!empty($instituicao->comunicacaos)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Sinopse</th>
                <th>Parecer Artistico</th>
                <th>Ficha Tecnica</th>
                <th>Autor</th>
                <th>Release Com</th>
                <th>Filme</th>
                <th>Revisado</th>
                <th>Editado</th>
                <th>Site</th>
                <th>Publicacao</th>
                <th>Registro Audio</th>
                <th>Registro Video</th>
                <th>Registro Fotografia</th>
                <th>Evento Id</th>
                <th>Projeto</th>
                <th>Nome Evento</th>
                <th>Observacao</th>
                <th>Instituicao Id</th>
                <th>Projeto Especial</th>
                <th>Foto</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($instituicao->comunicacaos as $comunicacaos): ?>
            <tr>
                <td><?= h($comunicacaos->id) ?></td>
                <td><?= h($comunicacaos->sinopse) ?></td>
                <td><?= h($comunicacaos->parecer_artistico) ?></td>
                <td><?= h($comunicacaos->ficha_tecnica) ?></td>
                <td><?= h($comunicacaos->autor) ?></td>
                <td><?= h($comunicacaos->release_com) ?></td>
                <td><?= h($comunicacaos->filme) ?></td>
                <td><?= h($comunicacaos->revisado) ?></td>
                <td><?= h($comunicacaos->editado) ?></td>
                <td><?= h($comunicacaos->site) ?></td>
                <td><?= h($comunicacaos->publicacao) ?></td>
                <td><?= h($comunicacaos->registro_audio) ?></td>
                <td><?= h($comunicacaos->registro_video) ?></td>
                <td><?= h($comunicacaos->registro_fotografia) ?></td>
                <td><?= h($comunicacaos->evento_id) ?></td>
                <td><?= h($comunicacaos->projeto) ?></td>
                <td><?= h($comunicacaos->nome_evento) ?></td>
                <td><?= h($comunicacaos->observacao) ?></td>
                <td><?= h($comunicacaos->instituicao_id) ?></td>
                <td><?= h($comunicacaos->projeto_especial) ?></td>
                <td><?= h($comunicacaos->foto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Comunicacaos', 'action' => 'view', $comunicacaos->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Comunicacaos', 'action' => 'edit', $comunicacaos->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Comunicacaos', 'action' => 'delete', $comunicacaos->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $comunicacaos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Relacionado com {0}', ['Controle Orcamentos']) ?></h4>
        <?php if (!empty($instituicao->controle_orcamentos)): ?>
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
            <?php foreach ($instituicao->controle_orcamentos as $controleOrcamentos): ?>
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
        <h4><?= __('Relacionado com {0}', ['Eventos']) ?></h4>
        <?php if (!empty($instituicao->eventos)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Nome Evento</th>
                <th>Relacao Juridica Id</th>
                <th>Projeto Especial Id</th>
                <th>Tipo Evento Id</th>
                <th>Sub Evento</th>
                <th>Fiscal Id</th>
                <th>Suplente Id</th>
                <th>Autor</th>
                <th>Ficha Tecnica</th>
                <th>Sinopse</th>
                <th>Release Com</th>
                <th>Faixa Etaria Id</th>
                <th>Links Com</th>
                <th>Produtor Id</th>
                <th>Usuario Id</th>
                <th>Instituicao Id</th>
                <th>Data Envio</th>
                <th>Ocupacao</th>
                <th>Publicado</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($instituicao->eventos as $eventos): ?>
            <tr>
                <td><?= h($eventos->id) ?></td>
                <td><?= h($eventos->nome_evento) ?></td>
                <td><?= h($eventos->relacao_juridica_id) ?></td>
                <td><?= h($eventos->projeto_especial_id) ?></td>
                <td><?= h($eventos->tipo_evento_id) ?></td>
                <td><?= h($eventos->sub_evento) ?></td>
                <td><?= h($eventos->fiscal_id) ?></td>
                <td><?= h($eventos->suplente_id) ?></td>
                <td><?= h($eventos->autor) ?></td>
                <td><?= h($eventos->ficha_tecnica) ?></td>
                <td><?= h($eventos->sinopse) ?></td>
                <td><?= h($eventos->release_com) ?></td>
                <td><?= h($eventos->faixa_etaria_id) ?></td>
                <td><?= h($eventos->links_com) ?></td>
                <td><?= h($eventos->produtor_id) ?></td>
                <td><?= h($eventos->usuario_id) ?></td>
                <td><?= h($eventos->instituicao_id) ?></td>
                <td><?= h($eventos->data_envio) ?></td>
                <td><?= h($eventos->ocupacao) ?></td>
                <td><?= h($eventos->publicado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Eventos', 'action' => 'view', $eventos->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Eventos', 'action' => 'edit', $eventos->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Eventos', 'action' => 'delete', $eventos->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $eventos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Relacionado com {0}', ['Locals']) ?></h4>
        <?php if (!empty($instituicao->locals)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Instituicao Id</th>
                <th>Local</th>
                <th>Rider</th>
                <th>Publicado</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($instituicao->locals as $locals): ?>
            <tr>
                <td><?= h($locals->id) ?></td>
                <td><?= h($locals->instituicao_id) ?></td>
                <td><?= h($locals->local) ?></td>
                <td><?= h($locals->rider) ?></td>
                <td><?= h($locals->publicado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Locals', 'action' => 'view', $locals->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Locals', 'action' => 'edit', $locals->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Locals', 'action' => 'delete', $locals->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $locals->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Relacionado com {0}', ['Pedido Contratacaos']) ?></h4>
        <?php if (!empty($instituicao->pedido_contratacaos)): ?>
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
            <?php foreach ($instituicao->pedido_contratacaos as $pedidoContratacaos): ?>
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
        <h4><?= __('Relacionado com {0}', ['Usuarios']) ?></h4>
        <?php if (!empty($instituicao->usuarios)): ?>
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
            <?php foreach ($instituicao->usuarios as $usuarios): ?>
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
    <div class="related">
        <h4><?= __('Relacionado com {0}', ['Verbas']) ?></h4>
        <?php if (!empty($instituicao->verbas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Verba</th>
                <th>Pai</th>
                <th>Instituicao Id</th>
                <th>Pf</th>
                <th>Pj</th>
                <th>Premio</th>
                <th>Dotacao Orcamentaria</th>
                <th>Multiplo</th>
                <th>Do Pf</th>
                <th>DoPj</th>
                <th>Do Premio</th>
                <th>Detalhamento Acao</th>
                <th>Numero Reserva Pj</th>
                <th>Link Pj</th>
                <th>Numero Reserva Pf</th>
                <th>Link Pf</th>
                <th>Numero Reserva Encargos</th>
                <th>Vocativo</th>
                <th>Setor Vocativo</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($instituicao->verbas as $verbas): ?>
            <tr>
                <td><?= h($verbas->id) ?></td>
                <td><?= h($verbas->verba) ?></td>
                <td><?= h($verbas->pai) ?></td>
                <td><?= h($verbas->instituicao_id) ?></td>
                <td><?= h($verbas->pf) ?></td>
                <td><?= h($verbas->pj) ?></td>
                <td><?= h($verbas->premio) ?></td>
                <td><?= h($verbas->dotacao_orcamentaria) ?></td>
                <td><?= h($verbas->multiplo) ?></td>
                <td><?= h($verbas->do_pf) ?></td>
                <td><?= h($verbas->doPj) ?></td>
                <td><?= h($verbas->do_premio) ?></td>
                <td><?= h($verbas->detalhamento_acao) ?></td>
                <td><?= h($verbas->numero_reserva_pj) ?></td>
                <td><?= h($verbas->link_pj) ?></td>
                <td><?= h($verbas->Numero_reserva_pf) ?></td>
                <td><?= h($verbas->link_pf) ?></td>
                <td><?= h($verbas->numero_reserva_encargos) ?></td>
                <td><?= h($verbas->vocativo) ?></td>
                <td><?= h($verbas->setor_vocativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Verbas', 'action' => 'view', $verbas->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Verbas', 'action' => 'edit', $verbas->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Verbas', 'action' => 'delete', $verbas->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $verbas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Relacionado com {0}', ['Verifica Producaos']) ?></h4>
        <?php if (!empty($instituicao->verifica_producaos)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Evento Id</th>
                <th>Usuario Id</th>
                <th>Instituicao Id</th>
                <th>Status</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($instituicao->verifica_producaos as $verificaProducaos): ?>
            <tr>
                <td><?= h($verificaProducaos->id) ?></td>
                <td><?= h($verificaProducaos->evento_id) ?></td>
                <td><?= h($verificaProducaos->usuario_id) ?></td>
                <td><?= h($verificaProducaos->instituicao_id) ?></td>
                <td><?= h($verificaProducaos->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'VerificaProducaos', 'action' => 'view', $verificaProducaos->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'VerificaProducaos', 'action' => 'edit', $verificaProducaos->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'VerificaProducaos', 'action' => 'delete', $verificaProducaos->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $verificaProducaos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
