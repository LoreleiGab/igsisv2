<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstitutionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstitutionsTable Test Case
 */
class InstitutionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InstitutionsTable
     */
    public $Institutions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.institutions',
        'app.agenda_posters',
        'app.agendas',
        'app.check_productions',
        'app.communications',
        'app.estimate_controls',
        'app.events',
        'app.juridical_relations',
        'app.special_projects',
        'app.type_events',
        'app.internal_events',
        'app.sub_events',
        'app.temp_posters',
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
        'app.funds',
        'app.funds_users',
        'app.locals',
        'app.locals_users',
        'app.age_groups',
        'app.producers',
        'app.cinemas',
        'app.historic_occurrences',
        'app.information_productions',
        'app.legal_representatives',
        'app.musics',
        'app.occurrences',
        'app.services',
        'app.temp_datas',
        'app.theater_dances',
        'app.upload_events',
        'app.workshops',
        'app.hiring_requests',
        'app.weblogs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Institutions') ? [] : ['className' => 'App\Model\Table\InstitutionsTable'];
        $this->Institutions = TableRegistry::get('Institutions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Institutions);

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
