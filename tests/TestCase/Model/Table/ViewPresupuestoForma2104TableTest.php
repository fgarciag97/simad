<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewPresupuestoForma2104Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewPresupuestoForma2104Table Test Case
 */
class ViewPresupuestoForma2104TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewPresupuestoForma2104Table
     */
    public $ViewPresupuestoForma2104;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewPresupuestoForma2104'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewPresupuestoForma2104') ? [] : ['className' => ViewPresupuestoForma2104Table::class];
        $this->ViewPresupuestoForma2104 = TableRegistry::getTableLocator()->get('ViewPresupuestoForma2104', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewPresupuestoForma2104);

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
