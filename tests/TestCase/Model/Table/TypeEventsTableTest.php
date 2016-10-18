<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeEventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeEventsTable Test Case
 */
class TypeEventsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeEventsTable
     */
    public $TypeEvents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.type_events',
        'app.agenda_posters',
        'app.agendas',
        'app.events',
        'app.juridical_relations',
        'app.special_projects',
        'app.institutions',
        'app.users',
        'app.groups',
        'app.permissions',
        'app.call_comments',
        'app.calls',
        'app.check_productions',
        'app.estimate_controls',
        'app.formation_effectives',
        'app.formations',
        'app.historics',
        'app.legal_persons',
        'app.log_reopenings',
        'app.logs',
        'app.physical_persons',
        'app.times',
        'app.funds',
        'app.funds_users',
        'app.locals',
        'app.locals_users',
        'app.age_groups',
        'app.producers',
        'app.cinemas',
        'app.communications',
        'app.historic_occurrences',
        'app.information_productions',
        'app.legal_representatives',
        'app.musics',
        'app.occurrences',
        'app.services',
        'app.sub_events',
        'app.temp_datas',
        'app.temp_posters',
        'app.theater_dances',
        'app.upload_events',
        'app.workshops',
        'app.internal_events'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TypeEvents') ? [] : ['className' => 'App\Model\Table\TypeEventsTable'];
        $this->TypeEvents = TableRegistry::get('TypeEvents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TypeEvents);

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
