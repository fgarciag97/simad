<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewPresupuestoForma2121PartidasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewPresupuestoForma2121PartidasTable Test Case
 */
class ViewPresupuestoForma2121PartidasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewPresupuestoForma2121PartidasTable
     */
    public $ViewPresupuestoForma2121Partidas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewPresupuestoForma2121Partidas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewPresupuestoForma2121Partidas') ? [] : ['className' => ViewPresupuestoForma2121PartidasTable::class];
        $this->ViewPresupuestoForma2121Partidas = TableRegistry::getTableLocator()->get('ViewPresupuestoForma2121Partidas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewPresupuestoForma2121Partidas);

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
