<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresupuestoForma2104Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresupuestoForma2104Table Test Case
 */
class PresupuestoForma2104TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PresupuestoForma2104Table
     */
    public $PresupuestoForma2104;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PresupuestoForma2104'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PresupuestoForma2104') ? [] : ['className' => PresupuestoForma2104Table::class];
        $this->PresupuestoForma2104 = TableRegistry::getTableLocator()->get('PresupuestoForma2104', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PresupuestoForma2104);

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
