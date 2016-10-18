<div class="users form col-md-10 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= 'Add User' ?></legend>
        <?php
            echo $this->Form->input('user_name');
            echo $this->Form->input('name');
            echo $this->Form->input('rf_rg');
            echo $this->Form->input('password');
            echo $this->Form->input('phone');
            echo $this->Form->input('email');
            echo $this->Form->input('institution_id', ['options' => $institutions]);
            echo $this->Form->input('group_id', ['options' => $groups]);
            echo $this->Form->input('get_notification');
            echo $this->Form->input('contracts');
            echo $this->Form->input('published');
            echo $this->Form->input('funds._ids', ['options' => $funds]);
            echo $this->Form->input('locals._ids', ['options' => $locals]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->end() ?>
</div>
