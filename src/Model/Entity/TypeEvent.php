<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TypeEvent Entity
 *
 * @property int $id
 * @property string $type_event
 *
 * @property \App\Model\Entity\AgendaPoster[] $agenda_posters
 * @property \App\Model\Entity\Agenda[] $agendas
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\InternalEvent[] $internal_events
 * @property \App\Model\Entity\SubEvent[] $sub_events
 * @property \App\Model\Entity\TempPoster[] $temp_posters
 */
class TypeEvent extends Entity
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
