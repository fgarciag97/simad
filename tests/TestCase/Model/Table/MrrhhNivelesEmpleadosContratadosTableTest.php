<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhNivelesEmpleadosContratadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhNivelesEmpleadosContratadosTable Test Case
 */
class MrrhhNivelesEmpleadosContratadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhNivelesEmpleadosContratadosTable
     */
    public $MrrhhNivelesEmpleadosContratados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhNivelesEmpleadosContratados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhNivelesEmpleadosContratados') ? [] : ['className' => MrrhhNivelesEmpleadosContratadosTable::class];
        $this->MrrhhNivelesEmpleadosContratados = TableRegistry::getTableLocator()->get('MrrhhNivelesEmpleadosContratados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhNivelesEmpleadosContratados);

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
