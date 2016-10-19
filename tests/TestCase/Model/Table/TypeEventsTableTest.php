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
        'app.internal_events',
        'app.sub_events',
        'app.temp_posters'
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
