<div class="usuarios form col-md-10 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= 'Adicionar Usuário' ?></legend>
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
