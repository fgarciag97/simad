<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrrhhHistBeComisionServicioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrrhhHistBeComisionServicioTable Test Case
 */
class MrrhhHistBeComisionServicioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MrrhhHistBeComisionServicioTable
     */
    public $MrrhhHistBeComisionServicio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MrrhhHistBeComisionServicio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MrrhhHistBeComisionServicio') ? [] : ['className' => MrrhhHistBeComisionServicioTable::class];
        $this->MrrhhHistBeComisionServicio = TableRegistry::getTableLocator()->get('MrrhhHistBeComisionServicio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrrhhHistBeComisionServicio);

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
