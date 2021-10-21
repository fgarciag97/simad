<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViewMrrhhRequisicionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViewMrrhhRequisicionTable Test Case
 */
class ViewMrrhhRequisicionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViewMrrhhRequisicionTable
     */
    public $ViewMrrhhRequisicion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ViewMrrhhRequisicion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ViewMrrhhRequisicion') ? [] : ['className' => ViewMrrhhRequisicionTable::class];
        $this->ViewMrrhhRequisicion = TableRegistry::getTableLocator()->get('ViewMrrhhRequisicion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ViewMrrhhRequisicion);

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
