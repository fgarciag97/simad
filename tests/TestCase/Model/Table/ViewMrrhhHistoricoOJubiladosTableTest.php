<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHistoricoOJubiladosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHistoricoOJubiladosTable Test Case
 */
class ViewMrrhhHistoricoOJubiladosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHistoricoOJubiladosTable
     */
    public $ViewMrrhhHistoricoOJubilados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHistoricoOJubilados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHistoricoOJubilados') ? [] : ['className' => ViewMrrhhHistoricoOJubiladosTable::class];
        $this->ViewMrrhhHistoricoOJubilados = TableRegistry::getTableLocator()->get('ViewMrrhhHistoricoOJubilados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHistoricoOJubilados);

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
