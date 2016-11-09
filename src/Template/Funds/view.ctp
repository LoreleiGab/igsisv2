<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Fund']), ['action' => 'edit', $fund->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Fund']), ['action' => 'delete', $fund->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $fund->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Funds']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Fund']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Institutions']), ['controller' => 'Institutions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Institution']), ['controller' => 'Institutions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Estimate Controls']), ['controller' => 'EstimateControls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Estimate Control']), ['controller' => 'EstimateControls', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Hiring Requests']), ['controller' => 'HiringRequests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Hiring Request']), ['controller' => 'HiringRequests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Historic Hiring Resquests']), ['controller' => 'HistoricHiringResquests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Historic Hiring Resquest']), ['controller' => 'HistoricHiringResquests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Users']), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['User']), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funds view col-lg-10 col-md-9">
    <h3><?= h($fund->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($fund->name) ?></td>
        </tr>
        <tr>
            <th>Institution</th>
            <td><?= $fund->has('institution') ? $this->Html->link($fund->institution->name, ['controller' => 'Institutions', 'action' => 'view', $fund->institution->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Budget Allocation</th>
            <td><?= h($fund->budget_allocation) ?></td>
        </tr>
        <tr>
            <th>Detailing Action</th>
            <td><?= h($fund->detailing_action) ?></td>
        </tr>
        <tr>
            <th>Number Reserve Pj</th>
            <td><?= h($fund->number_reserve_pj) ?></td>
        </tr>
        <tr>
            <th>Link Pj</th>
            <td><?= h($fund->link_pj) ?></td>
        </tr>
        <tr>
            <th>Number Reserve Pf</th>
            <td><?= h($fund->number_reserve_pf) ?></td>
        </tr>
        <tr>
            <th>Link Pf</th>
            <td><?= h($fund->link_pf) ?></td>
        </tr>
        <tr>
            <th>Number Reserve Charges</th>
            <td><?= h($fund->number_reserve_charges) ?></td>
        </tr>
        <tr>
            <th>Vocative</th>
            <td><?= h($fund->vocative) ?></td>
        </tr>
        <tr>
            <th>Sector Vocative</th>
            <td><?= h($fund->sector_vocative) ?></td>
        </tr>
        <tr>
            <th>Fundscol</th>
            <td><?= h($fund->fundscol) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($fund->id) ?></td>
        </tr>
        <tr>
            <th>'Father</th>
            <td><?= $this->Number->format($fund->father) ?></td>
        </tr>
        <tr>
            <th>'Pf</th>
            <td><?= $this->Number->format($fund->pf) ?></td>
        </tr>
        <tr>
            <th>'Pj</th>
            <td><?= $this->Number->format($fund->pj) ?></td>
        </tr>
        <tr>
            <th>'Reward</th>
            <td><?= $this->Number->format($fund->reward) ?></td>
        </tr>
        <tr>
            <th>'Do Pf</th>
            <td><?= $this->Number->format($fund->do_pf) ?></td>
        </tr>
        <tr>
            <th>'Do Pj</th>
            <td><?= $this->Number->format($fund->do_Pj) ?></td>
        </tr>
        <tr>
            <th>'Do Premium</th>
            <td><?= $this->Number->format($fund->do_premium) ?></td>
        </tr>
        <tr>
            <th>Multiple</th>
            <td><?= $fund->multiple ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Estimate Controls']) ?></h4>
        <?php if (!empty($fund->estimate_controls)): ?>
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
            <?php foreach ($fund->estimate_controls as $estimateControls): ?>
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
        <h4><?= __('Related {0}', ['Hiring Requests']) ?></h4>
        <?php if (!empty($fund->hiring_requests)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Type Modality Hiring</th>
                <th>Modality Hiring Id</th>
                <th>Type Person Id</th>
                <th>Person Id</th>
                <th>Executant Id</th>
                <th>Value</th>
                <th>Form Of Payment</th>
                <th>Quantity Installment</th>
                <th>Fund Id</th>
                <th>Seem Artistic</th>
                <th>Justification</th>
                <th>Observation</th>
                <th>Institution Id</th>
                <th>Process Number</th>
                <th>Number Note Empenho</th>
                <th>Penalties Id</th>
                <th>Date Emission Note Empenho</th>
                <th>Date Delivery Note Empenho</th>
                <th>Contract Operator Id</th>
                <th>Status Id</th>
                <th>Approval Finance</th>
                <th>Support Legal</th>
                <th>Budget Allocation</th>
                <th>Completion</th>
                <th>Date Contract</th>
                <th>Date Proposal</th>
                <th>Date Reserve</th>
                <th>Date Juridical</th>
                <th>Date Publication</th>
                <th>Date Accounting</th>
                <th>Date Payment</th>
                <th>Process Sof</th>
                <th>Extract Liquidation</th>
                <th>Retention INSS</th>
                <th>Retention ISS</th>
                <th>Retention IRRF</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($fund->hiring_requests as $hiringRequests): ?>
            <tr>
                <td><?= h($hiringRequests->id) ?></td>
                <td><?= h($hiringRequests->type_modality_hiring) ?></td>
                <td><?= h($hiringRequests->modality_hiring_id) ?></td>
                <td><?= h($hiringRequests->type_person_id) ?></td>
                <td><?= h($hiringRequests->person_id) ?></td>
                <td><?= h($hiringRequests->executant_id) ?></td>
                <td><?= h($hiringRequests->value) ?></td>
                <td><?= h($hiringRequests->form_of_payment) ?></td>
                <td><?= h($hiringRequests->quantity_installment) ?></td>
                <td><?= h($hiringRequests->fund_id) ?></td>
                <td><?= h($hiringRequests->seem_artistic) ?></td>
                <td><?= h($hiringRequests->justification) ?></td>
                <td><?= h($hiringRequests->observation) ?></td>
                <td><?= h($hiringRequests->institution_id) ?></td>
                <td><?= h($hiringRequests->process_number) ?></td>
                <td><?= h($hiringRequests->number_note_empenho) ?></td>
                <td><?= h($hiringRequests->penalties_id) ?></td>
                <td><?= h($hiringRequests->date_emission_note_empenho) ?></td>
                <td><?= h($hiringRequests->date_delivery_note_empenho) ?></td>
                <td><?= h($hiringRequests->contract_operator_id) ?></td>
                <td><?= h($hiringRequests->status_id) ?></td>
                <td><?= h($hiringRequests->approval_finance) ?></td>
                <td><?= h($hiringRequests->support_legal) ?></td>
                <td><?= h($hiringRequests->budget_allocation) ?></td>
                <td><?= h($hiringRequests->completion) ?></td>
                <td><?= h($hiringRequests->date_contract) ?></td>
                <td><?= h($hiringRequests->date_proposal) ?></td>
                <td><?= h($hiringRequests->date_reserve) ?></td>
                <td><?= h($hiringRequests->date_juridical) ?></td>
                <td><?= h($hiringRequests->date_publication) ?></td>
                <td><?= h($hiringRequests->date_accounting) ?></td>
                <td><?= h($hiringRequests->date_payment) ?></td>
                <td><?= h($hiringRequests->process_sof) ?></td>
                <td><?= h($hiringRequests->extract_liquidation) ?></td>
                <td><?= h($hiringRequests->retention_INSS) ?></td>
                <td><?= h($hiringRequests->retention_ISS) ?></td>
                <td><?= h($hiringRequests->retention_IRRF) ?></td>
                <td><?= h($hiringRequests->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'HiringRequests', 'action' => 'view', $hiringRequests->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'HiringRequests', 'action' => 'edit', $hiringRequests->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'HiringRequests', 'action' => 'delete', $hiringRequests->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $hiringRequests->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Historic Hiring Resquests']) ?></h4>
        <?php if (!empty($fund->historic_hiring_resquests)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Pedido Contratacao Ant Id</th>
                <th>Evento Id</th>
                <th>Type Person</th>
                <th>Representative 1 Id</th>
                <th>Person Id</th>
                <th>Value</th>
                <th>Form Of Payment</th>
                <th>Fund Id</th>
                <th>Attachment</th>
                <th>Observation</th>
                <th>Representative 2 Id</th>
                <th>Institution</th>
                <th>Performer</th>
                <th>Number Note Empenho</th>
                <th>Date Emission Note Empenho</th>
                <th>Date Delivery Note Empenho</th>
                <th>Signature Id</th>
                <th>Performer Id</th>
                <th>Justification</th>
                <th>Seem Artistic</th>
                <th>Status</th>
                <th>Approval Finance</th>
                <th>Installment</th>
                <th>Contract Operator Id</th>
                <th>Detailing Action Id</th>
                <th>Date Proposal</th>
                <th>Date Reserve</th>
                <th>Date Contract</th>
                <th>Support Legal</th>
                <th>Budget Allocation</th>
                <th>Completion</th>
                <th>Penalty Id</th>
                <th>Date Juridical</th>
                <th>Date Publication</th>
                <th>Date Accounting</th>
                <th>Date Payment</th>
                <th>Process Number</th>
                <th>Retention INSS</th>
                <th>Retention ISS</th>
                <th>Retention IRRF</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($fund->historic_hiring_resquests as $historicHiringResquests): ?>
            <tr>
                <td><?= h($historicHiringResquests->id) ?></td>
                <td><?= h($historicHiringResquests->pedido_contratacao_ant_id) ?></td>
                <td><?= h($historicHiringResquests->evento_id) ?></td>
                <td><?= h($historicHiringResquests->type_person) ?></td>
                <td><?= h($historicHiringResquests->representative_1_id) ?></td>
                <td><?= h($historicHiringResquests->person_id) ?></td>
                <td><?= h($historicHiringResquests->value) ?></td>
                <td><?= h($historicHiringResquests->form_of_payment) ?></td>
                <td><?= h($historicHiringResquests->fund_id) ?></td>
                <td><?= h($historicHiringResquests->attachment) ?></td>
                <td><?= h($historicHiringResquests->observation) ?></td>
                <td><?= h($historicHiringResquests->representative_2_id) ?></td>
                <td><?= h($historicHiringResquests->institution) ?></td>
                <td><?= h($historicHiringResquests->performer) ?></td>
                <td><?= h($historicHiringResquests->number_note_empenho) ?></td>
                <td><?= h($historicHiringResquests->date_emission_note_empenho) ?></td>
                <td><?= h($historicHiringResquests->date_delivery_note_empenho) ?></td>
                <td><?= h($historicHiringResquests->signature_id) ?></td>
                <td><?= h($historicHiringResquests->performer_id) ?></td>
                <td><?= h($historicHiringResquests->justification) ?></td>
                <td><?= h($historicHiringResquests->seem_artistic) ?></td>
                <td><?= h($historicHiringResquests->status) ?></td>
                <td><?= h($historicHiringResquests->approval_finance) ?></td>
                <td><?= h($historicHiringResquests->installment) ?></td>
                <td><?= h($historicHiringResquests->contract_operator_id) ?></td>
                <td><?= h($historicHiringResquests->detailing_action_id) ?></td>
                <td><?= h($historicHiringResquests->date_proposal) ?></td>
                <td><?= h($historicHiringResquests->date_reserve) ?></td>
                <td><?= h($historicHiringResquests->date_contract) ?></td>
                <td><?= h($historicHiringResquests->support_legal) ?></td>
                <td><?= h($historicHiringResquests->budget_allocation) ?></td>
                <td><?= h($historicHiringResquests->completion) ?></td>
                <td><?= h($historicHiringResquests->penalty_id) ?></td>
                <td><?= h($historicHiringResquests->date_juridical) ?></td>
                <td><?= h($historicHiringResquests->date_publication) ?></td>
                <td><?= h($historicHiringResquests->date_accounting) ?></td>
                <td><?= h($historicHiringResquests->date_payment) ?></td>
                <td><?= h($historicHiringResquests->process_number) ?></td>
                <td><?= h($historicHiringResquests->retention_INSS) ?></td>
                <td><?= h($historicHiringResquests->retention_ISS) ?></td>
                <td><?= h($historicHiringResquests->retention_IRRF) ?></td>
                <td><?= h($historicHiringResquests->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'HistoricHiringResquests', 'action' => 'view', $historicHiringResquests->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'HistoricHiringResquests', 'action' => 'edit', $historicHiringResquests->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'HistoricHiringResquests', 'action' => 'delete', $historicHiringResquests->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $historicHiringResquests->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Users']) ?></h4>
        <?php if (!empty($fund->users)): ?>
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
            <?php foreach ($fund->users as $users): ?>
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
