<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoEmpleadosPensionadosEspecialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoEmpleadosPensionadosEspecialesTable Test Case
 */
class MrrhhHistoricoEmpleadosPensionadosEspecialesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoEmpleadosPensionadosEspecialesTable
     */
    public $MrrhhHistoricoEmpleadosPensionadosEspeciales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoEmpleadosPensionadosEspeciales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoEmpleadosPensionadosEspeciales') ? [] : ['className' => MrrhhHistoricoEmpleadosPensionadosEspecialesTable::class];
        $this->MrrhhHistoricoEmpleadosPensionadosEspeciales = TableRegistry::getTableLocator()->get('MrrhhHistoricoEmpleadosPensionadosEspeciales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoEmpleadosPensionadosEspeciales);

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
