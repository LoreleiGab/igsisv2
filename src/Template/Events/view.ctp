<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Ação') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Event']), ['action' => 'edit', $event->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Event']), ['action' => 'delete', $event->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $event->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar {0}', ['Events']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo {0}', ['Event']), ['action' => 'add']) ?> </li>
       
    </ul>
</nav>
<div class="events view col-lg-10 col-md-9">
    <h3><?= h($event->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($event->name) ?></td>
        </tr>
        <tr>
            <th>Juridical Relation</th>
            <td><?= $event->has('juridical_relation') ? $this->Html->link($event->juridical_relation->name, ['controller' => 'JuridicalRelations', 'action' => 'view', $event->juridical_relation->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Type Event</th>
            <td><?= $event->has('type_event') ? $this->Html->link($event->type_event->name, ['controller' => 'TypeEvents', 'action' => 'view', $event->type_event->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Fiscal</th>
            <td><?= $event->has('fiscal') ? $this->Html->link($event->fiscal->name, ['controller' => 'Fiscals', 'action' => 'view', $event->fiscal->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Surrogate</th>
            <td><?= $event->has('surrogate') ? $this->Html->link($event->surrogate->name, ['controller' => 'Surrogates', 'action' => 'view', $event->surrogate->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Age Group</th>
            <td><?= $event->has('age_group') ? $this->Html->link($event->age_group->name, ['controller' => 'AgeGroups', 'action' => 'view', $event->age_group->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Producer</th>
            <td><?= $event->has('producer') ? $this->Html->link($event->producer->name, ['controller' => 'Producers', 'action' => 'view', $event->producer->id]) : '' ?></td>
        </tr>
        <tr>
            <th>User</th>
            <td><?= $event->has('user') ? $this->Html->link($event->user->name, ['controller' => 'Users', 'action' => 'view', $event->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Institution</th>
            <td><?= $event->has('institution') ? $this->Html->link($event->institution->name, ['controller' => 'Institutions', 'action' => 'view', $event->institution->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Public Target</th>
            <td><?= h($event->public_target) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($event->id) ?></td>
        </tr>
        <tr>
            <th>'Especial Project Id</th>
            <td><?= $this->Number->format($event->especial_project_id) ?></td>
        </tr>
        <tr>
            <th>Date Send</th>
            <td><?= h($event->date_send) ?></tr>
        </tr>
        <tr>
            <th>Sub Event</th>
            <td><?= $event->sub_event ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Published</th>
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
        <h4><?= __('Related {0}', ['Agenda Posters']) ?></h4>
        <?php if (!empty($event->agenda_posters)): ?>
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
            <?php foreach ($event->agenda_posters as $agendaPosters): ?>
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
        <?php if (!empty($event->agendas)): ?>
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
            <?php foreach ($event->agendas as $agendas): ?>
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
        <h4><?= __('Related {0}', ['Calls']) ?></h4>
        <?php if (!empty($event->calls)): ?>
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
            <?php foreach ($event->calls as $calls): ?>
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
        <h4><?= __('Related {0}', ['Historic Occurrences']) ?></h4>
        <?php if (!empty($event->historic_occurrences)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Occurrences</th>
                <th>Occurrences Id</th>
                <th>Occurrence Type Id</th>
                <th>Local Id</th>
                <th>Event Id</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
                <th>Start Date</th>
                <th>Final Date</th>
                <th>Start Time</th>
                <th>Final Time</th>
                <th>Timezone</th>
                <th>All Day</th>
                <th>Special Day</th>
                <th>Libras</th>
                <th>Audio Description</th>
                <th>Ticket Value</th>
                <th>Get Ticket</th>
                <th>Local Others</th>
                <th>Capacity</th>
                <th>Reserved</th>
                <th>Duration</th>
                <th>Popular Price</th>
                <th>Frequency</th>
                <th>Sub Event Id</th>
                <th>Cinema Id</th>
                <th>Cultural Turn</th>
                <th>Opening Date</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($event->historic_occurrences as $historicOccurrences): ?>
            <tr>
                <td><?= h($historicOccurrences->occurrences) ?></td>
                <td><?= h($historicOccurrences->occurrences_id) ?></td>
                <td><?= h($historicOccurrences->occurrence_type_id) ?></td>
                <td><?= h($historicOccurrences->local_id) ?></td>
                <td><?= h($historicOccurrences->event_id) ?></td>
                <td><?= h($historicOccurrences->monday) ?></td>
                <td><?= h($historicOccurrences->tuesday) ?></td>
                <td><?= h($historicOccurrences->wednesday) ?></td>
                <td><?= h($historicOccurrences->thursday) ?></td>
                <td><?= h($historicOccurrences->friday) ?></td>
                <td><?= h($historicOccurrences->saturday) ?></td>
                <td><?= h($historicOccurrences->sunday) ?></td>
                <td><?= h($historicOccurrences->start_date) ?></td>
                <td><?= h($historicOccurrences->final_date) ?></td>
                <td><?= h($historicOccurrences->start_time) ?></td>
                <td><?= h($historicOccurrences->final_time) ?></td>
                <td><?= h($historicOccurrences->timezone) ?></td>
                <td><?= h($historicOccurrences->all_day) ?></td>
                <td><?= h($historicOccurrences->special_day) ?></td>
                <td><?= h($historicOccurrences->libras) ?></td>
                <td><?= h($historicOccurrences->audio_description) ?></td>
                <td><?= h($historicOccurrences->ticket_value) ?></td>
                <td><?= h($historicOccurrences->get_ticket) ?></td>
                <td><?= h($historicOccurrences->local_others) ?></td>
                <td><?= h($historicOccurrences->capacity) ?></td>
                <td><?= h($historicOccurrences->reserved) ?></td>
                <td><?= h($historicOccurrences->duration) ?></td>
                <td><?= h($historicOccurrences->popular_price) ?></td>
                <td><?= h($historicOccurrences->frequency) ?></td>
                <td><?= h($historicOccurrences->sub_event_id) ?></td>
                <td><?= h($historicOccurrences->cinema_id) ?></td>
                <td><?= h($historicOccurrences->cultural_turn) ?></td>
                <td><?= h($historicOccurrences->opening_date) ?></td>
                <td><?= h($historicOccurrences->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'HistoricOccurrences', 'action' => 'view', $historicOccurrences->occurrences]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'HistoricOccurrences', 'action' => 'edit', $historicOccurrences->occurrences]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'HistoricOccurrences', 'action' => 'delete', $historicOccurrences->occurrences], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $historicOccurrences->occurrences)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Historics']) ?></h4>
        <?php if (!empty($event->historics)): ?>
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
            <?php foreach ($event->historics as $historics): ?>
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
                <th>Legal Representative</th>
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
                <td><?= h($legalRepresentatives->legal_representative) ?></td>
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
                <th>Id</th>
                <th>Event Id</th>
                <th>Sub Event Id</th>
                <th>Occurrence Type Id</th>
                <th>Date Starter</th>
                <th>Date Final</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
                <th>Duration</th>
                <th>Especial Day</th>
                <th>Audio Description</th>
                <th>Libras</th>
                <th>Start Hour</th>
                <th>Cultural Turn</th>
                <th>Popular Price</th>
                <th>Get Ticket</th>
                <th>Ticket Value</th>
                <th>Local Id</th>
                <th>Local Other</th>
                <th>Reserved</th>
                <th>Capacity</th>
                <th>Timezone</th>
                <th>All Day</th>
                <th>Frequency</th>
                <th>Cinema Id</th>
                <th>Published</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($event->occurrences as $occurrences): ?>
            <tr>
                <td><?= h($occurrences->id) ?></td>
                <td><?= h($occurrences->event_id) ?></td>
                <td><?= h($occurrences->sub_event_id) ?></td>
                <td><?= h($occurrences->occurrence_type_id) ?></td>
                <td><?= h($occurrences->date_starter) ?></td>
                <td><?= h($occurrences->date_final) ?></td>
                <td><?= h($occurrences->monday) ?></td>
                <td><?= h($occurrences->tuesday) ?></td>
                <td><?= h($occurrences->wednesday) ?></td>
                <td><?= h($occurrences->thursday) ?></td>
                <td><?= h($occurrences->friday) ?></td>
                <td><?= h($occurrences->saturday) ?></td>
                <td><?= h($occurrences->sunday) ?></td>
                <td><?= h($occurrences->duration) ?></td>
                <td><?= h($occurrences->especial_day) ?></td>
                <td><?= h($occurrences->audio_description) ?></td>
                <td><?= h($occurrences->libras) ?></td>
                <td><?= h($occurrences->start_hour) ?></td>
                <td><?= h($occurrences->cultural_turn) ?></td>
                <td><?= h($occurrences->popular_price) ?></td>
                <td><?= h($occurrences->get_ticket) ?></td>
                <td><?= h($occurrences->ticket_value) ?></td>
                <td><?= h($occurrences->local_id) ?></td>
                <td><?= h($occurrences->local_other) ?></td>
                <td><?= h($occurrences->reserved) ?></td>
                <td><?= h($occurrences->capacity) ?></td>
                <td><?= h($occurrences->timezone) ?></td>
                <td><?= h($occurrences->all_day) ?></td>
                <td><?= h($occurrences->frequency) ?></td>
                <td><?= h($occurrences->cinema_id) ?></td>
                <td><?= h($occurrences->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Occurrences', 'action' => 'view', $occurrences->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Occurrences', 'action' => 'edit', $occurrences->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Occurrences', 'action' => 'delete', $occurrences->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $occurrences->id)]) ?>

                </td>
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
                <th>Id</th>
                <th>Event Id</th>
                <th>Libras</th>
                <th>Subtitle</th>
                <th>Translation</th>
                <th>Graphics</th>
                <th>Pass</th>
                <th>Audio Description</th>
                <th>Mounting</th>
                <th>Accommodation</th>
                <th>Security</th>
                <th>Transport</th>
                <th>Itinerary</th>
                <th>Company Name</th>
                <th>CpfCnpj</th>
                <th>Bank</th>
                <th>Bank Branch</th>
                <th>Account</th>
                <th>Billing</th>
                <th>Capacity</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($event->services as $services): ?>
            <tr>
                <td><?= h($services->id) ?></td>
                <td><?= h($services->event_id) ?></td>
                <td><?= h($services->libras) ?></td>
                <td><?= h($services->subtitle) ?></td>
                <td><?= h($services->translation) ?></td>
                <td><?= h($services->graphics) ?></td>
                <td><?= h($services->pass) ?></td>
                <td><?= h($services->audio_description) ?></td>
                <td><?= h($services->mounting) ?></td>
                <td><?= h($services->accommodation) ?></td>
                <td><?= h($services->security) ?></td>
                <td><?= h($services->transport) ?></td>
                <td><?= h($services->itinerary) ?></td>
                <td><?= h($services->company_name) ?></td>
                <td><?= h($services->cpfCnpj) ?></td>
                <td><?= h($services->bank) ?></td>
                <td><?= h($services->bank_branch) ?></td>
                <td><?= h($services->account) ?></td>
                <td><?= h($services->billing) ?></td>
                <td><?= h($services->capacity) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Services', 'action' => 'view', $services->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Services', 'action' => 'edit', $services->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Services', 'action' => 'delete', $services->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $services->id)]) ?>

                </td>
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
        <h4><?= __('Related {0}', ['Temp Datas']) ?></h4>
        <?php if (!empty($event->temp_datas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id Temp</th>
                <th>Event Id</th>
                <th>Start Date</th>
                <th>Send Date</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($event->temp_datas as $tempDatas): ?>
            <tr>
                <td><?= h($tempDatas->id_temp) ?></td>
                <td><?= h($tempDatas->event_id) ?></td>
                <td><?= h($tempDatas->start_date) ?></td>
                <td><?= h($tempDatas->send_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'TempDatas', 'action' => 'view', $tempDatas->id_temp]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'TempDatas', 'action' => 'edit', $tempDatas->id_temp]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'TempDatas', 'action' => 'delete', $tempDatas->id_temp], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $tempDatas->id_temp)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Temp Posters']) ?></h4>
        <?php if (!empty($event->temp_posters)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Agenda Posters Id</th>
                <th>Event Id</th>
                <th>Type Event Id</th>
                <th>Special Projects Id</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($event->temp_posters as $tempPosters): ?>
            <tr>
                <td><?= h($tempPosters->agenda_posters_id) ?></td>
                <td><?= h($tempPosters->event_id) ?></td>
                <td><?= h($tempPosters->type_event_id) ?></td>
                <td><?= h($tempPosters->special_projects_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'TempPosters', 'action' => 'view', $tempPosters->agenda_posters_id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'TempPosters', 'action' => 'edit', $tempPosters->agenda_posters_id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'TempPosters', 'action' => 'delete', $tempPosters->agenda_posters_id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $tempPosters->agenda_posters_id)]) ?>

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
