<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistoricoProteccionCivilTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistoricoProteccionCivilTable Test Case
 */
class MrrhhHistoricoProteccionCivilTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistoricoProteccionCivilTable
     */
    public $MrrhhHistoricoProteccionCivil;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistoricoProteccionCivil'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistoricoProteccionCivil') ? [] : ['className' => MrrhhHistoricoProteccionCivilTable::class];
        $this->MrrhhHistoricoProteccionCivil = TableRegistry::getTableLocator()->get('MrrhhHistoricoProteccionCivil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistoricoProteccionCivil);

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
