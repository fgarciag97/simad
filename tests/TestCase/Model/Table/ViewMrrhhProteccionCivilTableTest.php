<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhProteccionCivilTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhProteccionCivilTable Test Case
 */
class ViewMrrhhProteccionCivilTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhProteccionCivilTable
     */
    public $ViewMrrhhProteccionCivil;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhProteccionCivil'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhProteccionCivil') ? [] : ['className' => ViewMrrhhProteccionCivilTable::class];
        $this->ViewMrrhhProteccionCivil = TableRegistry::getTableLocator()->get('ViewMrrhhProteccionCivil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhProteccionCivil);

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
