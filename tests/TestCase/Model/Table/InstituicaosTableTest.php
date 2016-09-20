<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstituicaosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstituicaosTable Test Case
 */
class InstituicaosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InstituicaosTable
     */
    public $Instituicaos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.verbas',
        'app.pedido_contratacaos',
        'app.verba_multiplas',
        'app.usuarios_verbas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Instituicaos') ? [] : ['className' => 'App\Model\Table\InstituicaosTable'];
        $this->Instituicaos = TableRegistry::get('Instituicaos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Instituicaos);

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
