<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Local Entity
 *
 * @property int $id
 * @property int $institution_id
 * @property string $name
 * @property string $rider
 * @property bool $published
 *
 * @property \App\Model\Entity\Institution $institution
 * @property \App\Model\Entity\AgendaPoster[] $agenda_posters
 * @property \App\Model\Entity\Agenda[] $agendas
 * @property \App\Model\Entity\DetailLocal[] $detail_locals
 * @property \App\Model\Entity\HistoricOccurrence[] $historic_occurrences
 * @property \App\Model\Entity\Occurrence[] $occurrences
 * @property \App\Model\Entity\User[] $users
 */
class Local extends Entity
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
