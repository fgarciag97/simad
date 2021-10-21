<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdenamientoPresupuestoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdenamientoPresupuestoTable Test Case
 */
class OrdenamientoPresupuestoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdenamientoPresupuestoTable
     */
    public $OrdenamientoPresupuesto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OrdenamientoPresupuesto'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrdenamientoPresupuesto') ? [] : ['className' => OrdenamientoPresupuestoTable::class];
        $this->OrdenamientoPresupuesto = TableRegistry::getTableLocator()->get('OrdenamientoPresupuesto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdenamientoPresupuesto);

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
