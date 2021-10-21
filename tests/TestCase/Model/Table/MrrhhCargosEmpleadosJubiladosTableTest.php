<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhCargosEmpleadosJubiladosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhCargosEmpleadosJubiladosTable Test Case
 */
class MrrhhCargosEmpleadosJubiladosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhCargosEmpleadosJubiladosTable
     */
    public $MrrhhCargosEmpleadosJubilados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhCargosEmpleadosJubilados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhCargosEmpleadosJubilados') ? [] : ['className' => MrrhhCargosEmpleadosJubiladosTable::class];
        $this->MrrhhCargosEmpleadosJubilados = TableRegistry::getTableLocator()->get('MrrhhCargosEmpleadosJubilados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhCargosEmpleadosJubilados);

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
