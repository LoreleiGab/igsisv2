<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InternalEventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InternalEventsTable Test Case
 */
class InternalEventsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InternalEventsTable
     */
    public $InternalEvents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.internal_events',
        'app.type_events',
        'app.agenda_posters',
        'app.agendas',
        'app.events',
        'app.juridical_relations',
        'app.special_projects',
        'app.institutions',
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
        'app.fiscals',
        'app.surrogates',
        'app.age_groups',
        'app.producers',
        'app.cinemas',
        'app.movie_countries',
        'app.historic_occurrences',
        'app.occurrences',
        'app.information_productions',
        'app.legal_representatives',
        'app.musics',
        'app.services',
        'app.sub_events',
        'app.temp_datas',
        'app.temp_posters',
        'app.theater_dances',
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
        $config = TableRegistry::exists('InternalEvents') ? [] : ['className' => 'App\Model\Table\InternalEventsTable'];
        $this->InternalEvents = TableRegistry::get('InternalEvents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InternalEvents);

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
