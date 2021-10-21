<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhGruposJubiladosEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhGruposJubiladosEmpleadosTable Test Case
 */
class MrrhhGruposJubiladosEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhGruposJubiladosEmpleadosTable
     */
    public $MrrhhGruposJubiladosEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhGruposJubiladosEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhGruposJubiladosEmpleados') ? [] : ['className' => MrrhhGruposJubiladosEmpleadosTable::class];
        $this->MrrhhGruposJubiladosEmpleados = TableRegistry::getTableLocator()->get('MrrhhGruposJubiladosEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhGruposJubiladosEmpleados);

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
