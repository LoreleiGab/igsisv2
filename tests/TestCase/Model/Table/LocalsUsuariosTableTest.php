<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LocalsUsuariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LocalsUsuariosTable Test Case
 */
class LocalsUsuariosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LocalsUsuariosTable
     */
    public $LocalsUsuarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.locals_usuarios',
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
        $config = TableRegistry::exists('LocalsUsuarios') ? [] : ['className' => 'App\Model\Table\LocalsUsuariosTable'];
        $this->LocalsUsuarios = TableRegistry::get('LocalsUsuarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LocalsUsuarios);

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
