<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhCestaTicketProteccionCivilTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhCestaTicketProteccionCivilTable Test Case
 */
class ViewMrrhhCestaTicketProteccionCivilTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhCestaTicketProteccionCivilTable
     */
    public $ViewMrrhhCestaTicketProteccionCivil;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhCestaTicketProteccionCivil'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhCestaTicketProteccionCivil') ? [] : ['className' => ViewMrrhhCestaTicketProteccionCivilTable::class];
        $this->ViewMrrhhCestaTicketProteccionCivil = TableRegistry::getTableLocator()->get('ViewMrrhhCestaTicketProteccionCivil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhCestaTicketProteccionCivil);

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
