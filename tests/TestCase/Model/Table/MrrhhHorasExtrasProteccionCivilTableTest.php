<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHorasExtrasProteccionCivilTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHorasExtrasProteccionCivilTable Test Case
 */
class MrrhhHorasExtrasProteccionCivilTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHorasExtrasProteccionCivilTable
     */
    public $MrrhhHorasExtrasProteccionCivil;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHorasExtrasProteccionCivil'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHorasExtrasProteccionCivil') ? [] : ['className' => MrrhhHorasExtrasProteccionCivilTable::class];
        $this->MrrhhHorasExtrasProteccionCivil = TableRegistry::getTableLocator()->get('MrrhhHorasExtrasProteccionCivil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHorasExtrasProteccionCivil);

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
