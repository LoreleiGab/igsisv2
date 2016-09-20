<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LocalsUsuario Entity
 *
 * @property int $local_id
 * @property int $usuario_id
 *
 * @property \App\Model\Entity\Local $local
 * @property \App\Model\Entity\Usuario $usuario
 */
class LocalsUsuario extends Entity
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
        'local_id' => false,
        'usuario_id' => false
    ];
}
