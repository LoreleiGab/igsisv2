<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FiscalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FiscalsTable Test Case
 */
class FiscalsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FiscalsTable
     */
    public $Fiscals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fiscals',
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
        $config = TableRegistry::exists('Fiscals') ? [] : ['className' => 'App\Model\Table\FiscalsTable'];
        $this->Fiscals = TableRegistry::get('Fiscals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fiscals);

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
