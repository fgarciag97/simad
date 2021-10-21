<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhCestaTicketCementerioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhCestaTicketCementerioTable Test Case
 */
class MrrhhCestaTicketCementerioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhCestaTicketCementerioTable
     */
    public $MrrhhCestaTicketCementerio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhCestaTicketCementerio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhCestaTicketCementerio') ? [] : ['className' => MrrhhCestaTicketCementerioTable::class];
        $this->MrrhhCestaTicketCementerio = TableRegistry::getTableLocator()->get('MrrhhCestaTicketCementerio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhCestaTicketCementerio);

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
