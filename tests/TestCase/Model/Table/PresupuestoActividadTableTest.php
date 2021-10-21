<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresupuestoActividadTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresupuestoActividadTable Test Case
 */
class PresupuestoActividadTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PresupuestoActividadTable
     */
    public $PresupuestoActividad;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PresupuestoActividad'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PresupuestoActividad') ? [] : ['className' => PresupuestoActividadTable::class];
        $this->PresupuestoActividad = TableRegistry::getTableLocator()->get('PresupuestoActividad', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PresupuestoActividad);

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
