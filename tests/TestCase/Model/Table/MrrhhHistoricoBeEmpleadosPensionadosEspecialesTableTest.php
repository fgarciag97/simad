<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoBeEmpleadosPensionadosEspecialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoBeEmpleadosPensionadosEspecialesTable Test Case
 */
class MrrhhHistoricoBeEmpleadosPensionadosEspecialesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoBeEmpleadosPensionadosEspecialesTable
     */
    public $MrrhhHistoricoBeEmpleadosPensionadosEspeciales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoBeEmpleadosPensionadosEspeciales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoBeEmpleadosPensionadosEspeciales') ? [] : ['className' => MrrhhHistoricoBeEmpleadosPensionadosEspecialesTable::class];
        $this->MrrhhHistoricoBeEmpleadosPensionadosEspeciales = TableRegistry::getTableLocator()->get('MrrhhHistoricoBeEmpleadosPensionadosEspeciales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoBeEmpleadosPensionadosEspeciales);

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
