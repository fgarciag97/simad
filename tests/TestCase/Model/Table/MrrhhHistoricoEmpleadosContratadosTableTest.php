<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoEmpleadosContratadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoEmpleadosContratadosTable Test Case
 */
class MrrhhHistoricoEmpleadosContratadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoEmpleadosContratadosTable
     */
    public $MrrhhHistoricoEmpleadosContratados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoEmpleadosContratados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoEmpleadosContratados') ? [] : ['className' => MrrhhHistoricoEmpleadosContratadosTable::class];
        $this->MrrhhHistoricoEmpleadosContratados = TableRegistry::getTableLocator()->get('MrrhhHistoricoEmpleadosContratados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoEmpleadosContratados);

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
