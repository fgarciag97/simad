<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhEmpleadosContratadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhEmpleadosContratadosTable Test Case
 */
class MrrhhEmpleadosContratadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhEmpleadosContratadosTable
     */
    public $MrrhhEmpleadosContratados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhEmpleadosContratados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhEmpleadosContratados') ? [] : ['className' => MrrhhEmpleadosContratadosTable::class];
        $this->MrrhhEmpleadosContratados = TableRegistry::getTableLocator()->get('MrrhhEmpleadosContratados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhEmpleadosContratados);

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
