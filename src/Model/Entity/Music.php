<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Music Entity
 *
 * @property int $id
 * @property int $event_id
 * @property string $genre
 * @property bool $sale
 * @property string $material
 *
 * @property \App\Model\Entity\Event $event
 */
class Music extends Entity
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
