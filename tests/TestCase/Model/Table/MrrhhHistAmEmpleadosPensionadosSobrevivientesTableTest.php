<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistAmEmpleadosPensionadosSobrevivientesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistAmEmpleadosPensionadosSobrevivientesTable Test Case
 */
class MrrhhHistAmEmpleadosPensionadosSobrevivientesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistAmEmpleadosPensionadosSobrevivientesTable
     */
    public $MrrhhHistAmEmpleadosPensionadosSobrevivientes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistAmEmpleadosPensionadosSobrevivientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistAmEmpleadosPensionadosSobrevivientes') ? [] : ['className' => MrrhhHistAmEmpleadosPensionadosSobrevivientesTable::class];
        $this->MrrhhHistAmEmpleadosPensionadosSobrevivientes = TableRegistry::getTableLocator()->get('MrrhhHistAmEmpleadosPensionadosSobrevivientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistAmEmpleadosPensionadosSobrevivientes);

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
