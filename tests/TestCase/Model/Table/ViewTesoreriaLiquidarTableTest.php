<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewTesoreriaLiquidarTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewTesoreriaLiquidarTable Test Case
 */
class ViewTesoreriaLiquidarTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewTesoreriaLiquidarTable
     */
    public $ViewTesoreriaLiquidar;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewTesoreriaLiquidar'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewTesoreriaLiquidar') ? [] : ['className' => ViewTesoreriaLiquidarTable::class];
        $this->ViewTesoreriaLiquidar = TableRegistry::getTableLocator()->get('ViewTesoreriaLiquidar', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewTesoreriaLiquidar);

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
