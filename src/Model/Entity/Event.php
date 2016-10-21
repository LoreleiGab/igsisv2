<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $name
 * @property int $juridical_relation_id
 * @property int $especial_project_id
 * @property int $type_event_id
 * @property bool $sub_event
 * @property int $fiscal_id
 * @property int $surrogate_id
 * @property string $author
 * @property string $technical_form
 * @property int $age_group_id
 * @property string $synopsis
 * @property string $release_communication
 * @property string $links
 * @property int $producer_id
 * @property int $user_id
 * @property int $institution_id
 * @property \Cake\I18n\Time $date_send
 * @property string $public_target
 * @property bool $published
 *
 * @property \App\Model\Entity\JuridicalRelation $juridical_relation
 * @property \App\Model\Entity\SpecialProject $special_project
 * @property \App\Model\Entity\TypeEvent $type_event
 * @property \App\Model\Entity\Fiscal $fiscal
 * @property \App\Model\Entity\Surrogate $surrogate
 * @property \App\Model\Entity\AgeGroup $age_group
 * @property \App\Model\Entity\Producer $producer
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Institution $institution
 * @property \App\Model\Entity\AgendaPoster[] $agenda_posters
 * @property \App\Model\Entity\Agenda[] $agendas
 * @property \App\Model\Entity\Call[] $calls
 * @property \App\Model\Entity\CheckProduction[] $check_productions
 * @property \App\Model\Entity\Cinema[] $cinemas
 * @property \App\Model\Entity\Communication[] $communications
 * @property \App\Model\Entity\HistoricOccurrence[] $historic_occurrences
 * @property \App\Model\Entity\Historic[] $historics
 * @property \App\Model\Entity\InformationProduction[] $information_productions
 * @property \App\Model\Entity\LegalPerson[] $legal_persons
 * @property \App\Model\Entity\LegalRepresentative[] $legal_representatives
 * @property \App\Model\Entity\LogReopening[] $log_reopenings
 * @property \App\Model\Entity\Music[] $musics
 * @property \App\Model\Entity\Occurrence[] $occurrences
 * @property \App\Model\Entity\PhysicalPerson[] $physical_persons
 * @property \App\Model\Entity\Service[] $services
 * @property \App\Model\Entity\SubEvent[] $sub_events
 * @property \App\Model\Entity\TempData[] $temp_datas
 * @property \App\Model\Entity\TempPoster[] $temp_posters
 * @property \App\Model\Entity\TheaterDance[] $theater_dances
 * @property \App\Model\Entity\UploadEvent[] $upload_events
 * @property \App\Model\Entity\Workshop[] $workshops
 */
class Event extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
