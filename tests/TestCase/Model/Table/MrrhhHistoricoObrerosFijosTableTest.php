<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoObrerosFijosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoObrerosFijosTable Test Case
 */
class MrrhhHistoricoObrerosFijosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoObrerosFijosTable
     */
    public $MrrhhHistoricoObrerosFijos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoObrerosFijos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoObrerosFijos') ? [] : ['className' => MrrhhHistoricoObrerosFijosTable::class];
        $this->MrrhhHistoricoObrerosFijos = TableRegistry::getTableLocator()->get('MrrhhHistoricoObrerosFijos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoObrerosFijos);

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
