<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Workshop Entity
 *
 * @property int $id
 * @property int $event_id
 * @property bool $certificate
 * @property int $vacancies
 * @property string $public
 * @property string $material
 * @property string $inscription
 * @property float $value_hour
 * @property bool $sale
 * @property \Cake\I18n\Time $divulgation
 * @property int $workload
 *
 * @property \App\Model\Entity\Event $event
 */
class Workshop extends Entity
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
