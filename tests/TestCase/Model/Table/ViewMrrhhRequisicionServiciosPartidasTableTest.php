<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhRequisicionServiciosPartidasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhRequisicionServiciosPartidasTable Test Case
 */
class ViewMrrhhRequisicionServiciosPartidasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhRequisicionServiciosPartidasTable
     */
    public $ViewMrrhhRequisicionServiciosPartidas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhRequisicionServiciosPartidas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhRequisicionServiciosPartidas') ? [] : ['className' => ViewMrrhhRequisicionServiciosPartidasTable::class];
        $this->ViewMrrhhRequisicionServiciosPartidas = TableRegistry::getTableLocator()->get('ViewMrrhhRequisicionServiciosPartidas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhRequisicionServiciosPartidas);

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
