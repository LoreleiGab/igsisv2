<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeOccurrencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeOccurrencesTable Test Case
 */
class TypeOccurrencesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeOccurrencesTable
     */
    public $TypeOccurrences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.type_occurrences'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TypeOccurrences') ? [] : ['className' => 'App\Model\Table\TypeOccurrencesTable'];
        $this->TypeOccurrences = TableRegistry::get('TypeOccurrences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TypeOccurrences);

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
