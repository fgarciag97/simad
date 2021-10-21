<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHorasExtrasProteccionCivilsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHorasExtrasProteccionCivilsTable Test Case
 */
class ViewMrrhhHorasExtrasProteccionCivilsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHorasExtrasProteccionCivilsTable
     */
    public $ViewMrrhhHorasExtrasProteccionCivils;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHorasExtrasProteccionCivils'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHorasExtrasProteccionCivils') ? [] : ['className' => ViewMrrhhHorasExtrasProteccionCivilsTable::class];
        $this->ViewMrrhhHorasExtrasProteccionCivils = TableRegistry::getTableLocator()->get('ViewMrrhhHorasExtrasProteccionCivils', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHorasExtrasProteccionCivils);

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
