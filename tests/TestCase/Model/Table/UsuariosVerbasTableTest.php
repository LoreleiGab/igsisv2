<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuariosVerbasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuariosVerbasTable Test Case
 */
class UsuariosVerbasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuariosVerbasTable
     */
    public $UsuariosVerbas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usuarios_verbas',
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
        $config = TableRegistry::exists('UsuariosVerbas') ? [] : ['className' => 'App\Model\Table\UsuariosVerbasTable'];
        $this->UsuariosVerbas = TableRegistry::get('UsuariosVerbas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsuariosVerbas);

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
