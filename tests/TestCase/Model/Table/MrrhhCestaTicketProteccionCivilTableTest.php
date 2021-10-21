<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhCestaTicketProteccionCivilTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhCestaTicketProteccionCivilTable Test Case
 */
class MrrhhCestaTicketProteccionCivilTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhCestaTicketProteccionCivilTable
     */
    public $MrrhhCestaTicketProteccionCivil;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhCestaTicketProteccionCivil'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhCestaTicketProteccionCivil') ? [] : ['className' => MrrhhCestaTicketProteccionCivilTable::class];
        $this->MrrhhCestaTicketProteccionCivil = TableRegistry::getTableLocator()->get('MrrhhCestaTicketProteccionCivil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhCestaTicketProteccionCivil);

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
