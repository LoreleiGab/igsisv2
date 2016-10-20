<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TheaterDancesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TheaterDancesTable Test Case
 */
class TheaterDancesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TheaterDancesTable
     */
    public $TheaterDances;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.theater_dances',
        'app.events',
        'app.juridical_relations',
        'app.special_projects',
        'app.institutions',
        'app.agenda_posters',
        'app.agendas',
        'app.check_productions',
        'app.communications',
        'app.estimate_controls',
        'app.funds',
        'app.hiring_requests',
        'app.locals',
        'app.users',
        'app.groups',
        'app.permissions',
        'app.call_comments',
        'app.calls',
        'app.formation_effectives',
        'app.formations',
        'app.historics',
        'app.legal_persons',
        'app.log_reopenings',
        'app.logs',
        'app.physical_persons',
        'app.times',
        'app.funds_users',
        'app.locals_users',
        'app.weblogs',
        'app.type_events',
        'app.internal_events',
        'app.fiscals',
        'app.surrogates',
        'app.producers',
        'app.information_productions',
        'app.sub_events',
        'app.temp_posters',
        'app.age_groups',
        'app.cinemas',
        'app.movie_countries',
        'app.historic_occurrences',
        'app.occurrences',
        'app.type_occurrences',
        'app.legal_representatives',
        'app.musics',
        'app.services',
        'app.temp_datas',
        'app.upload_events',
        'app.workshops'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TheaterDances') ? [] : ['className' => 'App\Model\Table\TheaterDancesTable'];
        $this->TheaterDances = TableRegistry::get('TheaterDances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TheaterDances);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
