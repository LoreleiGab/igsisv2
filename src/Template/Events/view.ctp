<div class="events view col-lg-10 col-md-9">
    <h3><?= h($event->name) ?></h3>
    <table class="table table-striped table-hover">        
        <tr>
            <th>Código do Evento</th>
            <td><?= $this->Number->format($event->id) ?></td>
        </tr>
		<tr>
            <th><?= __('Name') ?></th>
            <td><?= h($event->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Juridical Relation') ?></th>
            <td><?= $event->has('juridical_relation') ? $this->Html->link($event->juridical_relation->name, ['controller' => 'JuridicalRelations', 'action' => 'view', $event->juridical_relation->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Type Event') ?></th>
            <td><?= $event->has('type_event') ? $this->Html->link($event->type_event->name, ['controller' => 'TypeEvents', 'action' => 'view', $event->type_event->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Fiscal') ?></th>
            <td><?= $event->has('fiscal') ? $this->Html->link($event->fiscal->name, ['controller' => 'Fiscals', 'action' => 'view', $event->fiscal->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Surrogate') ?></th>
            <td><?= $event->has('surrogate') ? $this->Html->link($event->surrogate->name, ['controller' => 'Surrogates', 'action' => 'view', $event->surrogate->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Age Group') ?></th>
            <td><?= $event->has('age_group') ? $this->Html->link($event->age_group->name, ['controller' => 'AgeGroups', 'action' => 'view', $event->age_group->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Producer') ?></th>
            <td><?= $event->has('producer') ? $this->Html->link($event->producer->name, ['controller' => 'Producers', 'action' => 'view', $event->producer->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $event->has('user') ? $this->Html->link($event->user->name, ['controller' => 'Users', 'action' => 'view', $event->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Institution') ?></th>
            <td><?= $event->has('institution') ? $this->Html->link($event->institution->name, ['controller' => 'Institutions', 'action' => 'view', $event->institution->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Public Target') ?></th>
            <td><?= h($event->public_target) ?></td>
        </tr>
        <tr>
            <th><?= __('Special Project') ?></th>
            <td><?= $this->Number->format($event->special_project_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Send') ?></th>
            <td><?= h($event->date_send) ?></tr>
        </tr>
        <tr>
            <th><?= __('Sub Event') ?></th>
            <td><?= $event->sub_event ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Published') ?></th>
            <td><?= $event->published ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="row">
        <h4>Author</h4>
        <?= $this->Text->autoParagraph(h($event->author)); ?>
    </div>
    <div class="row">
        <h4>Technical Form</h4>
        <?= $this->Text->autoParagraph(h($event->technical_form)); ?>
    </div>
    <div class="row">
        <h4>Synopsis</h4>
        <?= $this->Text->autoParagraph(h($event->synopsis)); ?>
    </div>
    <div class="row">
        <h4>Release Communication</h4>
        <?= $this->Text->autoParagraph(h($event->release_communication)); ?>
    </div>
    <div class="row">
        <h4>Links</h4>
        <?= $this->Text->autoParagraph(h($event->links)); ?>
    </div>    
    <div class="related">
        <h4><?= __('Related {0}', ['Check Productions']) ?></h4>
        <?php if (!empty($event->check_productions)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Institution Id</th>
                <th>Status</th>
                <th>User Id</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($event->check_productions as $checkProductions): ?>
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
        <h4><?= __('Related {0}', ['Cinemas']) ?></h4>
        <?php if (!empty($event->cinemas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Title</th>
                <th>Original Title</th>
                <th>Direction</th>
                <th>Movie Country Id</th>
                <th>Production Year</th>
                <th>Synopsis</th>
                <th>Cast</th>
                <th>Genre</th>
                <th>Age Rating</th>
                <th>Minutes</th>
                <th>Link Trailer</th>
                <th>Gauge</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($event->cinemas as $cinemas): ?>
            <tr>
                <td><?= h($cinemas->id) ?></td>
                <td><?= h($cinemas->event_id) ?></td>
                <td><?= h($cinemas->title) ?></td>
                <td><?= h($cinemas->original_title) ?></td>
                <td><?= h($cinemas->direction) ?></td>
                <td><?= h($cinemas->movie_country_id) ?></td>
                <td><?= h($cinemas->production_year) ?></td>
                <td><?= h($cinemas->synopsis) ?></td>
                <td><?= h($cinemas->cast) ?></td>
                <td><?= h($cinemas->genre) ?></td>
                <td><?= h($cinemas->age_rating) ?></td>
                <td><?= h($cinemas->minutes) ?></td>
                <td><?= h($cinemas->link_trailer) ?></td>
                <td><?= h($cinemas->gauge) ?></td>
                <td><?= h($cinemas->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Cinemas', 'action' => 'view', $cinemas->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Cinemas', 'action' => 'edit', $cinemas->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Cinemas', 'action' => 'delete', $cinemas->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $cinemas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Communications']) ?></h4>
        <?php if (!empty($event->communications)): ?>
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
            <?php foreach ($event->communications as $communications): ?>
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
        <h4><?= __('Related {0}', ['Information Productions']) ?></h4>
        <?php if (!empty($event->information_productions)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Team</th>
                <th>Infrastructure</th>
                <th>Registro Audio</th>
                <th>Registro Fotografia</th>
                <th>Registro Video</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($event->information_productions as $informationProductions): ?>
            <tr>
                <td><?= h($informationProductions->id) ?></td>
                <td><?= h($informationProductions->event_id) ?></td>
                <td><?= h($informationProductions->team) ?></td>
                <td><?= h($informationProductions->infrastructure) ?></td>
                <td><?= h($informationProductions->registro_audio) ?></td>
                <td><?= h($informationProductions->registro_fotografia) ?></td>
                <td><?= h($informationProductions->registro_video) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'InformationProductions', 'action' => 'view', $informationProductions->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'InformationProductions', 'action' => 'edit', $informationProductions->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'InformationProductions', 'action' => 'delete', $informationProductions->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $informationProductions->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Legal Persons']) ?></h4>
        <?php if (!empty($event->legal_persons)): ?>
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
            <?php foreach ($event->legal_persons as $legalPersons): ?>
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
        <h4><?= __('Related {0}', ['Legal Representatives']) ?></h4>
        <?php if (!empty($event->legal_representatives)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Name</th>
                <th>Civil Status Id</th>
                <th>Rg</th>
                <th>Cpf</th>
                <th>Nationality</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($event->legal_representatives as $legalRepresentatives): ?>
            <tr>
                <td><?= h($legalRepresentatives->id) ?></td>
                <td><?= h($legalRepresentatives->event_id) ?></td>
                <td><?= h($legalRepresentatives->name) ?></td>
                <td><?= h($legalRepresentatives->civil_status_id) ?></td>
                <td><?= h($legalRepresentatives->rg) ?></td>
                <td><?= h($legalRepresentatives->cpf) ?></td>
                <td><?= h($legalRepresentatives->nationality) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'LegalRepresentatives', 'action' => 'view', $legalRepresentatives->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'LegalRepresentatives', 'action' => 'edit', $legalRepresentatives->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'LegalRepresentatives', 'action' => 'delete', $legalRepresentatives->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $legalRepresentatives->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Log Reopenings']) ?></h4>
        <?php if (!empty($event->log_reopenings)): ?>
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
            <?php foreach ($event->log_reopenings as $logReopenings): ?>
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
        <h4><?= __('Related {0}', ['Musics']) ?></h4>
        <?php if (!empty($event->musics)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Genre</th>
                <th>Sale</th>
                <th>Material</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($event->musics as $musics): ?>
            <tr>
                <td><?= h($musics->id) ?></td>
                <td><?= h($musics->event_id) ?></td>
                <td><?= h($musics->genre) ?></td>
                <td><?= h($musics->sale) ?></td>
                <td><?= h($musics->material) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Musics', 'action' => 'view', $musics->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Musics', 'action' => 'edit', $musics->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Musics', 'action' => 'delete', $musics->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $musics->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Occurrences']) ?></h4>
        <?php if (!empty($event->occurrences)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <!--
				<th>Id</th>
                <th>Event Id</th>
				-->
				<?php foreach ($event->occurrences as $occurrences): ?>
                <th>Sub Event Id: <?= h($occurrences->sub_event_id) ?>
                <br>Occurrence Type Id: <?= h($occurrences->occurrence_type_id) ?>
                <br>Date Starter: <?= h($occurrences->date_starter) ?>
				<br>Date Final: <?= h($occurrences->date_final) ?>
                <br>Monday: <?= h($occurrences->monday) ?>
				<br>Tuesday: <?= h($occurrences->tuesday) ?>
                <br>Wednesday: <?= h($occurrences->wednesday) ?>
                <br>Thursday: <?= h($occurrences->thursday) ?>
                <br>Friday: <?= h($occurrences->friday) ?>
                <br>Saturday: <?= h($occurrences->saturday) ?>
                <br>Sunday: <?= h($occurrences->sunday) ?>
                <br>Duration: <?= h($occurrences->duration) ?>
                <br>Especial Day: <?= h($occurrences->especial_day) ?>
				<br>Audio Description: <?= h($occurrences->audio_description) ?>
				<br>Libras: <?= h($occurrences->libras) ?>
                <br>Start Hour: <?= h($occurrences->start_hour) ?>
				<br>Cultural Turn: <?= h($occurrences->cultural_turn) ?>
				<br>Popular Price: <?= h($occurrences->popular_price) ?>
				<br>Get Ticket: <?= h($occurrences->get_ticket) ?>
				<br>Ticket Value: <?= h($occurrences->ticket_value) ?>
				<br>Local Id: <?= h($occurrences->local_id) ?>
				<br>Local Other: <?= h($occurrences->local_other) ?>
                <br>Reserved: <?= h($occurrences->reserved) ?>
				<br>Capacity: <?= h($occurrences->capacity) ?>
                <br>Timezone: <?= h($occurrences->timezone) ?>
                <br>All Day: <?= h($occurrences->all_day) ?>
                <br>Frequency: <?= h($occurrences->frequency) ?>
                <br>Cinema Id: <?= h($occurrences->cinema_id) ?>
				
				<br><br><br><class="actions"><?= __('Ação') ?>
                <class="actions">
                   <br><?= $this->Html->link(__('Visualizar'), ['controller' => 'Occurrences', 'action' => 'view', $occurrences->id], ['class'=>'btn btn-default btn-xs']) ?>

                   <?= $this->Html->link(__('Editar'), ['controller' => 'Occurrences', 'action' => 'edit', $occurrences->id], ['class'=>'btn btn-primary btn-xs']) ?>

                   <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Occurrences', 'action' => 'delete', $occurrences->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $occurrences->id), 'class'=>'btn btn-danger btn-xs']) ?>
                <!--
				<td><?//= h($occurrences->id) ?></td>
                <td><?//= h($occurrences->event_id) ?></td>
                <td><?//= h($occurrences->published) ?></td>
				-->
				</th>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Physical Persons']) ?></h4>
        <?php if (!empty($event->physical_persons)): ?>
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
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($event->physical_persons as $physicalPersons): ?>
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
        <h4><?= __('Related {0}', ['Services']) ?></h4>
        <?php if (!empty($event->services)): ?>
        <table class="table table-striped table-hover">
            <tr>
				<?php foreach ($event->services as $services): ?>
                <th>Id: <?= h($services->id) ?>
                <br>Event Id: <?= h($services->event_id) ?>
                <br>Libras: <?= h($services->libras) ?>
                <br>Subtitle: <?= h($services->subtitle) ?>
                <br>Translation: <?= h($services->translation) ?>
                <br>Graphics: <?= h($services->graphics) ?>
                <br>Pass: <?= h($services->pass) ?>
                <br>Audio Description: <?= h($services->audio_description) ?>
                <br>Mounting: <?= h($services->mounting) ?>
                <br>Accommodation: <?= h($services->accommodation) ?>
                <br>Security: <?= h($services->security) ?>
                <br>Transport: <?= h($services->transport) ?>
                <br>Itinerary: <?= h($services->itinerary) ?>
                <br>Company Name: <?= h($services->company_name) ?>
                <br>CpfCnpj: <?= h($services->cpfCnpj) ?>
                <br>Bank: <?= h($services->bank) ?>
                <br>Bank Branch: <?= h($services->bank_branch) ?>
                <br>Account: <?= h($services->account) ?>
                <br>Billing: <?= h($services->billing) ?>
                <br>Capacity: <?= h($services->capacity) ?>
                
				<br><br><br><class="actions"><?= __('Ação') ?>
				<class="actions">
                    <br><?= $this->Html->link(__('Visualizar'), ['controller' => 'Services', 'action' => 'view', $services->id], ['class'=>'btn btn-default btn-xs']) ?>

					<?= $this->Html->link(__('Editar'), ['controller' => 'Services', 'action' => 'edit', $services->id], ['class'=>'btn btn-primary btn-xs']) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Services', 'action' => 'delete', $services->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $services->id), 'class'=>'btn btn-danger btn-xs']) ?>
					<br><br>
                </th>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Sub Events']) ?></h4>
        <?php if (!empty($event->sub_events)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Type Event Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($event->sub_events as $subEvents): ?>
            <tr>
                <td><?= h($subEvents->id) ?></td>
                <td><?= h($subEvents->event_id) ?></td>
                <td><?= h($subEvents->type_event_id) ?></td>
                <td><?= h($subEvents->title) ?></td>
                <td><?= h($subEvents->description) ?></td>
                <td><?= h($subEvents->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'SubEvents', 'action' => 'view', $subEvents->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'SubEvents', 'action' => 'edit', $subEvents->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'SubEvents', 'action' => 'delete', $subEvents->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $subEvents->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Theater Dances']) ?></h4>
        <?php if (!empty($event->theater_dances)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Premiere</th>
                <th>Genre</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($event->theater_dances as $theaterDances): ?>
            <tr>
                <td><?= h($theaterDances->id) ?></td>
                <td><?= h($theaterDances->event_id) ?></td>
                <td><?= h($theaterDances->premiere) ?></td>
                <td><?= h($theaterDances->genre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'TheaterDances', 'action' => 'view', $theaterDances->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'TheaterDances', 'action' => 'edit', $theaterDances->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'TheaterDances', 'action' => 'delete', $theaterDances->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $theaterDances->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Upload Events']) ?></h4>
        <?php if (!empty($event->upload_events)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>File</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($event->upload_events as $uploadEvents): ?>
            <tr>
                <td><?= h($uploadEvents->id) ?></td>
                <td><?= h($uploadEvents->event_id) ?></td>
                <td><?= h($uploadEvents->file) ?></td>
                <td><?= h($uploadEvents->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'UploadEvents', 'action' => 'view', $uploadEvents->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'UploadEvents', 'action' => 'edit', $uploadEvents->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'UploadEvents', 'action' => 'delete', $uploadEvents->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $uploadEvents->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Workshops']) ?></h4>
        <?php if (!empty($event->workshops)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Event Id</th>
                <th>Certificate</th>
                <th>Vacancies</th>
                <th>Public</th>
                <th>Material</th>
                <th>Inscription</th>
                <th>Value Hour</th>
                <th>Sale</th>
                <th>Divulgation</th>
                <th>Workload</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($event->workshops as $workshops): ?>
            <tr>
                <td><?= h($workshops->id) ?></td>
                <td><?= h($workshops->event_id) ?></td>
                <td><?= h($workshops->certificate) ?></td>
                <td><?= h($workshops->vacancies) ?></td>
                <td><?= h($workshops->public) ?></td>
                <td><?= h($workshops->material) ?></td>
                <td><?= h($workshops->inscription) ?></td>
                <td><?= h($workshops->value_hour) ?></td>
                <td><?= h($workshops->sale) ?></td>
                <td><?= h($workshops->divulgation) ?></td>
                <td><?= h($workshops->workload) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Workshops', 'action' => 'view', $workshops->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Workshops', 'action' => 'edit', $workshops->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Workshops', 'action' => 'delete', $workshops->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $workshops->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
