<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhJubiladosEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhJubiladosEmpleadosTable Test Case
 */
class MrrhhJubiladosEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhJubiladosEmpleadosTable
     */
    public $MrrhhJubiladosEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhJubiladosEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhJubiladosEmpleados') ? [] : ['className' => MrrhhJubiladosEmpleadosTable::class];
        $this->MrrhhJubiladosEmpleados = TableRegistry::getTableLocator()->get('MrrhhJubiladosEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhJubiladosEmpleados);

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
