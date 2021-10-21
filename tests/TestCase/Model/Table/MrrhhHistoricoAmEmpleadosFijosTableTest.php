<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoAmEmpleadosFijosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoAmEmpleadosFijosTable Test Case
 */
class MrrhhHistoricoAmEmpleadosFijosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoAmEmpleadosFijosTable
     */
    public $MrrhhHistoricoAmEmpleadosFijos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoAmEmpleadosFijos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoAmEmpleadosFijos') ? [] : ['className' => MrrhhHistoricoAmEmpleadosFijosTable::class];
        $this->MrrhhHistoricoAmEmpleadosFijos = TableRegistry::getTableLocator()->get('MrrhhHistoricoAmEmpleadosFijos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoAmEmpleadosFijos);

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
