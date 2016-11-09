<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeCallsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeCallsTable Test Case
 */
class TypeCallsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeCallsTable
     */
    public $TypeCalls;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.type_calls',
        'app.calls',
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
        'app.historic_hiring_resquests',
        'app.users',
        'app.groups',
        'app.permissions',
        'app.call_comments',
        'app.formation_effectives',
        'app.formations',
        'app.historics',
        'app.legal_persons',
        'app.log_reopenings',
        'app.logs',
        'app.physical_persons',
        'app.times',
        'app.funds_users',
        'app.locals',
        'app.detail_locals',
        'app.historic_occurrences',
        'app.occurrences',
        'app.sub_events',
        'app.type_events',
        'app.internal_events',
        'app.fiscals',
        'app.surrogates',
        'app.producers',
        'app.information_productions',
        'app.temp_posters',
        'app.type_occurrences',
        'app.cinemas',
        'app.movie_countries',
        'app.locals_users',
        'app.weblogs',
        'app.age_groups',
        'app.legal_representatives',
        'app.musics',
        'app.services',
        'app.temp_datas',
        'app.theater_dances',
        'app.upload_events',
        'app.workshops',
        'app.status',
        'app.status_calls'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TypeCalls') ? [] : ['className' => 'App\Model\Table\TypeCallsTable'];
        $this->TypeCalls = TableRegistry::get('TypeCalls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TypeCalls);

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
}
