<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ModulosUsuariosFixture
 *
 */
class ModulosUsuariosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'usuario_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modulo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_nivel_usuario_idx' => ['type' => 'index', 'columns' => ['usuario_id'], 'length' => []],
            'fk_nivel_modulo_idx' => ['type' => 'index', 'columns' => ['modulo_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['usuario_id', 'modulo_id'], 'length' => []],
            'fk_modulos' => ['type' => 'foreign', 'columns' => ['modulo_id'], 'references' => ['modulos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fkl_usuarios' => ['type' => 'foreign', 'columns' => ['usuario_id'], 'references' => ['usuarios', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'usuario_id' => 1,
            'modulo_id' => 1
        ],
    ];
}
