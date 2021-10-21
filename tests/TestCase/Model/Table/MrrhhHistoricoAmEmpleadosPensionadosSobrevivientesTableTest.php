<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoAmEmpleadosPensionadosSobrevivientesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoAmEmpleadosPensionadosSobrevivientesTable Test Case
 */
class MrrhhHistoricoAmEmpleadosPensionadosSobrevivientesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoAmEmpleadosPensionadosSobrevivientesTable
     */
    public $MrrhhHistoricoAmEmpleadosPensionadosSobrevivientes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoAmEmpleadosPensionadosSobrevivientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoAmEmpleadosPensionadosSobrevivientes') ? [] : ['className' => MrrhhHistoricoAmEmpleadosPensionadosSobrevivientesTable::class];
        $this->MrrhhHistoricoAmEmpleadosPensionadosSobrevivientes = TableRegistry::getTableLocator()->get('MrrhhHistoricoAmEmpleadosPensionadosSobrevivientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoAmEmpleadosPensionadosSobrevivientes);

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
