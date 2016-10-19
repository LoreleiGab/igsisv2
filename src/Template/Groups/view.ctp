<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Group']), ['action' => 'edit', $group->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Group']), ['action' => 'delete', $group->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $group->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Groups']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Group']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Permissions']), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Permission']), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groups view col-lg-10 col-md-9">
    <h3><?= h($group->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($group->id) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($group->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($group->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Permissions']) ?></h4>
        <?php if (!empty($group->permissions)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Group Id</th>
                <th>Controller</th>
                <th>Action</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($group->permissions as $permissions): ?>
            <tr>
                <td><?= h($permissions->id) ?></td>
                <td><?= h($permissions->group_id) ?></td>
                <td><?= h($permissions->controller) ?></td>
                <td><?= h($permissions->action) ?></td>
                <td><?= h($permissions->created) ?></td>
                <td><?= h($permissions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Permissions', 'action' => 'view', $permissions->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Permissions', 'action' => 'edit', $permissions->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Permissions', 'action' => 'delete', $permissions->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $permissions->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Users']) ?></h4>
        <?php if (!empty($group->users)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Name</th>
                <th>Rf Rg</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Institution Id</th>
                <th>Group Id</th>
                <th>Get Notification</th>
                <th>Contracts</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($group->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->rf_rg) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->phone) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->institution_id) ?></td>
                <td><?= h($users->group_id) ?></td>
                <td><?= h($users->get_notification) ?></td>
                <td><?= h($users->contracts) ?></td>
                <td><?= h($users->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $users->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
