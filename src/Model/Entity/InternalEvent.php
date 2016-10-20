<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InternalEvent Entity
 *
 * @property int $id
 * @property string $name
 * @property int $type_event_id
 * @property int $especial_project_id
 * @property int $fiscal_id
 * @property int $surrogate_id
 * @property string $description
 * @property int $producer_id
 * @property int $information_production_id
 * @property bool $published
 *
 * @property \App\Model\Entity\TypeEvent $type_event
 * @property \App\Model\Entity\SpecialProject $special_project
 * @property \App\Model\Entity\Fiscal $fiscal
 * @property \App\Model\Entity\Surrogate $surrogate
 * @property \App\Model\Entity\Producer $producer
 * @property \App\Model\Entity\InformationProduction $information_production
 */
class InternalEvent extends Entity
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
