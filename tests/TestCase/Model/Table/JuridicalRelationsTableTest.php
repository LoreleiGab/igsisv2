<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JuridicalRelationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JuridicalRelationsTable Test Case
 */
class JuridicalRelationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JuridicalRelationsTable
     */
    public $JuridicalRelations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.juridical_relations',
        'app.events'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('JuridicalRelations') ? [] : ['className' => 'App\Model\Table\JuridicalRelationsTable'];
        $this->JuridicalRelations = TableRegistry::get('JuridicalRelations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JuridicalRelations);

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
