<div class="users form">
<?= $this->Flash->render('auth') ?>    
    <?= $this->Form->create() ?>
    <fieldset>
	    <h1><strong><?= ('IGSIS - SMC') ?></strong></h1>
		<p>&nbsp;</p>
 		<h4><?= ('Insira seu nome de usuário e senha') ?></h4>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
	<hr>
 	<p>Dúvidas? Envie e-mail para: <a href="mailto:sistema.igsis@gmail.com">sistema.igsis@gmail.com</a></p>
 	<p>Saiba mais sobre "Fluxo SEI na SMC" : <a href="sei.smc.adm.br">sei.smc.adm.br</a></p>
</div>
