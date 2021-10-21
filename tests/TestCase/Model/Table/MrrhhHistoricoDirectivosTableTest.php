<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoDirectivosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoDirectivosTable Test Case
 */
class MrrhhHistoricoDirectivosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoDirectivosTable
     */
    public $MrrhhHistoricoDirectivos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoDirectivos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoDirectivos') ? [] : ['className' => MrrhhHistoricoDirectivosTable::class];
        $this->MrrhhHistoricoDirectivos = TableRegistry::getTableLocator()->get('MrrhhHistoricoDirectivos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoDirectivos);

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
