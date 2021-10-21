<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoObrerosNoPermanentesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoObrerosNoPermanentesTable Test Case
 */
class MrrhhHistoricoObrerosNoPermanentesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoObrerosNoPermanentesTable
     */
    public $MrrhhHistoricoObrerosNoPermanentes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoObrerosNoPermanentes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoObrerosNoPermanentes') ? [] : ['className' => MrrhhHistoricoObrerosNoPermanentesTable::class];
        $this->MrrhhHistoricoObrerosNoPermanentes = TableRegistry::getTableLocator()->get('MrrhhHistoricoObrerosNoPermanentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoObrerosNoPermanentes);

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
