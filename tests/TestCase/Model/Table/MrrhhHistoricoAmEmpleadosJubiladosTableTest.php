<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoAmEmpleadosJubiladosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoAmEmpleadosJubiladosTable Test Case
 */
class MrrhhHistoricoAmEmpleadosJubiladosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoAmEmpleadosJubiladosTable
     */
    public $MrrhhHistoricoAmEmpleadosJubilados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoAmEmpleadosJubilados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoAmEmpleadosJubilados') ? [] : ['className' => MrrhhHistoricoAmEmpleadosJubiladosTable::class];
        $this->MrrhhHistoricoAmEmpleadosJubilados = TableRegistry::getTableLocator()->get('MrrhhHistoricoAmEmpleadosJubilados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoAmEmpleadosJubilados);

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
