<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhCestaTicketObrerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhCestaTicketObrerosTable Test Case
 */
class MrrhhCestaTicketObrerosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhCestaTicketObrerosTable
     */
    public $MrrhhCestaTicketObreros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhCestaTicketObreros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhCestaTicketObreros') ? [] : ['className' => MrrhhCestaTicketObrerosTable::class];
        $this->MrrhhCestaTicketObreros = TableRegistry::getTableLocator()->get('MrrhhCestaTicketObreros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhCestaTicketObreros);

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
