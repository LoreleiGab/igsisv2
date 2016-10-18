<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProducersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProducersTable Test Case
 */
class ProducersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProducersTable
     */
    public $Producers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.producers',
        'app.events',
        'app.juridical_relations',
        'app.special_projects',
        'app.institutions',
        'app.type_events',
        'app.agenda_posters',
        'app.agendas',
        'app.internal_events',
        'app.sub_events',
        'app.temp_posters',
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
        'app.cinemas',
        'app.communications',
        'app.historic_occurrences',
        'app.information_productions',
        'app.legal_representatives',
        'app.musics',
        'app.occurrences',
        'app.services',
        'app.temp_datas',
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
        $config = TableRegistry::exists('Producers') ? [] : ['className' => 'App\Model\Table\ProducersTable'];
        $this->Producers = TableRegistry::get('Producers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Producers);

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
