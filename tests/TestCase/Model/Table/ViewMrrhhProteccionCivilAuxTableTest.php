<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhProteccionCivilAuxTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhProteccionCivilAuxTable Test Case
 */
class ViewMrrhhProteccionCivilAuxTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhProteccionCivilAuxTable
     */
    public $ViewMrrhhProteccionCivilAux;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhProteccionCivilAux'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhProteccionCivilAux') ? [] : ['className' => ViewMrrhhProteccionCivilAuxTable::class];
        $this->ViewMrrhhProteccionCivilAux = TableRegistry::getTableLocator()->get('ViewMrrhhProteccionCivilAux', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhProteccionCivilAux);

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
