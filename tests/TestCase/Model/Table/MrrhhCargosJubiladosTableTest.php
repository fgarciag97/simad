<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhCargosJubiladosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhCargosJubiladosTable Test Case
 */
class MrrhhCargosJubiladosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhCargosJubiladosTable
     */
    public $MrrhhCargosJubilados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhCargosJubilados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhCargosJubilados') ? [] : ['className' => MrrhhCargosJubiladosTable::class];
        $this->MrrhhCargosJubilados = TableRegistry::getTableLocator()->get('MrrhhCargosJubilados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhCargosJubilados);

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
