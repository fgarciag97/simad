<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHistoricoComisionServicioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHistoricoComisionServicioTable Test Case
 */
class ViewMrrhhHistoricoComisionServicioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHistoricoComisionServicioTable
     */
    public $ViewMrrhhHistoricoComisionServicio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHistoricoComisionServicio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHistoricoComisionServicio') ? [] : ['className' => ViewMrrhhHistoricoComisionServicioTable::class];
        $this->ViewMrrhhHistoricoComisionServicio = TableRegistry::getTableLocator()->get('ViewMrrhhHistoricoComisionServicio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHistoricoComisionServicio);

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
