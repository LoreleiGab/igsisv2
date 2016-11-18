<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $id
 * @property int $event_id
 * @property string $libras
 * @property string $subtitle
 * @property string $translation
 * @property string $graphics
 * @property string $pass
 * @property string $audio_description
 * @property string $mounting
 * @property string $accommodation
 * @property string $security
 * @property string $transport
 * @property string $itinerary
 * @property string $company_name
 * @property string $cpfCnpj
 * @property string $bank
 * @property string $bank_branch
 * @property string $account
 * @property string $billing
 * @property string $capacity
 *
 * @property \App\Model\Entity\Event $event
 */
class Service extends Entity
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
