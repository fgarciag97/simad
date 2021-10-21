<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhComisionServicioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhComisionServicioTable Test Case
 */
class ViewMrrhhComisionServicioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhComisionServicioTable
     */
    public $ViewMrrhhComisionServicio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhComisionServicio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhComisionServicio') ? [] : ['className' => ViewMrrhhComisionServicioTable::class];
        $this->ViewMrrhhComisionServicio = TableRegistry::getTableLocator()->get('ViewMrrhhComisionServicio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhComisionServicio);

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
