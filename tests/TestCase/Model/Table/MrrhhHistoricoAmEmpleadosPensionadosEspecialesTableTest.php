<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoAmEmpleadosPensionadosEspecialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoAmEmpleadosPensionadosEspecialesTable Test Case
 */
class MrrhhHistoricoAmEmpleadosPensionadosEspecialesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoAmEmpleadosPensionadosEspecialesTable
     */
    public $MrrhhHistoricoAmEmpleadosPensionadosEspeciales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoAmEmpleadosPensionadosEspeciales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoAmEmpleadosPensionadosEspeciales') ? [] : ['className' => MrrhhHistoricoAmEmpleadosPensionadosEspecialesTable::class];
        $this->MrrhhHistoricoAmEmpleadosPensionadosEspeciales = TableRegistry::getTableLocator()->get('MrrhhHistoricoAmEmpleadosPensionadosEspeciales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoAmEmpleadosPensionadosEspeciales);

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
