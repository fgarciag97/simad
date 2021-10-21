<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresupuestoForma2102Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresupuestoForma2102Table Test Case
 */
class PresupuestoForma2102TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PresupuestoForma2102Table
     */
    public $PresupuestoForma2102;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PresupuestoForma2102'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PresupuestoForma2102') ? [] : ['className' => PresupuestoForma2102Table::class];
        $this->PresupuestoForma2102 = TableRegistry::getTableLocator()->get('PresupuestoForma2102', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PresupuestoForma2102);

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
