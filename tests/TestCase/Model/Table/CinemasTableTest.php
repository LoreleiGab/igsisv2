<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CinemasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CinemasTable Test Case
 */
class CinemasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CinemasTable
     */
    public $Cinemas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cinemas',
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
        'app.historic_occurrences',
        'app.occurrences',
        'app.type_occurrences',
        'app.temp_posters',
        'app.age_groups',
        'app.legal_representatives',
        'app.musics',
        'app.services',
        'app.temp_datas',
        'app.theater_dances',
        'app.upload_events',
        'app.workshops',
        'app.movie_countries'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cinemas') ? [] : ['className' => 'App\Model\Table\CinemasTable'];
        $this->Cinemas = TableRegistry::get('Cinemas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cinemas);

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
