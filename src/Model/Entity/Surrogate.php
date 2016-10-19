<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Surrogate Entity
 *
 * @property int $id
 * @property string $name
 * @property string $rf
 *
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\InternalEvent[] $internal_events
 */
class Surrogate extends Entity
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
