<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresupuestoOrdinalNuevoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresupuestoOrdinalNuevoTable Test Case
 */
class PresupuestoOrdinalNuevoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PresupuestoOrdinalNuevoTable
     */
    public $PresupuestoOrdinalNuevo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PresupuestoOrdinalNuevo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PresupuestoOrdinalNuevo') ? [] : ['className' => PresupuestoOrdinalNuevoTable::class];
        $this->PresupuestoOrdinalNuevo = TableRegistry::getTableLocator()->get('PresupuestoOrdinalNuevo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PresupuestoOrdinalNuevo);

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
