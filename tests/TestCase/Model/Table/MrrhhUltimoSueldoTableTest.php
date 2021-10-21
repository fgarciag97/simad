<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhUltimoSueldoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhUltimoSueldoTable Test Case
 */
class MrrhhUltimoSueldoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhUltimoSueldoTable
     */
    public $MrrhhUltimoSueldo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhUltimoSueldo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhUltimoSueldo') ? [] : ['className' => MrrhhUltimoSueldoTable::class];
        $this->MrrhhUltimoSueldo = TableRegistry::getTableLocator()->get('MrrhhUltimoSueldo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhUltimoSueldo);

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
