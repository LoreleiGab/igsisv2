<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Local']), ['action' => 'edit', $local->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Local']), ['action' => 'delete', $local->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $local->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Locals']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Local']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Instituicaos']), ['controller' => 'Instituicaos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Instituicao']), ['controller' => 'Instituicaos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Agenda Em Cartazs']), ['controller' => 'AgendaEmCartazs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Agenda Em Cartaz']), ['controller' => 'AgendaEmCartazs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Agendas']), ['controller' => 'Agendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Agenda']), ['controller' => 'Agendas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Detalhe Locals']), ['controller' => 'DetalheLocals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Detalhe Local']), ['controller' => 'DetalheLocals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Historico Ocorrencias']), ['controller' => 'HistoricoOcorrencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Historico Ocorrencia']), ['controller' => 'HistoricoOcorrencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Ocorrencias']), ['controller' => 'Ocorrencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Ocorrencia']), ['controller' => 'Ocorrencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Usuarios']), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Usuario']), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="locals view col-lg-10 col-md-9">
    <h3><?= h($local->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Instituicao</th>
            <td><?= $local->has('instituicao') ? $this->Html->link($local->instituicao->id, ['controller' => 'Instituicaos', 'action' => 'view', $local->instituicao->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Local</th>
            <td><?= h($local->local) ?></td>
        </tr>
        <tr>
            <th>Rider</th>
            <td><?= h($local->rider) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($local->id) ?></td>
        </tr>
        <tr>
            <th>Publicado</th>
            <td><?= $local->publicado ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Agenda Em Cartazs']) ?></h4>
        <?php if (!empty($local->agenda_em_cartazs)): ?>
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
            <?php foreach ($local->agenda_em_cartazs as $agendaEmCartazs): ?>
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
        <h4><?= __('Related {0}', ['Agendas']) ?></h4>
        <?php if (!empty($local->agendas)): ?>
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
            <?php foreach ($local->agendas as $agendas): ?>
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
        <h4><?= __('Related {0}', ['Detalhe Locals']) ?></h4>
        <?php if (!empty($local->detalhe_locals)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Local Id</th>
                <th>Territorio Id</th>
                <th>Regiao Id</th>
                <th>Cep</th>
                <th>Numero</th>
                <th>Complemento</th>
                <th>Link Acesso Mapa</th>
                <th>Telefone1</th>
                <th>Telefone2</th>
                <th>Email</th>
                <th>Categoria Equipamento Id</th>
                <th>IdSubPrefeitura</th>
                <th>Contato</th>
                <th>Telefone 1 Responsavel</th>
                <th>Telefone 2 Responsavel</th>
                <th>Email Responsavel</th>
                <th>Observacao</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($local->detalhe_locals as $detalheLocals): ?>
            <tr>
                <td><?= h($detalheLocals->id) ?></td>
                <td><?= h($detalheLocals->local_id) ?></td>
                <td><?= h($detalheLocals->territorio_id) ?></td>
                <td><?= h($detalheLocals->regiao_id) ?></td>
                <td><?= h($detalheLocals->cep) ?></td>
                <td><?= h($detalheLocals->numero) ?></td>
                <td><?= h($detalheLocals->complemento) ?></td>
                <td><?= h($detalheLocals->link_acesso_mapa) ?></td>
                <td><?= h($detalheLocals->telefone1) ?></td>
                <td><?= h($detalheLocals->telefone2) ?></td>
                <td><?= h($detalheLocals->email) ?></td>
                <td><?= h($detalheLocals->categoria_equipamento_id) ?></td>
                <td><?= h($detalheLocals->idSubPrefeitura) ?></td>
                <td><?= h($detalheLocals->contato) ?></td>
                <td><?= h($detalheLocals->telefone_1_responsavel) ?></td>
                <td><?= h($detalheLocals->telefone_2_responsavel) ?></td>
                <td><?= h($detalheLocals->email_responsavel) ?></td>
                <td><?= h($detalheLocals->observacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'DetalheLocals', 'action' => 'view', $detalheLocals->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'DetalheLocals', 'action' => 'edit', $detalheLocals->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'DetalheLocals', 'action' => 'delete', $detalheLocals->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $detalheLocals->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Historico Ocorrencias']) ?></h4>
        <?php if (!empty($local->historico_ocorrencias)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Ocorrencia</th>
                <th>Ocorrencia Ant Id</th>
                <th>Tipo Ocorrencia Id</th>
                <th>Local Id</th>
                <th>Evento Id</th>
                <th>Segunda</th>
                <th>Terca</th>
                <th>Quarta</th>
                <th>Quinta</th>
                <th>Sexta</th>
                <th>Sabado</th>
                <th>Domingo</th>
                <th>Data Inicio</th>
                <th>Data Final</th>
                <th>Hora Inicio</th>
                <th>Hora Final</th>
                <th>Timezone</th>
                <th>Dia Inteiro</th>
                <th>Dia Especial</th>
                <th>Libras</th>
                <th>Audiodescricao</th>
                <th>Valor Ingresso</th>
                <th>Retirada Ingresso</th>
                <th>Local Outros</th>
                <th>Lotacao</th>
                <th>Reservados</th>
                <th>Duracao</th>
                <th>Preco Popular</th>
                <th>Frequencia</th>
                <th>Publicado</th>
                <th>Sub Evento Id</th>
                <th>Cinema Id</th>
                <th>Virada</th>
                <th>Data Abertura</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($local->historico_ocorrencias as $historicoOcorrencias): ?>
            <tr>
                <td><?= h($historicoOcorrencias->ocorrencia) ?></td>
                <td><?= h($historicoOcorrencias->ocorrencia_ant_id) ?></td>
                <td><?= h($historicoOcorrencias->tipo_ocorrencia_id) ?></td>
                <td><?= h($historicoOcorrencias->local_id) ?></td>
                <td><?= h($historicoOcorrencias->evento_id) ?></td>
                <td><?= h($historicoOcorrencias->segunda) ?></td>
                <td><?= h($historicoOcorrencias->terca) ?></td>
                <td><?= h($historicoOcorrencias->quarta) ?></td>
                <td><?= h($historicoOcorrencias->quinta) ?></td>
                <td><?= h($historicoOcorrencias->sexta) ?></td>
                <td><?= h($historicoOcorrencias->sabado) ?></td>
                <td><?= h($historicoOcorrencias->domingo) ?></td>
                <td><?= h($historicoOcorrencias->data_inicio) ?></td>
                <td><?= h($historicoOcorrencias->data_final) ?></td>
                <td><?= h($historicoOcorrencias->hora_inicio) ?></td>
                <td><?= h($historicoOcorrencias->hora_final) ?></td>
                <td><?= h($historicoOcorrencias->timezone) ?></td>
                <td><?= h($historicoOcorrencias->dia_inteiro) ?></td>
                <td><?= h($historicoOcorrencias->dia_especial) ?></td>
                <td><?= h($historicoOcorrencias->libras) ?></td>
                <td><?= h($historicoOcorrencias->audiodescricao) ?></td>
                <td><?= h($historicoOcorrencias->valor_ingresso) ?></td>
                <td><?= h($historicoOcorrencias->retirada_ingresso) ?></td>
                <td><?= h($historicoOcorrencias->local_outros) ?></td>
                <td><?= h($historicoOcorrencias->lotacao) ?></td>
                <td><?= h($historicoOcorrencias->reservados) ?></td>
                <td><?= h($historicoOcorrencias->duracao) ?></td>
                <td><?= h($historicoOcorrencias->preco_popular) ?></td>
                <td><?= h($historicoOcorrencias->frequencia) ?></td>
                <td><?= h($historicoOcorrencias->publicado) ?></td>
                <td><?= h($historicoOcorrencias->sub_evento_id) ?></td>
                <td><?= h($historicoOcorrencias->cinema_id) ?></td>
                <td><?= h($historicoOcorrencias->virada) ?></td>
                <td><?= h($historicoOcorrencias->data_abertura) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'HistoricoOcorrencias', 'action' => 'view', $historicoOcorrencias->ocorrencia]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'HistoricoOcorrencias', 'action' => 'edit', $historicoOcorrencias->ocorrencia]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'HistoricoOcorrencias', 'action' => 'delete', $historicoOcorrencias->ocorrencia], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $historicoOcorrencias->ocorrencia)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Ocorrencias']) ?></h4>
        <?php if (!empty($local->ocorrencias)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Evento Id</th>
                <th>Sub Evento Id</th>
                <th>Tipo Ocorrencia Id</th>
                <th>Data Inicio</th>
                <th>Data Final</th>
                <th>Segunda</th>
                <th>Terca</th>
                <th>Quarta</th>
                <th>Quinta</th>
                <th>Sexta</th>
                <th>Sabado</th>
                <th>Domingo</th>
                <th>Dia Especial</th>
                <th>Audiodescricao</th>
                <th>Libras</th>
                <th>Preco Popular</th>
                <th>Virada</th>
                <th>Hora Inicio</th>
                <th>Valor Ingresso</th>
                <th>Duracao</th>
                <th>Retirada Ingresso</th>
                <th>Local Id</th>
                <th>Local Outros</th>
                <th>Reservados</th>
                <th>Lotacao</th>
                <th>Timezone</th>
                <th>Dia Inteiro</th>
                <th>Frequencia</th>
                <th>Cinema Id</th>
                <th>Publicado</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($local->ocorrencias as $ocorrencias): ?>
            <tr>
                <td><?= h($ocorrencias->id) ?></td>
                <td><?= h($ocorrencias->evento_id) ?></td>
                <td><?= h($ocorrencias->sub_evento_id) ?></td>
                <td><?= h($ocorrencias->tipo_ocorrencia_id) ?></td>
                <td><?= h($ocorrencias->data_inicio) ?></td>
                <td><?= h($ocorrencias->data_final) ?></td>
                <td><?= h($ocorrencias->segunda) ?></td>
                <td><?= h($ocorrencias->terca) ?></td>
                <td><?= h($ocorrencias->quarta) ?></td>
                <td><?= h($ocorrencias->quinta) ?></td>
                <td><?= h($ocorrencias->sexta) ?></td>
                <td><?= h($ocorrencias->sabado) ?></td>
                <td><?= h($ocorrencias->domingo) ?></td>
                <td><?= h($ocorrencias->dia_especial) ?></td>
                <td><?= h($ocorrencias->audiodescricao) ?></td>
                <td><?= h($ocorrencias->libras) ?></td>
                <td><?= h($ocorrencias->preco_popular) ?></td>
                <td><?= h($ocorrencias->virada) ?></td>
                <td><?= h($ocorrencias->hora_inicio) ?></td>
                <td><?= h($ocorrencias->valor_ingresso) ?></td>
                <td><?= h($ocorrencias->duracao) ?></td>
                <td><?= h($ocorrencias->retirada_ingresso) ?></td>
                <td><?= h($ocorrencias->local_id) ?></td>
                <td><?= h($ocorrencias->local_outros) ?></td>
                <td><?= h($ocorrencias->reservados) ?></td>
                <td><?= h($ocorrencias->lotacao) ?></td>
                <td><?= h($ocorrencias->timezone) ?></td>
                <td><?= h($ocorrencias->dia_inteiro) ?></td>
                <td><?= h($ocorrencias->frequencia) ?></td>
                <td><?= h($ocorrencias->cinema_id) ?></td>
                <td><?= h($ocorrencias->publicado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Ocorrencias', 'action' => 'view', $ocorrencias->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencias->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencias->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $ocorrencias->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Usuarios']) ?></h4>
        <?php if (!empty($local->usuarios)): ?>
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
            <?php foreach ($local->usuarios as $usuarios): ?>
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
