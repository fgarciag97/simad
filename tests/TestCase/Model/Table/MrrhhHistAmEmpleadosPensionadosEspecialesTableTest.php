<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistAmEmpleadosPensionadosEspecialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistAmEmpleadosPensionadosEspecialesTable Test Case
 */
class MrrhhHistAmEmpleadosPensionadosEspecialesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistAmEmpleadosPensionadosEspecialesTable
     */
    public $MrrhhHistAmEmpleadosPensionadosEspeciales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistAmEmpleadosPensionadosEspeciales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistAmEmpleadosPensionadosEspeciales') ? [] : ['className' => MrrhhHistAmEmpleadosPensionadosEspecialesTable::class];
        $this->MrrhhHistAmEmpleadosPensionadosEspeciales = TableRegistry::getTableLocator()->get('MrrhhHistAmEmpleadosPensionadosEspeciales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistAmEmpleadosPensionadosEspeciales);

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
