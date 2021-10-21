<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHistoricoEmpleadosFijosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHistoricoEmpleadosFijosTable Test Case
 */
class ViewMrrhhHistoricoEmpleadosFijosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHistoricoEmpleadosFijosTable
     */
    public $ViewMrrhhHistoricoEmpleadosFijos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHistoricoEmpleadosFijos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHistoricoEmpleadosFijos') ? [] : ['className' => ViewMrrhhHistoricoEmpleadosFijosTable::class];
        $this->ViewMrrhhHistoricoEmpleadosFijos = TableRegistry::getTableLocator()->get('ViewMrrhhHistoricoEmpleadosFijos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHistoricoEmpleadosFijos);

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
