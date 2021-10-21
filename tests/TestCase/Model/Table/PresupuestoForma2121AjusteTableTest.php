<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresupuestoForma2121AjusteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresupuestoForma2121AjusteTable Test Case
 */
class PresupuestoForma2121AjusteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PresupuestoForma2121AjusteTable
     */
    public $PresupuestoForma2121Ajuste;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PresupuestoForma2121Ajuste'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PresupuestoForma2121Ajuste') ? [] : ['className' => PresupuestoForma2121AjusteTable::class];
        $this->PresupuestoForma2121Ajuste = TableRegistry::getTableLocator()->get('PresupuestoForma2121Ajuste', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PresupuestoForma2121Ajuste);

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
