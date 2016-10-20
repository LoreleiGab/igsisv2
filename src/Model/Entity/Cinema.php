<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cinema Entity
 *
 * @property int $id
 * @property int $event_id
 * @property string $title
 * @property string $original_title
 * @property string $direction
 * @property int $movie_country_id
 * @property int $production_year
 * @property string $synopsis
 * @property string $cast
 * @property string $genre
 * @property int $age_rating
 * @property int $minutes
 * @property string $link_trailer
 * @property string $gauge
 * @property bool $published
 *
 * @property \App\Model\Entity\Event $event
 * @property \App\Model\Entity\MovieCountry $movie_country
 * @property \App\Model\Entity\AgendaPoster[] $agenda_posters
 * @property \App\Model\Entity\Agenda[] $agendas
 * @property \App\Model\Entity\HistoricOccurrence[] $historic_occurrences
 * @property \App\Model\Entity\Occurrence[] $occurrences
 */
class Cinema extends Entity
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
