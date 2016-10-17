<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GroupsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GroupsTable Test Case
 */
class GroupsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GroupsTable
     */
    public $Groups;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.groups',
        'app.permissions',
        'app.users',
        'app.institutions',
        'app.call_comments',
        'app.calls',
        'app.check_productions',
        'app.estimate_controls',
        'app.events',
        'app.formation_effectives',
        'app.formations',
        'app.historics',
        'app.legal_persons',
        'app.log_reopenings',
        'app.logs',
        'app.physical_persons',
        'app.times',
        'app.funds',
        'app.funds_users',
        'app.locals',
        'app.instituicaos',
        'app.agenda_em_cartazs',
        'app.agendas',
        'app.comunicacaos',
        'app.controle_orcamentos',
        'app.eventos',
        'app.pedido_contratacaos',
        'app.usuarios',
        'app.chamado_comentarios',
        'app.chamados',
        'app.formacao_vigencias',
        'app.formacaos',
        'app.historicos',
        'app.pessoa_fisicas',
        'app.pessoa_juridicas',
        'app.verifica_producaos',
        'app.locals_usuarios',
        'app.modulos',
        'app.modulos_usuarios',
        'app.verbas',
        'app.verba_multiplas',
        'app.usuarios_verbas',
        'app.detalhe_locals',
        'app.historico_ocorrencias',
        'app.ocorrencias',
        'app.locals_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Groups') ? [] : ['className' => 'App\Model\Table\GroupsTable'];
        $this->Groups = TableRegistry::get('Groups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Groups);

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
