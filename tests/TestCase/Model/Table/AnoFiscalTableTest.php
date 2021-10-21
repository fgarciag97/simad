<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AnoFiscalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AnoFiscalTable Test Case
 */
class AnoFiscalTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AnoFiscalTable
     */
    public $AnoFiscal;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AnoFiscal'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AnoFiscal') ? [] : ['className' => AnoFiscalTable::class];
        $this->AnoFiscal = TableRegistry::getTableLocator()->get('AnoFiscal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AnoFiscal);

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
