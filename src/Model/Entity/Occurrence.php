<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Occurrence Entity
 *
 * @property int $id
 * @property int $event_id
 * @property int $sub_event_id
 * @property int $occurrence_type_id
 * @property \Cake\I18n\Time $date_starter
 * @property \Cake\I18n\Time $date_final
 * @property bool $monday
 * @property bool $tuesday
 * @property bool $wednesday
 * @property bool $thursday
 * @property bool $friday
 * @property bool $saturday
 * @property bool $sunday
 * @property int $duration
 * @property bool $especial_day
 * @property bool $audio_description
 * @property bool $libras
 * @property \Cake\I18n\Time $start_hour
 * @property bool $cultural_turn
 * @property float $popular_price
 * @property bool $get_ticket
 * @property float $ticket_value
 * @property int $local_id
 * @property string $local_other
 * @property int $reserved
 * @property int $capacity
 * @property int $timezone
 * @property bool $all_day
 * @property string $frequency
 * @property int $cinema_id
 * @property bool $published
 *
 * @property \App\Model\Entity\Event $event
 * @property \App\Model\Entity\SubEvent $sub_event
 * @property \App\Model\Entity\TypeOccurrence $type_occurrence
 * @property \App\Model\Entity\Local $local
 * @property \App\Model\Entity\Cinema $cinema
 */
class Occurrence extends Entity
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
