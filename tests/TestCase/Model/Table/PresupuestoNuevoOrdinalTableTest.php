<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresupuestoNuevoOrdinalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresupuestoNuevoOrdinalTable Test Case
 */
class PresupuestoNuevoOrdinalTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PresupuestoNuevoOrdinalTable
     */
    public $PresupuestoNuevoOrdinal;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PresupuestoNuevoOrdinal'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PresupuestoNuevoOrdinal') ? [] : ['className' => PresupuestoNuevoOrdinalTable::class];
        $this->PresupuestoNuevoOrdinal = TableRegistry::getTableLocator()->get('PresupuestoNuevoOrdinal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PresupuestoNuevoOrdinal);

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
