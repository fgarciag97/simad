<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoEmpleadosJubiladosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoEmpleadosJubiladosTable Test Case
 */
class MrrhhHistoricoEmpleadosJubiladosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoEmpleadosJubiladosTable
     */
    public $MrrhhHistoricoEmpleadosJubilados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoEmpleadosJubilados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoEmpleadosJubilados') ? [] : ['className' => MrrhhHistoricoEmpleadosJubiladosTable::class];
        $this->MrrhhHistoricoEmpleadosJubilados = TableRegistry::getTableLocator()->get('MrrhhHistoricoEmpleadosJubilados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoEmpleadosJubilados);

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
}
