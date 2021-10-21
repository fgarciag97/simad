<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhGruposProteccionCivilTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhGruposProteccionCivilTable Test Case
 */
class MrrhhGruposProteccionCivilTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhGruposProteccionCivilTable
     */
    public $MrrhhGruposProteccionCivil;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhGruposProteccionCivil'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhGruposProteccionCivil') ? [] : ['className' => MrrhhGruposProteccionCivilTable::class];
        $this->MrrhhGruposProteccionCivil = TableRegistry::getTableLocator()->get('MrrhhGruposProteccionCivil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhGruposProteccionCivil);

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
