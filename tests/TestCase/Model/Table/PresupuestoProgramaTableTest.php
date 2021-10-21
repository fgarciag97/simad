<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresupuestoProgramaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresupuestoProgramaTable Test Case
 */
class PresupuestoProgramaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PresupuestoProgramaTable
     */
    public $PresupuestoPrograma;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PresupuestoPrograma'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PresupuestoPrograma') ? [] : ['className' => PresupuestoProgramaTable::class];
        $this->PresupuestoPrograma = TableRegistry::getTableLocator()->get('PresupuestoPrograma', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PresupuestoPrograma);

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
