<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProjetoEspecialsFixture
 *
 */
class ProjetoEspecialsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'projeto_especial' => ['type' => 'string', 'length' => 120, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'idInstituicao' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'publicado' => ['type' => 'integer', 'length' => 4, 'unsigned' => true, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Projeto_especial_Instituicao_idx' => ['type' => 'index', 'columns' => ['idInstituicao'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'projeto_especial_UNIQUE' => ['type' => 'unique', 'columns' => ['projeto_especial'], 'length' => []],
            'fk_Projeto_especial_Instituicao' => ['type' => 'foreign', 'columns' => ['idInstituicao'], 'references' => ['instituicaos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'projeto_especial' => 'Lorem ipsum dolor sit amet',
            'idInstituicao' => 1,
            'publicado' => 1
        ],
    ];
}
