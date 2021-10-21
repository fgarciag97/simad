<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdenamientoServicioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdenamientoServicioTable Test Case
 */
class OrdenamientoServicioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdenamientoServicioTable
     */
    public $OrdenamientoServicio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OrdenamientoServicio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrdenamientoServicio') ? [] : ['className' => OrdenamientoServicioTable::class];
        $this->OrdenamientoServicio = TableRegistry::getTableLocator()->get('OrdenamientoServicio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdenamientoServicio);

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
