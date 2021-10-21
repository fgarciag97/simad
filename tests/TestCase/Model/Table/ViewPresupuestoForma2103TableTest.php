<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewPresupuestoForma2103Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewPresupuestoForma2103Table Test Case
 */
class ViewPresupuestoForma2103TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewPresupuestoForma2103Table
     */
    public $ViewPresupuestoForma2103;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewPresupuestoForma2103'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewPresupuestoForma2103') ? [] : ['className' => ViewPresupuestoForma2103Table::class];
        $this->ViewPresupuestoForma2103 = TableRegistry::getTableLocator()->get('ViewPresupuestoForma2103', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewPresupuestoForma2103);

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
