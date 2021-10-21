<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoBeEmpleadosJubiladosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoBeEmpleadosJubiladosTable Test Case
 */
class MrrhhHistoricoBeEmpleadosJubiladosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoBeEmpleadosJubiladosTable
     */
    public $MrrhhHistoricoBeEmpleadosJubilados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoBeEmpleadosJubilados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoBeEmpleadosJubilados') ? [] : ['className' => MrrhhHistoricoBeEmpleadosJubiladosTable::class];
        $this->MrrhhHistoricoBeEmpleadosJubilados = TableRegistry::getTableLocator()->get('MrrhhHistoricoBeEmpleadosJubilados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoBeEmpleadosJubilados);

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
