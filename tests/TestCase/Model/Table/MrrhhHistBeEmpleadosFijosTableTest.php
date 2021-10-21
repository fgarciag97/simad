<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistBeEmpleadosFijosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistBeEmpleadosFijosTable Test Case
 */
class MrrhhHistBeEmpleadosFijosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistBeEmpleadosFijosTable
     */
    public $MrrhhHistBeEmpleadosFijos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistBeEmpleadosFijos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistBeEmpleadosFijos') ? [] : ['className' => MrrhhHistBeEmpleadosFijosTable::class];
        $this->MrrhhHistBeEmpleadosFijos = TableRegistry::getTableLocator()->get('MrrhhHistBeEmpleadosFijos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistBeEmpleadosFijos);

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
