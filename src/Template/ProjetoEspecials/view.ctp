<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Projeto Especial']), ['action' => 'edit', $projetoEspecial->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Projeto Especial']), ['action' => 'delete', $projetoEspecial->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $projetoEspecial->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Projeto Especials']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Projeto Especial']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Evento Internos']), ['controller' => 'EventoInternos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Evento Interno']), ['controller' => 'EventoInternos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Eventos']), ['controller' => 'Eventos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Evento']), ['controller' => 'Eventos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetoEspecials view col-lg-10 col-md-9">
    <h3><?= h($projetoEspecial->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Projeto Especial</th>
            <td><?= h($projetoEspecial->projeto_especial) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($projetoEspecial->id) ?></td>
        </tr>
        <tr>
            <th>'IdInstituicao</th>
            <td><?= $this->Number->format($projetoEspecial->idInstituicao) ?></td>
        </tr>
        <tr>
            <th>'Publicado</th>
            <td><?= $this->Number->format($projetoEspecial->publicado) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Evento Internos']) ?></h4>
        <?php if (!empty($projetoEspecial->evento_internos)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Nome Evento</th>
                <th>Projeto Especial Id</th>
                <th>Tipo Evento Id</th>
                <th>Fiscal Id</th>
                <th>Suplente Id</th>
                <th>Descricao</th>
                <th>Produtor Id</th>
                <th>Informacao Producao Id</th>
                <th>Publicado</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($projetoEspecial->evento_internos as $eventoInternos): ?>
            <tr>
                <td><?= h($eventoInternos->id) ?></td>
                <td><?= h($eventoInternos->nome_evento) ?></td>
                <td><?= h($eventoInternos->projeto_especial_id) ?></td>
                <td><?= h($eventoInternos->tipo_evento_id) ?></td>
                <td><?= h($eventoInternos->fiscal_id) ?></td>
                <td><?= h($eventoInternos->suplente_id) ?></td>
                <td><?= h($eventoInternos->descricao) ?></td>
                <td><?= h($eventoInternos->produtor_id) ?></td>
                <td><?= h($eventoInternos->informacao_producao_id) ?></td>
                <td><?= h($eventoInternos->publicado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'EventoInternos', 'action' => 'view', $eventoInternos->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'EventoInternos', 'action' => 'edit', $eventoInternos->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'EventoInternos', 'action' => 'delete', $eventoInternos->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $eventoInternos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Eventos']) ?></h4>
        <?php if (!empty($projetoEspecial->eventos)): ?>
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
            <?php foreach ($projetoEspecial->eventos as $eventos): ?>
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
</div>
