<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresupuestoProyectoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresupuestoProyectoTable Test Case
 */
class PresupuestoProyectoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PresupuestoProyectoTable
     */
    public $PresupuestoProyecto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PresupuestoProyecto'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PresupuestoProyecto') ? [] : ['className' => PresupuestoProyectoTable::class];
        $this->PresupuestoProyecto = TableRegistry::getTableLocator()->get('PresupuestoProyecto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PresupuestoProyecto);

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
