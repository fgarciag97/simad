<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoPersonalizadaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoPersonalizadaTable Test Case
 */
class MrrhhHistoricoPersonalizadaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoPersonalizadaTable
     */
    public $MrrhhHistoricoPersonalizada;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoPersonalizada'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoPersonalizada') ? [] : ['className' => MrrhhHistoricoPersonalizadaTable::class];
        $this->MrrhhHistoricoPersonalizada = TableRegistry::getTableLocator()->get('MrrhhHistoricoPersonalizada', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoPersonalizada);

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
