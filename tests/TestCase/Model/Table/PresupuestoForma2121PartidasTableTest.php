<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresupuestoForma2121PartidasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresupuestoForma2121PartidasTable Test Case
 */
class PresupuestoForma2121PartidasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PresupuestoForma2121PartidasTable
     */
    public $PresupuestoForma2121Partidas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PresupuestoForma2121Partidas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PresupuestoForma2121Partidas') ? [] : ['className' => PresupuestoForma2121PartidasTable::class];
        $this->PresupuestoForma2121Partidas = TableRegistry::getTableLocator()->get('PresupuestoForma2121Partidas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PresupuestoForma2121Partidas);

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
