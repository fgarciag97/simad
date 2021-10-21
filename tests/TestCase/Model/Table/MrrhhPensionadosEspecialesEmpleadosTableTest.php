<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhPensionadosEspecialesEmpleadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhPensionadosEspecialesEmpleadosTable Test Case
 */
class MrrhhPensionadosEspecialesEmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhPensionadosEspecialesEmpleadosTable
     */
    public $MrrhhPensionadosEspecialesEmpleados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhPensionadosEspecialesEmpleados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhPensionadosEspecialesEmpleados') ? [] : ['className' => MrrhhPensionadosEspecialesEmpleadosTable::class];
        $this->MrrhhPensionadosEspecialesEmpleados = TableRegistry::getTableLocator()->get('MrrhhPensionadosEspecialesEmpleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhPensionadosEspecialesEmpleados);

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
