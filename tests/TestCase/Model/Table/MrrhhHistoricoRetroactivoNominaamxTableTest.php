<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoRetroactivoNominaamxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoRetroactivoNominaamxTable Test Case
 */
class MrrhhHistoricoRetroactivoNominaamxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoRetroactivoNominaamxTable
     */
    public $MrrhhHistoricoRetroactivoNominaamx;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoRetroactivoNominaamx'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoRetroactivoNominaamx') ? [] : ['className' => MrrhhHistoricoRetroactivoNominaamxTable::class];
        $this->MrrhhHistoricoRetroactivoNominaamx = TableRegistry::getTableLocator()->get('MrrhhHistoricoRetroactivoNominaamx', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoRetroactivoNominaamx);

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
