<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewOrdenamientoPresupuestoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewOrdenamientoPresupuestoTable Test Case
 */
class ViewOrdenamientoPresupuestoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewOrdenamientoPresupuestoTable
     */
    public $ViewOrdenamientoPresupuesto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewOrdenamientoPresupuesto'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewOrdenamientoPresupuesto') ? [] : ['className' => ViewOrdenamientoPresupuestoTable::class];
        $this->ViewOrdenamientoPresupuesto = TableRegistry::getTableLocator()->get('ViewOrdenamientoPresupuesto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewOrdenamientoPresupuesto);

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
