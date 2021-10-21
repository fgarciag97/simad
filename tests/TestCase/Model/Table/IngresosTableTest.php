<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IngresosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IngresosTable Test Case
 */
class IngresosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IngresosTable
     */
    public $Ingresos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ingresos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ingresos') ? [] : ['className' => IngresosTable::class];
        $this->Ingresos = TableRegistry::getTableLocator()->get('Ingresos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ingresos);

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
