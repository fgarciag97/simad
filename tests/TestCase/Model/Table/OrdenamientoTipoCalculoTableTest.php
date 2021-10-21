<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdenamientoTipoCalculoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdenamientoTipoCalculoTable Test Case
 */
class OrdenamientoTipoCalculoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdenamientoTipoCalculoTable
     */
    public $OrdenamientoTipoCalculo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OrdenamientoTipoCalculo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrdenamientoTipoCalculo') ? [] : ['className' => OrdenamientoTipoCalculoTable::class];
        $this->OrdenamientoTipoCalculo = TableRegistry::getTableLocator()->get('OrdenamientoTipoCalculo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdenamientoTipoCalculo);

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
