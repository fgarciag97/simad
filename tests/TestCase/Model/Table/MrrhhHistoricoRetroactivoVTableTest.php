<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoRetroactivoVTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoRetroactivoVTable Test Case
 */
class MrrhhHistoricoRetroactivoVTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoRetroactivoVTable
     */
    public $MrrhhHistoricoRetroactivoV;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoRetroactivoV'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoRetroactivoV') ? [] : ['className' => MrrhhHistoricoRetroactivoVTable::class];
        $this->MrrhhHistoricoRetroactivoV = TableRegistry::getTableLocator()->get('MrrhhHistoricoRetroactivoV', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoRetroactivoV);

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
