<div class="institutions view col-lg-10 col-md-9">
    <h3><?= h($institution->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Initials</th>
            <td><?= h($institution->initials) ?></td>
        </tr>
        <tr>
            <th>Institution</th>
            <td><?= h($institution->institution) ?></td>
        </tr>
        <tr>
            <th>Logo</th>
            <td><?= h($institution->logo) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($institution->id) ?></td>
        </tr>
        <tr>
            <th>'Institution Father</th>
            <td><?= $this->Number->format($institution->institution_father) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Agenda Posters']) ?></h4>
        <?php if (!empty($institution->agenda_posters)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Name Event</th>
                <th>Type Event Id</th>
                <th>Type Event</th>
                <th>Institution Id</th>
                <th>Local Id</th>
                <th>Occurrences Id</th>
                <th>Date</th>
                <th>Hour</th>
                <th>Cinema Id</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($institution->agenda_posters as $agendaPosters): ?>
            <tr>
                <td><?= h($agendaPosters->id) ?></td>
                <td><?= h($agendaPosters->event_id) ?></td>
                <td><?= h($agendaPosters->name_event) ?></td>
                <td><?= h($agendaPosters->type_event_id) ?></td>
                <td><?= h($agendaPosters->type_event) ?></td>
                <td><?= h($agendaPosters->institution_id) ?></td>
                <td><?= h($agendaPosters->local_id) ?></td>
                <td><?= h($agendaPosters->occurrences_id) ?></td>
                <td><?= h($agendaPosters->date) ?></td>
                <td><?= h($agendaPosters->hour) ?></td>
                <td><?= h($agendaPosters->cinema_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'AgendaPosters', 'action' => 'view', $agendaPosters->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'AgendaPosters', 'action' => 'edit', $agendaPosters->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'AgendaPosters', 'action' => 'delete', $agendaPosters->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $agendaPosters->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Agendas']) ?></h4>
        <?php if (!empty($institution->agendas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Type Event Id</th>
                <th>Occurrences Id</th>
                <th>Institution Id</th>
                <th>Local Id</th>
                <th>Date</th>
                <th>Hour</th>
                <th>Cinema Id</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($institution->agendas as $agendas): ?>
            <tr>
                <td><?= h($agendas->id) ?></td>
                <td><?= h($agendas->event_id) ?></td>
                <td><?= h($agendas->type_event_id) ?></td>
                <td><?= h($agendas->occurrences_id) ?></td>
                <td><?= h($agendas->institution_id) ?></td>
                <td><?= h($agendas->local_id) ?></td>
                <td><?= h($agendas->date) ?></td>
                <td><?= h($agendas->hour) ?></td>
                <td><?= h($agendas->cinema_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Agendas', 'action' => 'view', $agendas->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Agendas', 'action' => 'edit', $agendas->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Agendas', 'action' => 'delete', $agendas->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $agendas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Check Productions']) ?></h4>
        <?php if (!empty($institution->check_productions)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Institution Id</th>
                <th>Status</th>
                <th>User Id</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($institution->check_productions as $checkProductions): ?>
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
        <h4><?= __('Related {0}', ['Communications']) ?></h4>
        <?php if (!empty($institution->communications)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Name Event</th>
                <th>Special Project</th>
                <th>Project</th>
                <th>Institution Id</th>
                <th>Synopsis</th>
                <th>Author</th>
                <th>Technical Form</th>
                <th>Seem Artistic</th>
                <th>Release Communication</th>
                <th>Movie</th>
                <th>Edited</th>
                <th>Reviewed</th>
                <th>Site</th>
                <th>Record Audio</th>
                <th>Record Video</th>
                <th>Record Photography</th>
                <th>Observation</th>
                <th>Photo</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($institution->communications as $communications): ?>
            <tr>
                <td><?= h($communications->id) ?></td>
                <td><?= h($communications->event_id) ?></td>
                <td><?= h($communications->name_event) ?></td>
                <td><?= h($communications->special_project) ?></td>
                <td><?= h($communications->project) ?></td>
                <td><?= h($communications->institution_id) ?></td>
                <td><?= h($communications->synopsis) ?></td>
                <td><?= h($communications->author) ?></td>
                <td><?= h($communications->technical_form) ?></td>
                <td><?= h($communications->seem_artistic) ?></td>
                <td><?= h($communications->release_communication) ?></td>
                <td><?= h($communications->movie) ?></td>
                <td><?= h($communications->edited) ?></td>
                <td><?= h($communications->reviewed) ?></td>
                <td><?= h($communications->site) ?></td>
                <td><?= h($communications->record_audio) ?></td>
                <td><?= h($communications->record_video) ?></td>
                <td><?= h($communications->record_photography) ?></td>
                <td><?= h($communications->observation) ?></td>
                <td><?= h($communications->photo) ?></td>
                <td><?= h($communications->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Communications', 'action' => 'view', $communications->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Communications', 'action' => 'edit', $communications->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Communications', 'action' => 'delete', $communications->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $communications->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Estimate Controls']) ?></h4>
        <?php if (!empty($institution->estimate_controls)): ?>
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
            <?php foreach ($institution->estimate_controls as $estimateControls): ?>
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
        <?php if (!empty($institution->events)): ?>
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
            <?php foreach ($institution->events as $events): ?>
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
        <h4><?= __('Related {0}', ['Funds']) ?></h4>
        <?php if (!empty($institution->funds)): ?>
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
            <?php foreach ($institution->funds as $funds): ?>
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
        <h4><?= __('Related {0}', ['Hiring Requests']) ?></h4>
        <?php if (!empty($institution->hiring_requests)): ?>
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
            <?php foreach ($institution->hiring_requests as $hiringRequests): ?>
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
        <h4><?= __('Related {0}', ['Locals']) ?></h4>
        <?php if (!empty($institution->locals)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Institution Id</th>
                <th>Local</th>
                <th>Rider</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($institution->locals as $locals): ?>
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
    <div class="related">
        <h4><?= __('Related {0}', ['Special Projects']) ?></h4>
        <?php if (!empty($institution->special_projects)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Institution Id</th>
                <th>Especial Project</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($institution->special_projects as $specialProjects): ?>
            <tr>
                <td><?= h($specialProjects->id) ?></td>
                <td><?= h($specialProjects->institution_id) ?></td>
                <td><?= h($specialProjects->especial_project) ?></td>
                <td><?= h($specialProjects->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'SpecialProjects', 'action' => 'view', $specialProjects->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'SpecialProjects', 'action' => 'edit', $specialProjects->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'SpecialProjects', 'action' => 'delete', $specialProjects->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $specialProjects->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Users']) ?></h4>
        <?php if (!empty($institution->users)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>User Name</th>
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
            <?php foreach ($institution->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->user_name) ?></td>
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
    <div class="related">
        <h4><?= __('Related {0}', ['Weblogs']) ?></h4>
        <?php if (!empty($institution->weblogs)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id Inicio</th>
                <th>Institution Id</th>
                <th>Title</th>
                <th>Message</th>
                <th>Date</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($institution->weblogs as $weblogs): ?>
            <tr>
                <td><?= h($weblogs->id_inicio) ?></td>
                <td><?= h($weblogs->institution_id) ?></td>
                <td><?= h($weblogs->title) ?></td>
                <td><?= h($weblogs->message) ?></td>
                <td><?= h($weblogs->date) ?></td>
                <td><?= h($weblogs->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Weblogs', 'action' => 'view', $weblogs->id_inicio]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Weblogs', 'action' => 'edit', $weblogs->id_inicio]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Weblogs', 'action' => 'delete', $weblogs->id_inicio], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $weblogs->id_inicio)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
