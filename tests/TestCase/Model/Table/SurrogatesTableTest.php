<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SurrogatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SurrogatesTable Test Case
 */
class SurrogatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SurrogatesTable
     */
    public $Surrogates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.surrogates',
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
        $config = TableRegistry::exists('Surrogates') ? [] : ['className' => 'App\Model\Table\SurrogatesTable'];
        $this->Surrogates = TableRegistry::get('Surrogates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Surrogates);

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
