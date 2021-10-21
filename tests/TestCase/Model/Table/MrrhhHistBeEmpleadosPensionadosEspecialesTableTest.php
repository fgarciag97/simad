<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistBeEmpleadosPensionadosEspecialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistBeEmpleadosPensionadosEspecialesTable Test Case
 */
class MrrhhHistBeEmpleadosPensionadosEspecialesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistBeEmpleadosPensionadosEspecialesTable
     */
    public $MrrhhHistBeEmpleadosPensionadosEspeciales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistBeEmpleadosPensionadosEspeciales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistBeEmpleadosPensionadosEspeciales') ? [] : ['className' => MrrhhHistBeEmpleadosPensionadosEspecialesTable::class];
        $this->MrrhhHistBeEmpleadosPensionadosEspeciales = TableRegistry::getTableLocator()->get('MrrhhHistBeEmpleadosPensionadosEspeciales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistBeEmpleadosPensionadosEspeciales);

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
