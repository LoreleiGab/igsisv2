<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InternalEventsFixture
 *
 */
class InternalEventsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 240, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'type_event_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'especial_project_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fiscal_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'surrogate_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'description' => ['type' => 'text', 'length' => 4294967295.0, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'producer_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'information_production_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'published' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_eventoInterno_projetoEspecial_idx' => ['type' => 'index', 'columns' => ['especial_project_id'], 'length' => []],
            'fk_eventoInterno_tipoEvento_idx' => ['type' => 'index', 'columns' => ['type_event_id'], 'length' => []],
            'fk_eventoInterno_Usuario_idx' => ['type' => 'index', 'columns' => ['fiscal_id'], 'length' => []],
            'fk_eventoInterno_UsuarioSuplente_idx' => ['type' => 'index', 'columns' => ['surrogate_id'], 'length' => []],
            'fk_eventoInterno_Produtor_idx' => ['type' => 'index', 'columns' => ['producer_id'], 'length' => []],
            'fk_eventoInterno_informacaoProdutor_idx' => ['type' => 'index', 'columns' => ['information_production_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_eventoInterno_Produtor' => ['type' => 'foreign', 'columns' => ['producer_id'], 'references' => ['producers', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_eventoInterno_UsuarioFiscal' => ['type' => 'foreign', 'columns' => ['fiscal_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_eventoInterno_UsuarioSuplente' => ['type' => 'foreign', 'columns' => ['surrogate_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_eventoInterno_informacaoProdutor' => ['type' => 'foreign', 'columns' => ['information_production_id'], 'references' => ['information_productions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_eventoInterno_projetoEspecial' => ['type' => 'foreign', 'columns' => ['especial_project_id'], 'references' => ['special_projects', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_eventoInterno_tipoEvento' => ['type' => 'foreign', 'columns' => ['type_event_id'], 'references' => ['type_events', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'id' => 1,
            'name' => 'Lorem ipsum dolor sit amet',
            'type_event_id' => 1,
            'especial_project_id' => 1,
            'fiscal_id' => 1,
            'surrogate_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'producer_id' => 1,
            'information_production_id' => 1,
            'published' => 1
        ],
    ];
}
