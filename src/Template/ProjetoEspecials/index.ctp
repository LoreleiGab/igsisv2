<div class="projetoEspecials index col-md-10 columns content">
    <h3>Projetos Especiais</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('projeto_especial') ?></th>
                <th><?= $this->Paginator->sort('idInstituicao') ?></th>
                <th><?= $this->Paginator->sort('publicado') ?></th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetoEspecials as $projetoEspecial): ?>
            <tr>
                <td><?= $this->Number->format($projetoEspecial->id) ?></td>
                <td><?= h($projetoEspecial->projeto_especial) ?></td>
                <td><?= $this->Number->format($projetoEspecial->idInstituicao) ?></td>
                <td><?= $this->Number->format($projetoEspecial->publicado) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $projetoEspecial->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $projetoEspecial->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $projetoEspecial->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $projetoEspecial->id), 'class'=>'btn btn-danger btn-xs']) ?>
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