<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Call Entity
 *
 * @property int $id
 * @property int $type_call_id
 * @property int $event_id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property string $justification
 * @property \Cake\I18n\Time $date
 * @property string $note
 *
 * @property \App\Model\Entity\Status[] $status
 * @property \App\Model\Entity\TypeCall $type_call
 * @property \App\Model\Entity\Event $event
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\CallComment[] $call_comments
 * @property \App\Model\Entity\LogReopening[] $log_reopenings
 */
class Call extends Entity
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
