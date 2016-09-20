<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $nome_completo
 * @property string $rf
 * @property string $nome_usuario
 * @property string $senha
 * @property string $telefone
 * @property int $instituicao_id
 * @property string $local
 * @property string $verba
 * @property string $email
 * @property bool $receber_notificacao
 * @property bool $publicado
 * @property int $contratos
 *
 * @property \App\Model\Entity\Instituicao $instituicao
 * @property \App\Model\Entity\ChamadoComentario[] $chamado_comentarios
 * @property \App\Model\Entity\Chamado[] $chamados
 * @property \App\Model\Entity\ControleOrcamento[] $controle_orcamentos
 * @property \App\Model\Entity\Evento[] $eventos
 * @property \App\Model\Entity\FormacaoVigencia[] $formacao_vigencias
 * @property \App\Model\Entity\Formacao[] $formacaos
 * @property \App\Model\Entity\Historico[] $historicos
 * @property \App\Model\Entity\Log[] $logs
 * @property \App\Model\Entity\PessoaFisica[] $pessoa_fisicas
 * @property \App\Model\Entity\PessoaJuridica[] $pessoa_juridicas
 * @property \App\Model\Entity\Time[] $times
 * @property \App\Model\Entity\VerificaProducao[] $verifica_producaos
 * @property \App\Model\Entity\Local[] $locals
 * @property \App\Model\Entity\Modulo[] $modulos
 * @property \App\Model\Entity\Verba[] $verbas
 */
class Usuario extends Entity
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
