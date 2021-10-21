<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoAmObrerosJubiladosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoAmObrerosJubiladosTable Test Case
 */
class MrrhhHistoricoAmObrerosJubiladosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoAmObrerosJubiladosTable
     */
    public $MrrhhHistoricoAmObrerosJubilados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoAmObrerosJubilados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoAmObrerosJubilados') ? [] : ['className' => MrrhhHistoricoAmObrerosJubiladosTable::class];
        $this->MrrhhHistoricoAmObrerosJubilados = TableRegistry::getTableLocator()->get('MrrhhHistoricoAmObrerosJubilados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoAmObrerosJubilados);

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
