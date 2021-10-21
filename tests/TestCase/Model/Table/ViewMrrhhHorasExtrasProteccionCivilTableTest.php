<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhHorasExtrasProteccionCivilTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhHorasExtrasProteccionCivilTable Test Case
 */
class ViewMrrhhHorasExtrasProteccionCivilTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhHorasExtrasProteccionCivilTable
     */
    public $ViewMrrhhHorasExtrasProteccionCivil;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhHorasExtrasProteccionCivil'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhHorasExtrasProteccionCivil') ? [] : ['className' => ViewMrrhhHorasExtrasProteccionCivilTable::class];
        $this->ViewMrrhhHorasExtrasProteccionCivil = TableRegistry::getTableLocator()->get('ViewMrrhhHorasExtrasProteccionCivil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhHorasExtrasProteccionCivil);

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
