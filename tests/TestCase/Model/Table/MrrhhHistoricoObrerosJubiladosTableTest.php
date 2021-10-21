<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoObrerosJubiladosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoObrerosJubiladosTable Test Case
 */
class MrrhhHistoricoObrerosJubiladosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoObrerosJubiladosTable
     */
    public $MrrhhHistoricoObrerosJubilados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoObrerosJubilados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoObrerosJubilados') ? [] : ['className' => MrrhhHistoricoObrerosJubiladosTable::class];
        $this->MrrhhHistoricoObrerosJubilados = TableRegistry::getTableLocator()->get('MrrhhHistoricoObrerosJubilados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoObrerosJubilados);

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
