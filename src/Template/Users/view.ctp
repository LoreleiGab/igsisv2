<div class="users view col-lg-10 col-md-9">
    <h3><?= h($user->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>User Name</th>
            <td><?= h($user->user_name) ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th>Rf Rg</th>
            <td><?= h($user->rf_rg) ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th>Institution</th>
            <td><?= $user->has('institution') ? $this->Html->link($user->institution->id, ['controller' => 'Institutions', 'action' => 'view', $user->institution->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Group</th>
            <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th>'Contracts</th>
            <td><?= $this->Number->format($user->contracts) ?></td>
        </tr>
        <tr>
            <th>Get Notification</th>
            <td><?= $user->get_notification ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Published</th>
            <td><?= $user->published ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Call Comments']) ?></h4>
        <?php if (!empty($user->call_comments)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Call Id</th>
                <th>User Id</th>
                <th>Date</th>
                <th>Comment</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($user->call_comments as $callComments): ?>
            <tr>
                <td><?= h($callComments->id) ?></td>
                <td><?= h($callComments->call_id) ?></td>
                <td><?= h($callComments->user_id) ?></td>
                <td><?= h($callComments->date) ?></td>
                <td><?= h($callComments->comment) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'CallComments', 'action' => 'view', $callComments->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'CallComments', 'action' => 'edit', $callComments->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'CallComments', 'action' => 'delete', $callComments->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $callComments->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Calls']) ?></h4>
        <?php if (!empty($user->calls)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Type Call Id</th>
                <th>Event Id</th>
                <th>User Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Justification</th>
                <th>Date</th>
                <th>Status</th>
                <th>Note</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($user->calls as $calls): ?>
            <tr>
                <td><?= h($calls->id) ?></td>
                <td><?= h($calls->type_call_id) ?></td>
                <td><?= h($calls->event_id) ?></td>
                <td><?= h($calls->user_id) ?></td>
                <td><?= h($calls->title) ?></td>
                <td><?= h($calls->description) ?></td>
                <td><?= h($calls->justification) ?></td>
                <td><?= h($calls->date) ?></td>
                <td><?= h($calls->status) ?></td>
                <td><?= h($calls->note) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Calls', 'action' => 'view', $calls->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Calls', 'action' => 'edit', $calls->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Calls', 'action' => 'delete', $calls->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $calls->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Check Productions']) ?></h4>
        <?php if (!empty($user->check_productions)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Institution Id</th>
                <th>Status</th>
                <th>User Id</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($user->check_productions as $checkProductions): ?>
            <tr>
                <td><?= h($checkProductions->id) ?></td>
                <td><?= h($checkProductions->event_id) ?></td>
                <td><?= h($checkProductions->institution_id) ?></td>
                <td><?= h($checkProductions->status) ?></td>
                <td><?= h($checkProductions->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'CheckProductions', 'action' => 'view', $checkProductions->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'CheckProductions', 'action' => 'edit', $checkProductions->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'CheckProductions', 'action' => 'delete', $checkProductions->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $checkProductions->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Estimate Controls']) ?></h4>
        <?php if (!empty($user->estimate_controls)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>User Id</th>
                <th>Institution Id</th>
                <th>Fund Id</th>
                <th>Fund Father</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($user->estimate_controls as $estimateControls): ?>
            <tr>
                <td><?= h($estimateControls->id) ?></td>
                <td><?= h($estimateControls->user_id) ?></td>
                <td><?= h($estimateControls->institution_id) ?></td>
                <td><?= h($estimateControls->fund_id) ?></td>
                <td><?= h($estimateControls->fund_father) ?></td>
                <td><?= h($estimateControls->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'EstimateControls', 'action' => 'view', $estimateControls->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'EstimateControls', 'action' => 'edit', $estimateControls->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'EstimateControls', 'action' => 'delete', $estimateControls->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $estimateControls->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Events']) ?></h4>
        <?php if (!empty($user->events)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Juridical Relation Id</th>
                <th>Especial Project Id</th>
                <th>Type Event Id</th>
                <th>Sub Event</th>
                <th>Fiscal Id</th>
                <th>Surrogate Id</th>
                <th>Author</th>
                <th>Technical Form</th>
                <th>Age Group Id</th>
                <th>Synopsis</th>
                <th>Release Communication</th>
                <th>Links</th>
                <th>Producer Id</th>
                <th>User Id</th>
                <th>Institution Id</th>
                <th>Date Send</th>
                <th>Public Target</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($user->events as $events): ?>
            <tr>
                <td><?= h($events->id) ?></td>
                <td><?= h($events->name) ?></td>
                <td><?= h($events->juridical_relation_id) ?></td>
                <td><?= h($events->especial_project_id) ?></td>
                <td><?= h($events->type_event_id) ?></td>
                <td><?= h($events->sub_event) ?></td>
                <td><?= h($events->fiscal_id) ?></td>
                <td><?= h($events->surrogate_id) ?></td>
                <td><?= h($events->author) ?></td>
                <td><?= h($events->technical_form) ?></td>
                <td><?= h($events->age_group_id) ?></td>
                <td><?= h($events->synopsis) ?></td>
                <td><?= h($events->release_communication) ?></td>
                <td><?= h($events->links) ?></td>
                <td><?= h($events->producer_id) ?></td>
                <td><?= h($events->user_id) ?></td>
                <td><?= h($events->institution_id) ?></td>
                <td><?= h($events->date_send) ?></td>
                <td><?= h($events->public_target) ?></td>
                <td><?= h($events->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $events->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Formation Effectives']) ?></h4>
        <?php if (!empty($user->formation_effectives)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Period</th>
                <th>Value</th>
                <th>Description</th>
                <th>Year</th>
                <th>User Id</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($user->formation_effectives as $formationEffectives): ?>
            <tr>
                <td><?= h($formationEffectives->id) ?></td>
                <td><?= h($formationEffectives->period) ?></td>
                <td><?= h($formationEffectives->value) ?></td>
                <td><?= h($formationEffectives->description) ?></td>
                <td><?= h($formationEffectives->year) ?></td>
                <td><?= h($formationEffectives->user_id) ?></td>
                <td><?= h($formationEffectives->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'FormationEffectives', 'action' => 'view', $formationEffectives->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'FormationEffectives', 'action' => 'edit', $formationEffectives->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'FormationEffectives', 'action' => 'delete', $formationEffectives->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $formationEffectives->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Formations']) ?></h4>
        <?php if (!empty($user->formations)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Fisical Person Id</th>
                <th>Post Id</th>
                <th>Effective Id</th>
                <th>Coordination Id</th>
                <th>Program Id</th>
                <th>Language Id</th>
                <th>Project Id</th>
                <th>Local 1 Id</th>
                <th>Local 2 Id</th>
                <th>Local 3 Id</th>
                <th>Year</th>
                <th>Call</th>
                <th>Status</th>
                <th>Ponctuation</th>
                <th>Observation</th>
                <th>Fund</th>
                <th>Payment Process Number</th>
                <th>User Id</th>
                <th>Territory</th>
                <th>Subprefecture</th>
                <th>Fiscal</th>
                <th>Surrogate</th>
                <th>Date Send</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($user->formations as $formations): ?>
            <tr>
                <td><?= h($formations->id) ?></td>
                <td><?= h($formations->fisical_person_id) ?></td>
                <td><?= h($formations->post_id) ?></td>
                <td><?= h($formations->effective_id) ?></td>
                <td><?= h($formations->coordination_id) ?></td>
                <td><?= h($formations->program_id) ?></td>
                <td><?= h($formations->language_id) ?></td>
                <td><?= h($formations->project_id) ?></td>
                <td><?= h($formations->local_1_id) ?></td>
                <td><?= h($formations->local_2_id) ?></td>
                <td><?= h($formations->local_3_id) ?></td>
                <td><?= h($formations->year) ?></td>
                <td><?= h($formations->call) ?></td>
                <td><?= h($formations->status) ?></td>
                <td><?= h($formations->ponctuation) ?></td>
                <td><?= h($formations->observation) ?></td>
                <td><?= h($formations->fund) ?></td>
                <td><?= h($formations->payment_process_number) ?></td>
                <td><?= h($formations->user_id) ?></td>
                <td><?= h($formations->territory) ?></td>
                <td><?= h($formations->subprefecture) ?></td>
                <td><?= h($formations->fiscal) ?></td>
                <td><?= h($formations->surrogate) ?></td>
                <td><?= h($formations->date_send) ?></td>
                <td><?= h($formations->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Formations', 'action' => 'view', $formations->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Formations', 'action' => 'edit', $formations->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Formations', 'action' => 'delete', $formations->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $formations->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Historics']) ?></h4>
        <?php if (!empty($user->historics)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Table</th>
                <th>Field</th>
                <th>Date</th>
                <th>Value</th>
                <th>User Id</th>
                <th>Opening Date</th>
                <th>Ip</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($user->historics as $historics): ?>
            <tr>
                <td><?= h($historics->id) ?></td>
                <td><?= h($historics->event_id) ?></td>
                <td><?= h($historics->table) ?></td>
                <td><?= h($historics->field) ?></td>
                <td><?= h($historics->date) ?></td>
                <td><?= h($historics->value) ?></td>
                <td><?= h($historics->user_id) ?></td>
                <td><?= h($historics->opening_date) ?></td>
                <td><?= h($historics->ip) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Historics', 'action' => 'view', $historics->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Historics', 'action' => 'edit', $historics->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Historics', 'action' => 'delete', $historics->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $historics->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Legal Persons']) ?></h4>
        <?php if (!empty($user->legal_persons)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Company Name</th>
                <th>Cnpj</th>
                <th>Ccm</th>
                <th>Cep</th>
                <th>Phone 1</th>
                <th>Phone 2</th>
                <th>Phone 3</th>
                <th>Email</th>
                <th>Legal Representative 1 Id</th>
                <th>Legal Representative 2 Id</th>
                <th>Bank Id</th>
                <th>Bank Branch</th>
                <th>Account</th>
                <th>Observation</th>
                <th>User Id</th>
                <th>Event Id</th>
                <th>Date Update</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($user->legal_persons as $legalPersons): ?>
            <tr>
                <td><?= h($legalPersons->id) ?></td>
                <td><?= h($legalPersons->company_name) ?></td>
                <td><?= h($legalPersons->cnpj) ?></td>
                <td><?= h($legalPersons->ccm) ?></td>
                <td><?= h($legalPersons->cep) ?></td>
                <td><?= h($legalPersons->phone_1) ?></td>
                <td><?= h($legalPersons->phone_2) ?></td>
                <td><?= h($legalPersons->phone_3) ?></td>
                <td><?= h($legalPersons->email) ?></td>
                <td><?= h($legalPersons->legal_representative_1_id) ?></td>
                <td><?= h($legalPersons->legal_representative_2_id) ?></td>
                <td><?= h($legalPersons->bank_id) ?></td>
                <td><?= h($legalPersons->bank_branch) ?></td>
                <td><?= h($legalPersons->account) ?></td>
                <td><?= h($legalPersons->observation) ?></td>
                <td><?= h($legalPersons->user_id) ?></td>
                <td><?= h($legalPersons->event_id) ?></td>
                <td><?= h($legalPersons->date_update) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'LegalPersons', 'action' => 'view', $legalPersons->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'LegalPersons', 'action' => 'edit', $legalPersons->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'LegalPersons', 'action' => 'delete', $legalPersons->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $legalPersons->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Log Reopenings']) ?></h4>
        <?php if (!empty($user->log_reopenings)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Call Id</th>
                <th>User Id</th>
                <th>Ig Category Id</th>
                <th>Event Id</th>
                <th>Description</th>
                <th>Date</th>
                <th>Ip</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($user->log_reopenings as $logReopenings): ?>
            <tr>
                <td><?= h($logReopenings->id) ?></td>
                <td><?= h($logReopenings->call_id) ?></td>
                <td><?= h($logReopenings->user_id) ?></td>
                <td><?= h($logReopenings->ig_category_id) ?></td>
                <td><?= h($logReopenings->event_id) ?></td>
                <td><?= h($logReopenings->description) ?></td>
                <td><?= h($logReopenings->date) ?></td>
                <td><?= h($logReopenings->ip) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'LogReopenings', 'action' => 'view', $logReopenings->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'LogReopenings', 'action' => 'edit', $logReopenings->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'LogReopenings', 'action' => 'delete', $logReopenings->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $logReopenings->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Logs']) ?></h4>
        <?php if (!empty($user->logs)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>User Id</th>
                <th>Date Log</th>
                <th>Address Ip</th>
                <th>Description</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($user->logs as $logs): ?>
            <tr>
                <td><?= h($logs->id) ?></td>
                <td><?= h($logs->user_id) ?></td>
                <td><?= h($logs->date_log) ?></td>
                <td><?= h($logs->address_ip) ?></td>
                <td><?= h($logs->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Logs', 'action' => 'view', $logs->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Logs', 'action' => 'edit', $logs->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Logs', 'action' => 'delete', $logs->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $logs->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Physical Persons']) ?></h4>
        <?php if (!empty($user->physical_persons)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Artistic Name</th>
                <th>Date Birth</th>
                <th>Type Document Id</th>
                <th>Rg</th>
                <th>Cpf</th>
                <th>Cbo</th>
                <th>Ccm</th>
                <th>Drt</th>
                <th>Nit</th>
                <th>Pis</th>
                <th>Omb</th>
                <th>Function</th>
                <th>Civil Status Id</th>
                <th>Nationality</th>
                <th>Cep</th>
                <th>Phone 1</th>
                <th>Phone 2</th>
                <th>Phone 3</th>
                <th>Email</th>
                <th>Bank Id</th>
                <th>Bank Branch</th>
                <th>Account</th>
                <th>Observation</th>
                <th>Date Update</th>
                <th>Event Id</th>
                <th>User Id</th>
                <th>Physical Personscol</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($user->physical_persons as $physicalPersons): ?>
            <tr>
                <td><?= h($physicalPersons->id) ?></td>
                <td><?= h($physicalPersons->photo) ?></td>
                <td><?= h($physicalPersons->name) ?></td>
                <td><?= h($physicalPersons->artistic_name) ?></td>
                <td><?= h($physicalPersons->date_birth) ?></td>
                <td><?= h($physicalPersons->type_document_id) ?></td>
                <td><?= h($physicalPersons->rg) ?></td>
                <td><?= h($physicalPersons->cpf) ?></td>
                <td><?= h($physicalPersons->cbo) ?></td>
                <td><?= h($physicalPersons->ccm) ?></td>
                <td><?= h($physicalPersons->drt) ?></td>
                <td><?= h($physicalPersons->nit) ?></td>
                <td><?= h($physicalPersons->pis) ?></td>
                <td><?= h($physicalPersons->omb) ?></td>
                <td><?= h($physicalPersons->function) ?></td>
                <td><?= h($physicalPersons->civil_status_id) ?></td>
                <td><?= h($physicalPersons->nationality) ?></td>
                <td><?= h($physicalPersons->cep) ?></td>
                <td><?= h($physicalPersons->phone_1) ?></td>
                <td><?= h($physicalPersons->phone_2) ?></td>
                <td><?= h($physicalPersons->phone_3) ?></td>
                <td><?= h($physicalPersons->email) ?></td>
                <td><?= h($physicalPersons->bank_id) ?></td>
                <td><?= h($physicalPersons->bank_branch) ?></td>
                <td><?= h($physicalPersons->account) ?></td>
                <td><?= h($physicalPersons->observation) ?></td>
                <td><?= h($physicalPersons->date_update) ?></td>
                <td><?= h($physicalPersons->event_id) ?></td>
                <td><?= h($physicalPersons->user_id) ?></td>
                <td><?= h($physicalPersons->physical_personscol) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'PhysicalPersons', 'action' => 'view', $physicalPersons->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'PhysicalPersons', 'action' => 'edit', $physicalPersons->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'PhysicalPersons', 'action' => 'delete', $physicalPersons->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $physicalPersons->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Times']) ?></h4>
        <?php if (!empty($user->times)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>User Id</th>
                <th>Time</th>
                <th>Ip</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($user->times as $times): ?>
            <tr>
                <td><?= h($times->id) ?></td>
                <td><?= h($times->user_id) ?></td>
                <td><?= h($times->time) ?></td>
                <td><?= h($times->ip) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Times', 'action' => 'view', $times->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Times', 'action' => 'edit', $times->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Times', 'action' => 'delete', $times->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $times->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Funds']) ?></h4>
        <?php if (!empty($user->funds)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Fund</th>
                <th>Father</th>
                <th>Institution Id</th>
                <th>Pf</th>
                <th>Pj</th>
                <th>Reward</th>
                <th>Budget Allocation</th>
                <th>Multiple</th>
                <th>Do Pf</th>
                <th>Do Pj</th>
                <th>Do Premium</th>
                <th>Detailing Action</th>
                <th>Number Reserve Pj</th>
                <th>Link Pj</th>
                <th>Number Reserve Pf</th>
                <th>Link Pf</th>
                <th>Number Reserve Charges</th>
                <th>Vocative</th>
                <th>Sector Vocative</th>
                <th>Fundscol</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($user->funds as $funds): ?>
            <tr>
                <td><?= h($funds->id) ?></td>
                <td><?= h($funds->fund) ?></td>
                <td><?= h($funds->father) ?></td>
                <td><?= h($funds->institution_id) ?></td>
                <td><?= h($funds->pf) ?></td>
                <td><?= h($funds->pj) ?></td>
                <td><?= h($funds->reward) ?></td>
                <td><?= h($funds->budget_allocation) ?></td>
                <td><?= h($funds->multiple) ?></td>
                <td><?= h($funds->do_pf) ?></td>
                <td><?= h($funds->do_Pj) ?></td>
                <td><?= h($funds->do_premium) ?></td>
                <td><?= h($funds->detailing_action) ?></td>
                <td><?= h($funds->number_reserve_pj) ?></td>
                <td><?= h($funds->link_pj) ?></td>
                <td><?= h($funds->number_reserve_pf) ?></td>
                <td><?= h($funds->link_pf) ?></td>
                <td><?= h($funds->number_reserve_charges) ?></td>
                <td><?= h($funds->vocative) ?></td>
                <td><?= h($funds->sector_vocative) ?></td>
                <td><?= h($funds->fundscol) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Funds', 'action' => 'view', $funds->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Funds', 'action' => 'edit', $funds->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Funds', 'action' => 'delete', $funds->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $funds->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Locals']) ?></h4>
        <?php if (!empty($user->locals)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Institution Id</th>
                <th>Local</th>
                <th>Rider</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($user->locals as $locals): ?>
            <tr>
                <td><?= h($locals->id) ?></td>
                <td><?= h($locals->institution_id) ?></td>
                <td><?= h($locals->local) ?></td>
                <td><?= h($locals->rider) ?></td>
                <td><?= h($locals->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Locals', 'action' => 'view', $locals->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Locals', 'action' => 'edit', $locals->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Locals', 'action' => 'delete', $locals->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $locals->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
