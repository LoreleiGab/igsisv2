<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LocalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LocalsTable Test Case
 */
class LocalsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LocalsTable
     */
    public $Locals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.logs',
        'app.pessoa_fisicas',
        'app.pessoa_juridicas',
        'app.times',
        'app.verifica_producaos',
        'app.locals_usuarios',
        'app.modulos',
        'app.modulos_usuarios',
        'app.verbas',
        'app.verba_multiplas',
        'app.usuarios_verbas',
        'app.detalhe_locals',
        'app.historico_ocorrencias',
        'app.ocorrencias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Locals') ? [] : ['className' => 'App\Model\Table\LocalsTable'];
        $this->Locals = TableRegistry::get('Locals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Locals);

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
