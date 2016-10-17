<?php
namespace App\Test\TestCase\Controller;

use App\Controller\GroupsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\GroupsController Test Case
 */
class GroupsControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
