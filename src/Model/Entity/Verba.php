<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Verba Entity
 *
 * @property int $id
 * @property string $verba
 * @property int $pai
 * @property int $instituicao_id
 * @property float $pf
 * @property float $pj
 * @property float $premio
 * @property string $dotacao_orcamentaria
 * @property bool $multiplo
 * @property int $do_pf
 * @property int $doPj
 * @property int $do_premio
 * @property string $detalhamento_acao
 * @property string $numero_reserva_pj
 * @property string $link_pj
 * @property string $Numero_reserva_pf
 * @property string $link_pf
 * @property string $numero_reserva_encargos
 * @property string $vocativo
 * @property string $setor_vocativo
 *
 * @property \App\Model\Entity\Instituicao $instituicao
 * @property \App\Model\Entity\ControleOrcamento[] $controle_orcamentos
 * @property \App\Model\Entity\PedidoContratacao[] $pedido_contratacaos
 * @property \App\Model\Entity\VerbaMultipla[] $verba_multiplas
 * @property \App\Model\Entity\Usuario[] $usuarios
 */
class Verba extends Entity
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
