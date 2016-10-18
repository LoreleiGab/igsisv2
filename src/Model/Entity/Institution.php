<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Institution Entity
 *
 * @property int $id
 * @property string $initials
 * @property string $institution
 * @property int $institution_father
 * @property string $logo
 *
 * @property \App\Model\Entity\AgendaPoster[] $agenda_posters
 * @property \App\Model\Entity\Agenda[] $agendas
 * @property \App\Model\Entity\CheckProduction[] $check_productions
 * @property \App\Model\Entity\Communication[] $communications
 * @property \App\Model\Entity\EstimateControl[] $estimate_controls
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\Fund[] $funds
 * @property \App\Model\Entity\HiringRequest[] $hiring_requests
 * @property \App\Model\Entity\Local[] $locals
 * @property \App\Model\Entity\SpecialProject[] $special_projects
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Weblog[] $weblogs
 */
class Institution extends Entity
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
