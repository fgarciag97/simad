<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoBeEmpleadosPensionadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoBeEmpleadosPensionadosTable Test Case
 */
class MrrhhHistoricoBeEmpleadosPensionadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoBeEmpleadosPensionadosTable
     */
    public $MrrhhHistoricoBeEmpleadosPensionados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoBeEmpleadosPensionados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoBeEmpleadosPensionados') ? [] : ['className' => MrrhhHistoricoBeEmpleadosPensionadosTable::class];
        $this->MrrhhHistoricoBeEmpleadosPensionados = TableRegistry::getTableLocator()->get('MrrhhHistoricoBeEmpleadosPensionados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoBeEmpleadosPensionados);

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
