<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresupuestoSubEspecificoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresupuestoSubEspecificoTable Test Case
 */
class PresupuestoSubEspecificoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PresupuestoSubEspecificoTable
     */
    public $PresupuestoSubEspecifico;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PresupuestoSubEspecifico'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PresupuestoSubEspecifico') ? [] : ['className' => PresupuestoSubEspecificoTable::class];
        $this->PresupuestoSubEspecifico = TableRegistry::getTableLocator()->get('PresupuestoSubEspecifico', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PresupuestoSubEspecifico);

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
