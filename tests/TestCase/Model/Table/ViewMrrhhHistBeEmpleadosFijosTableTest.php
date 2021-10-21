<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHistBeEmpleadosFijosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHistBeEmpleadosFijosTable Test Case
 */
class ViewMrrhhHistBeEmpleadosFijosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHistBeEmpleadosFijosTable
     */
    public $ViewMrrhhHistBeEmpleadosFijos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHistBeEmpleadosFijos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHistBeEmpleadosFijos') ? [] : ['className' => ViewMrrhhHistBeEmpleadosFijosTable::class];
        $this->ViewMrrhhHistBeEmpleadosFijos = TableRegistry::getTableLocator()->get('ViewMrrhhHistBeEmpleadosFijos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHistBeEmpleadosFijos);

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
