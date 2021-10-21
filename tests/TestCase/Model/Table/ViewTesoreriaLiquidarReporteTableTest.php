<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewTesoreriaLiquidarReporteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewTesoreriaLiquidarReporteTable Test Case
 */
class ViewTesoreriaLiquidarReporteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewTesoreriaLiquidarReporteTable
     */
    public $ViewTesoreriaLiquidarReporte;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewTesoreriaLiquidarReporte'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewTesoreriaLiquidarReporte') ? [] : ['className' => ViewTesoreriaLiquidarReporteTable::class];
        $this->ViewTesoreriaLiquidarReporte = TableRegistry::getTableLocator()->get('ViewTesoreriaLiquidarReporte', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewTesoreriaLiquidarReporte);

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
