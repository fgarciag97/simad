<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistAmEmpleadosJubiladosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistAmEmpleadosJubiladosTable Test Case
 */
class MrrhhHistAmEmpleadosJubiladosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistAmEmpleadosJubiladosTable
     */
    public $MrrhhHistAmEmpleadosJubilados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistAmEmpleadosJubilados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistAmEmpleadosJubilados') ? [] : ['className' => MrrhhHistAmEmpleadosJubiladosTable::class];
        $this->MrrhhHistAmEmpleadosJubilados = TableRegistry::getTableLocator()->get('MrrhhHistAmEmpleadosJubilados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistAmEmpleadosJubilados);

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
