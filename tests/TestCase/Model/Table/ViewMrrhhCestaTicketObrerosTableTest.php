<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhCestaTicketObrerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhCestaTicketObrerosTable Test Case
 */
class ViewMrrhhCestaTicketObrerosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhCestaTicketObrerosTable
     */
    public $ViewMrrhhCestaTicketObreros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhCestaTicketObreros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhCestaTicketObreros') ? [] : ['className' => ViewMrrhhCestaTicketObrerosTable::class];
        $this->ViewMrrhhCestaTicketObreros = TableRegistry::getTableLocator()->get('ViewMrrhhCestaTicketObreros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhCestaTicketObreros);

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
