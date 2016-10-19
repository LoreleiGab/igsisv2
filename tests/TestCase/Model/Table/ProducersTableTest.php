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
