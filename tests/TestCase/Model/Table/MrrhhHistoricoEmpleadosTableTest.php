<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoEmpleadosTable Test Case
 */
class MrrhhHistoricoEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoEmpleadosTable
     */
    public $MrrhhHistoricoEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoEmpleados') ? [] : ['className' => MrrhhHistoricoEmpleadosTable::class];
        $this->MrrhhHistoricoEmpleados = TableRegistry::getTableLocator()->get('MrrhhHistoricoEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoEmpleados);

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
