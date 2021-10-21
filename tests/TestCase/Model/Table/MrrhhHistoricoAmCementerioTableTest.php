<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoAmCementerioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoAmCementerioTable Test Case
 */
class MrrhhHistoricoAmCementerioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoAmCementerioTable
     */
    public $MrrhhHistoricoAmCementerio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoAmCementerio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoAmCementerio') ? [] : ['className' => MrrhhHistoricoAmCementerioTable::class];
        $this->MrrhhHistoricoAmCementerio = TableRegistry::getTableLocator()->get('MrrhhHistoricoAmCementerio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoAmCementerio);

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
