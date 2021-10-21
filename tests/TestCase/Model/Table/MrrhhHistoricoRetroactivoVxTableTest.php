<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoRetroactivoVxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoRetroactivoVxTable Test Case
 */
class MrrhhHistoricoRetroactivoVxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoRetroactivoVxTable
     */
    public $MrrhhHistoricoRetroactivoVx;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoRetroactivoVx'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoRetroactivoVx') ? [] : ['className' => MrrhhHistoricoRetroactivoVxTable::class];
        $this->MrrhhHistoricoRetroactivoVx = TableRegistry::getTableLocator()->get('MrrhhHistoricoRetroactivoVx', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoRetroactivoVx);

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
