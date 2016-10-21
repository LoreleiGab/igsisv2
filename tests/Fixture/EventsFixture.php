<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventsFixture
 *
 */
class EventsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 240, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'juridical_relation_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'special_project_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'type_event_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sub_event' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'fiscal_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'surrogate_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'author' => ['type' => 'text', 'length' => 4294967295.0, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'technical_form' => ['type' => 'text', 'length' => 4294967295.0, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'age_group_id' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'synopsis' => ['type' => 'text', 'length' => 4294967295.0, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'release_communication' => ['type' => 'text', 'length' => 4294967295.0, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'links' => ['type' => 'text', 'length' => 4294967295.0, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'producer_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'institution_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date_send' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'public_target' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'published' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_Evento_Tipo_evento_idx' => ['type' => 'index', 'columns' => ['type_event_id'], 'length' => []],
            'fk_Evento_Produtor_idx' => ['type' => 'index', 'columns' => ['producer_id'], 'length' => []],
            'fk_Evento_Usuario_usuario_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'fk_Evento_Modalidade_idx' => ['type' => 'index', 'columns' => ['juridical_relation_id'], 'length' => []],
            'fk_Evento_Instituicao_idx' => ['type' => 'index', 'columns' => ['institution_id'], 'length' => []],
            'fk_Evento_Projeto_especial_idx' => ['type' => 'index', 'columns' => ['special_project_id'], 'length' => []],
            'fk_Evento_Faixa_etaria_idx' => ['type' => 'index', 'columns' => ['age_group_id'], 'length' => []],
            'fk_Evento_Usuario_fiscal_idx' => ['type' => 'index', 'columns' => ['fiscal_id'], 'length' => []],
            'fk_Evento_Usuario_suplente_idx' => ['type' => 'index', 'columns' => ['surrogate_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_Evento_Faixa_etaria' => ['type' => 'foreign', 'columns' => ['age_group_id'], 'references' => ['age_groups', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Evento_Instituicao' => ['type' => 'foreign', 'columns' => ['institution_id'], 'references' => ['institutions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Evento_Produtor' => ['type' => 'foreign', 'columns' => ['producer_id'], 'references' => ['producers', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Evento_Projeto_especial' => ['type' => 'foreign', 'columns' => ['special_project_id'], 'references' => ['special_projects', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Evento_Relacao_juridica' => ['type' => 'foreign', 'columns' => ['juridical_relation_id'], 'references' => ['juridical_relations', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Evento_Tipo_evento' => ['type' => 'foreign', 'columns' => ['type_event_id'], 'references' => ['type_events', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Evento_Usuario_fiscal' => ['type' => 'foreign', 'columns' => ['fiscal_id'], 'references' => ['fiscals', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Evento_Usuario_suplente' => ['type' => 'foreign', 'columns' => ['surrogate_id'], 'references' => ['surrogates', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Evento_Usuario_usuario' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'name' => 'Lorem ipsum dolor sit amet',
            'juridical_relation_id' => 1,
            'special_project_id' => 1,
            'type_event_id' => 1,
            'sub_event' => 1,
            'fiscal_id' => 1,
            'surrogate_id' => 1,
            'author' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'technical_form' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'age_group_id' => 1,
            'synopsis' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'release_communication' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'links' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'producer_id' => 1,
            'user_id' => 1,
            'institution_id' => 1,
            'date_send' => '2016-10-21 14:24:30',
            'public_target' => 'Lorem ipsum dolor sit amet',
            'published' => 1
        ],
    ];
}
