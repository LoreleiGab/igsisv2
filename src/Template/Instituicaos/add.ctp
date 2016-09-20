<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Instituicaos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="instituicaos form col-md-10 columns content">
    <?= $this->Form->create($instituicao) ?>
    <fieldset>
        <legend><?= 'Adiciona Instituição' ?></legend>
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
