<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpecialProjectsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpecialProjectsTable Test Case
 */
class SpecialProjectsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SpecialProjectsTable
     */
    public $SpecialProjects;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.special_projects',
        'app.institutions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SpecialProjects') ? [] : ['className' => 'App\Model\Table\SpecialProjectsTable'];
        $this->SpecialProjects = TableRegistry::get('SpecialProjects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SpecialProjects);

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
