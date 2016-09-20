<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VerbasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VerbasTable Test Case
 */
class VerbasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VerbasTable
     */
    public $Verbas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.verbas',
        'app.instituicaos',
        'app.agenda_em_cartazs',
        'app.agendas',
        'app.comunicacaos',
        'app.controle_orcamentos',
        'app.eventos',
        'app.locals',
        'app.detalhe_locals',
        'app.historico_ocorrencias',
        'app.ocorrencias',
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
        'app.usuarios_verbas',
        'app.pedido_contratacaos',
        'app.verba_multiplas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Verbas') ? [] : ['className' => 'App\Model\Table\VerbasTable'];
        $this->Verbas = TableRegistry::get('Verbas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Verbas);

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
