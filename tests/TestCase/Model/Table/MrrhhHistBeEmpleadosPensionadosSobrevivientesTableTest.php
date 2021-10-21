<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistBeEmpleadosPensionadosSobrevivientesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistBeEmpleadosPensionadosSobrevivientesTable Test Case
 */
class MrrhhHistBeEmpleadosPensionadosSobrevivientesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistBeEmpleadosPensionadosSobrevivientesTable
     */
    public $MrrhhHistBeEmpleadosPensionadosSobrevivientes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistBeEmpleadosPensionadosSobrevivientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistBeEmpleadosPensionadosSobrevivientes') ? [] : ['className' => MrrhhHistBeEmpleadosPensionadosSobrevivientesTable::class];
        $this->MrrhhHistBeEmpleadosPensionadosSobrevivientes = TableRegistry::getTableLocator()->get('MrrhhHistBeEmpleadosPensionadosSobrevivientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistBeEmpleadosPensionadosSobrevivientes);

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
