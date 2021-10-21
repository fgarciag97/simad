<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhPensionadosSobrevivientesEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhPensionadosSobrevivientesEmpleadosTable Test Case
 */
class MrrhhPensionadosSobrevivientesEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhPensionadosSobrevivientesEmpleadosTable
     */
    public $MrrhhPensionadosSobrevivientesEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhPensionadosSobrevivientesEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhPensionadosSobrevivientesEmpleados') ? [] : ['className' => MrrhhPensionadosSobrevivientesEmpleadosTable::class];
        $this->MrrhhPensionadosSobrevivientesEmpleados = TableRegistry::getTableLocator()->get('MrrhhPensionadosSobrevivientesEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhPensionadosSobrevivientesEmpleados);

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
