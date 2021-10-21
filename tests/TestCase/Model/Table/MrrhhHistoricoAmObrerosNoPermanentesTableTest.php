<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoAmObrerosNoPermanentesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoAmObrerosNoPermanentesTable Test Case
 */
class MrrhhHistoricoAmObrerosNoPermanentesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoAmObrerosNoPermanentesTable
     */
    public $MrrhhHistoricoAmObrerosNoPermanentes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoAmObrerosNoPermanentes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoAmObrerosNoPermanentes') ? [] : ['className' => MrrhhHistoricoAmObrerosNoPermanentesTable::class];
        $this->MrrhhHistoricoAmObrerosNoPermanentes = TableRegistry::getTableLocator()->get('MrrhhHistoricoAmObrerosNoPermanentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoAmObrerosNoPermanentes);

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
