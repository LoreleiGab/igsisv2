<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fund Entity
 *
 * @property int $id
 * @property string $name
 * @property int $father
 * @property int $institution_id
 * @property float $pf
 * @property float $pj
 * @property float $reward
 * @property string $budget_allocation
 * @property bool $multiple
 * @property int $do_pf
 * @property int $do_Pj
 * @property int $do_premium
 * @property string $detailing_action
 * @property string $number_reserve_pj
 * @property string $link_pj
 * @property string $number_reserve_pf
 * @property string $link_pf
 * @property string $number_reserve_charges
 * @property string $vocative
 * @property string $sector_vocative
 * @property string $fundscol
 *
 * @property \App\Model\Entity\Institution $institution
 * @property \App\Model\Entity\EstimateControl[] $estimate_controls
 * @property \App\Model\Entity\HiringRequest[] $hiring_requests
 * @property \App\Model\Entity\HistoricHiringResquest[] $historic_hiring_resquests
 * @property \App\Model\Entity\User[] $users
 */
class Fund extends Entity
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
