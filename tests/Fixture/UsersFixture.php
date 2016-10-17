<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 *
 */
class UsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_name' => ['type' => 'string', 'length' => 7, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 120, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'rf_rg' => ['type' => 'string', 'length' => 12, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'phone' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'institution_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'group_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'get_notification' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'contracts' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'published' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_Usuario_Instituicao_idx' => ['type' => 'index', 'columns' => ['institution_id'], 'length' => []],
            'fk_group_idx' => ['type' => 'index', 'columns' => ['group_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'nome_usuario_UNIQUE' => ['type' => 'unique', 'columns' => ['user_name'], 'length' => []],
            'rf_rg_UNIQUE' => ['type' => 'unique', 'columns' => ['rf_rg'], 'length' => []],
            'fk_Usuario_Instituicao' => ['type' => 'foreign', 'columns' => ['institution_id'], 'references' => ['institutions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_group' => ['type' => 'foreign', 'columns' => ['group_id'], 'references' => ['groups', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
            'id' => 1,
            'user_name' => 'Lorem',
            'name' => 'Lorem ipsum dolor sit amet',
            'rf_rg' => 'Lorem ipsu',
            'password' => 'Lorem ipsum dolor sit amet',
            'phone' => 'Lorem ipsum d',
            'email' => 'Lorem ipsum dolor sit amet',
            'institution_id' => 1,
            'group_id' => 1,
            'get_notification' => 1,
            'contracts' => 1,
            'published' => 1
        ],
    ];
}
