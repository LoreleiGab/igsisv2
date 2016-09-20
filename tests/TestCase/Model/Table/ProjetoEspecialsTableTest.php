<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetoEspecialsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetoEspecialsTable Test Case
 */
class ProjetoEspecialsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetoEspecialsTable
     */
    public $ProjetoEspecials;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.projeto_especials',
        'app.evento_internos',
        'app.eventos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProjetoEspecials') ? [] : ['className' => 'App\Model\Table\ProjetoEspecialsTable'];
        $this->ProjetoEspecials = TableRegistry::get('ProjetoEspecials', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjetoEspecials);

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
