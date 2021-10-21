<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistBeEmpleadosPensionadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistBeEmpleadosPensionadosTable Test Case
 */
class MrrhhHistBeEmpleadosPensionadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistBeEmpleadosPensionadosTable
     */
    public $MrrhhHistBeEmpleadosPensionados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistBeEmpleadosPensionados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistBeEmpleadosPensionados') ? [] : ['className' => MrrhhHistBeEmpleadosPensionadosTable::class];
        $this->MrrhhHistBeEmpleadosPensionados = TableRegistry::getTableLocator()->get('MrrhhHistBeEmpleadosPensionados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistBeEmpleadosPensionados);

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
