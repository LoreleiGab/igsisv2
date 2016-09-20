<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LocalsUsuariosFixture
 *
 */
class LocalsUsuariosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'local_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'usuario_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_locais_idx' => ['type' => 'index', 'columns' => ['local_id'], 'length' => []],
            'fk_usuarios_idx' => ['type' => 'index', 'columns' => ['usuario_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['local_id', 'usuario_id'], 'length' => []],
            'fk_locais' => ['type' => 'foreign', 'columns' => ['local_id'], 'references' => ['locals', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_usuarios' => ['type' => 'foreign', 'columns' => ['usuario_id'], 'references' => ['usuarios', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'local_id' => 1,
            'usuario_id' => 1
        ],
    ];
}
