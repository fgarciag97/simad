<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHistAmEmpleadosFijosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHistAmEmpleadosFijosTable Test Case
 */
class ViewMrrhhHistAmEmpleadosFijosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHistAmEmpleadosFijosTable
     */
    public $ViewMrrhhHistAmEmpleadosFijos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHistAmEmpleadosFijos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHistAmEmpleadosFijos') ? [] : ['className' => ViewMrrhhHistAmEmpleadosFijosTable::class];
        $this->ViewMrrhhHistAmEmpleadosFijos = TableRegistry::getTableLocator()->get('ViewMrrhhHistAmEmpleadosFijos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHistAmEmpleadosFijos);

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
