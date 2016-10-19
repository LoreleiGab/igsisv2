<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $name
 * @property string $rf_rg
 * @property string $password
 * @property string $phone
 * @property string $email
 * @property int $institution_id
 * @property int $group_id
 * @property bool $get_notification
 * @property int $contracts
 * @property bool $published
 *
 * @property \App\Model\Entity\Institution $institution
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\CallComment[] $call_comments
 * @property \App\Model\Entity\Call[] $calls
 * @property \App\Model\Entity\CheckProduction[] $check_productions
 * @property \App\Model\Entity\EstimateControl[] $estimate_controls
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\FormationEffective[] $formation_effectives
 * @property \App\Model\Entity\Formation[] $formations
 * @property \App\Model\Entity\Historic[] $historics
 * @property \App\Model\Entity\LegalPerson[] $legal_persons
 * @property \App\Model\Entity\LogReopening[] $log_reopenings
 * @property \App\Model\Entity\Log[] $logs
 * @property \App\Model\Entity\PhysicalPerson[] $physical_persons
 * @property \App\Model\Entity\Time[] $times
 * @property \App\Model\Entity\Fund[] $funds
 * @property \App\Model\Entity\Local[] $locals
 */
class User extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }        
        
}
