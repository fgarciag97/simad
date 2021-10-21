<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResolucionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResolucionesTable Test Case
 */
class ResolucionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ResolucionesTable
     */
    public $Resoluciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Resoluciones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Resoluciones') ? [] : ['className' => ResolucionesTable::class];
        $this->Resoluciones = TableRegistry::getTableLocator()->get('Resoluciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Resoluciones);

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
