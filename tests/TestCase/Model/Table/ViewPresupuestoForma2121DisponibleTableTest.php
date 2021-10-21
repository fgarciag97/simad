<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewPresupuestoForma2121DisponibleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewPresupuestoForma2121DisponibleTable Test Case
 */
class ViewPresupuestoForma2121DisponibleTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewPresupuestoForma2121DisponibleTable
     */
    public $ViewPresupuestoForma2121Disponible;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewPresupuestoForma2121Disponible'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewPresupuestoForma2121Disponible') ? [] : ['className' => ViewPresupuestoForma2121DisponibleTable::class];
        $this->ViewPresupuestoForma2121Disponible = TableRegistry::getTableLocator()->get('ViewPresupuestoForma2121Disponible', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewPresupuestoForma2121Disponible);

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
