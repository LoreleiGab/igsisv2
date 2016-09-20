<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Instituicao Entity
 *
 * @property int $id
 * @property string $instituicao
 * @property int $instituicao_pai
 * @property string $sigla
 * @property string $logo
 *
 * @property \App\Model\Entity\AgendaEmCartaz[] $agenda_em_cartazs
 * @property \App\Model\Entity\Agenda[] $agendas
 * @property \App\Model\Entity\Comunicacao[] $comunicacaos
 * @property \App\Model\Entity\ControleOrcamento[] $controle_orcamentos
 * @property \App\Model\Entity\Evento[] $eventos
 * @property \App\Model\Entity\Local[] $locals
 * @property \App\Model\Entity\PedidoContratacao[] $pedido_contratacaos
 * @property \App\Model\Entity\Usuario[] $usuarios
 * @property \App\Model\Entity\Verba[] $verbas
 * @property \App\Model\Entity\VerificaProducao[] $verifica_producaos
 */
class Instituicao extends Entity
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
