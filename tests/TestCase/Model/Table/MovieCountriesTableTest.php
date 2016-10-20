<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MovieCountriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MovieCountriesTable Test Case
 */
class MovieCountriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MovieCountriesTable
     */
    public $MovieCountries;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('MovieCountries') ? [] : ['className' => 'App\Model\Table\MovieCountriesTable'];
        $this->MovieCountries = TableRegistry::get('MovieCountries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MovieCountries);

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
