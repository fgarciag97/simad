<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrimaAntiguedadTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrimaAntiguedadTable Test Case
 */
class PrimaAntiguedadTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PrimaAntiguedadTable
     */
    public $PrimaAntiguedad;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PrimaAntiguedad'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PrimaAntiguedad') ? [] : ['className' => PrimaAntiguedadTable::class];
        $this->PrimaAntiguedad = TableRegistry::getTableLocator()->get('PrimaAntiguedad', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PrimaAntiguedad);

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
