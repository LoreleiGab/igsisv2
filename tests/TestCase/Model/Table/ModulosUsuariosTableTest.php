<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModulosUsuariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModulosUsuariosTable Test Case
 */
class ModulosUsuariosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ModulosUsuariosTable
     */
    public $ModulosUsuarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.modulos_usuarios',
        'app.usuarios',
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
        'app.locals_usuarios',
        'app.pedido_contratacaos',
        'app.verbas',
        'app.verba_multiplas',
        'app.usuarios_verbas',
        'app.verifica_producaos',
        'app.chamado_comentarios',
        'app.chamados',
        'app.formacao_vigencias',
        'app.formacaos',
        'app.historicos',
        'app.logs',
        'app.pessoa_fisicas',
        'app.pessoa_juridicas',
        'app.times',
        'app.modulos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ModulosUsuarios') ? [] : ['className' => 'App\Model\Table\ModulosUsuariosTable'];
        $this->ModulosUsuarios = TableRegistry::get('ModulosUsuarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ModulosUsuarios);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
