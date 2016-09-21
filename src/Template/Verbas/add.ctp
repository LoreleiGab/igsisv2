
<div class="verbas form col-md-10 columns content">
    <?= $this->Form->create($verba) ?>
    <fieldset>
        <legend><?= 'Adicionar Verba' ?></legend>
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
