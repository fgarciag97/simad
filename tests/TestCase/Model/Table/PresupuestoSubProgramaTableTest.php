<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresupuestoSubProgramaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresupuestoSubProgramaTable Test Case
 */
class PresupuestoSubProgramaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PresupuestoSubProgramaTable
     */
    public $PresupuestoSubPrograma;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PresupuestoSubPrograma'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PresupuestoSubPrograma') ? [] : ['className' => PresupuestoSubProgramaTable::class];
        $this->PresupuestoSubPrograma = TableRegistry::getTableLocator()->get('PresupuestoSubPrograma', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PresupuestoSubPrograma);

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
