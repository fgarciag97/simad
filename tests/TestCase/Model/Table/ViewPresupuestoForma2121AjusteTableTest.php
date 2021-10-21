<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewPresupuestoForma2121AjusteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewPresupuestoForma2121AjusteTable Test Case
 */
class ViewPresupuestoForma2121AjusteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewPresupuestoForma2121AjusteTable
     */
    public $ViewPresupuestoForma2121Ajuste;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewPresupuestoForma2121Ajuste'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewPresupuestoForma2121Ajuste') ? [] : ['className' => ViewPresupuestoForma2121AjusteTable::class];
        $this->ViewPresupuestoForma2121Ajuste = TableRegistry::getTableLocator()->get('ViewPresupuestoForma2121Ajuste', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewPresupuestoForma2121Ajuste);

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
