<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhCestaTicketCementerioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhCestaTicketCementerioTable Test Case
 */
class ViewMrrhhCestaTicketCementerioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhCestaTicketCementerioTable
     */
    public $ViewMrrhhCestaTicketCementerio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhCestaTicketCementerio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhCestaTicketCementerio') ? [] : ['className' => ViewMrrhhCestaTicketCementerioTable::class];
        $this->ViewMrrhhCestaTicketCementerio = TableRegistry::getTableLocator()->get('ViewMrrhhCestaTicketCementerio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhCestaTicketCementerio);

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
