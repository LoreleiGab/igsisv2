<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Local Entity
 *
 * @property int $id
 * @property int $instituicao_id
 * @property string $local
 * @property string $rider
 * @property bool $publicado
 *
 * @property \App\Model\Entity\Instituicao $instituicao
 * @property \App\Model\Entity\AgendaEmCartaz[] $agenda_em_cartazs
 * @property \App\Model\Entity\Agenda[] $agendas
 * @property \App\Model\Entity\DetalheLocal[] $detalhe_locals
 * @property \App\Model\Entity\HistoricoOcorrencia[] $historico_ocorrencias
 * @property \App\Model\Entity\Ocorrencia[] $ocorrencias
 * @property \App\Model\Entity\Usuario[] $usuarios
 */
class Local extends Entity
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
