<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewTesoreriaLiquidarReporteCalculoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewTesoreriaLiquidarReporteCalculoTable Test Case
 */
class ViewTesoreriaLiquidarReporteCalculoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewTesoreriaLiquidarReporteCalculoTable
     */
    public $ViewTesoreriaLiquidarReporteCalculo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewTesoreriaLiquidarReporteCalculo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewTesoreriaLiquidarReporteCalculo') ? [] : ['className' => ViewTesoreriaLiquidarReporteCalculoTable::class];
        $this->ViewTesoreriaLiquidarReporteCalculo = TableRegistry::getTableLocator()->get('ViewTesoreriaLiquidarReporteCalculo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewTesoreriaLiquidarReporteCalculo);

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
