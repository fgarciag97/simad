<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistAmEmpleadosFijosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistAmEmpleadosFijosTable Test Case
 */
class MrrhhHistAmEmpleadosFijosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistAmEmpleadosFijosTable
     */
    public $MrrhhHistAmEmpleadosFijos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistAmEmpleadosFijos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistAmEmpleadosFijos') ? [] : ['className' => MrrhhHistAmEmpleadosFijosTable::class];
        $this->MrrhhHistAmEmpleadosFijos = TableRegistry::getTableLocator()->get('MrrhhHistAmEmpleadosFijos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistAmEmpleadosFijos);

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
