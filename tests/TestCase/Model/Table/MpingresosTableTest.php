<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MpingresosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MpingresosTable Test Case
 */
class MpingresosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MpingresosTable
     */
    public $Mpingresos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mpingresos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mpingresos') ? [] : ['className' => MpingresosTable::class];
        $this->Mpingresos = TableRegistry::getTableLocator()->get('Mpingresos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mpingresos);

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
