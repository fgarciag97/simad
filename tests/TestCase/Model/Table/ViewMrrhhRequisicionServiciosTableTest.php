<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhRequisicionServiciosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhRequisicionServiciosTable Test Case
 */
class ViewMrrhhRequisicionServiciosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhRequisicionServiciosTable
     */
    public $ViewMrrhhRequisicionServicios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhRequisicionServicios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhRequisicionServicios') ? [] : ['className' => ViewMrrhhRequisicionServiciosTable::class];
        $this->ViewMrrhhRequisicionServicios = TableRegistry::getTableLocator()->get('ViewMrrhhRequisicionServicios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhRequisicionServicios);

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
