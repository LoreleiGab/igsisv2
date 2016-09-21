<div class="instituicaos index col-md-10 columns content">
    <h3>Instituição</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('instituicao','Instituição') ?></th>
                <th><?= $this->Paginator->sort('instituicao_pai','Instituição Pai') ?></th>
                <th><?= $this->Paginator->sort('sigla') ?></th>
                <th><?= $this->Paginator->sort('logo') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($instituicaos as $instituicao): ?>
            <tr>
                <td><?= $this->Number->format($instituicao->id) ?></td>
                <td><?= h($instituicao->instituicao) ?></td>
                <td><?= $this->Number->format($instituicao->instituicao_pai) ?></td>
                <td><?= h($instituicao->sigla) ?></td>
                <td><?= h($instituicao->logo) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $instituicao->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $instituicao->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $instituicao->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $instituicao->id), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('anterior'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('próximo') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registros de um total de
         {{count}}, começando no registro {{start}}, terminando em {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>